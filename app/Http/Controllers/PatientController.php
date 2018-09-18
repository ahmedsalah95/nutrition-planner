<?php

namespace App\Http\Controllers;

use App\Note;
use App\Patient;
use App\System;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $patients = Patient::paginate(10);
        return view('dashboard.pages.patient.index')->with(['patients' => $patients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.patient.addPatient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            /*
                        'name'=>'required',
                        'phone'=>'required',
                        'register_date'=>'required',
                        'email'=>'email|required',
                        'gender'=>'required',
                        'birthday'=>'required',

                        'height' => 'required',
                        'weight' => 'required',


                        'age'=>'required',
                        'health_condition'=>'required',
                        'body_fat'=>'required',
                        'activity_level'=>'required',
                        'food_type_diet' => 'required',

                        'goal'=>'required', */

        ]);

        $patientData = new Patient();
        $patientData->name = $request['name'];
        $patientData->phone = $request['phone'];
        $patientData->register_date = $request['register_date'];
        $patientData->email = $request['email'];
        $patientData->gender = $request['gender'];
        $patientData->birthday = $request['birthday'];
        $patientData->height = $request['height'];
        $patientData->weight = $request['weight'];
        $x = str_replace("-","/",$request['birthday']);
        $year = explode("/",$x);
        if($year[2]<1000)
        {
            $patientData->age = date("Y") - $year[0];
        }else
        {
            $patientData->age = date("Y") - $year[2];
        }

        $patientData->health_condition = $request['health_condition'];
        $patientData->body_fat = $request['body_fat'];
        $patientData->activity_level = $request['activity_level'];
        $patientData->food_type_diet = $request['food_type_diet'];
        $patientData->dont_eat = $request['dont_eat'];
        $patientData->goal = $request['goal'];
        $patientData->sensitivity = $request['sensitivity'];
        $patientData->blood = $request['blood'];
        $patientData->sleeping_hours = $request['sleeping_hours'];
        $patientData->water = $request['water'];
        $patientData->diet = $request['diet'];
        $patientData->diet_name = $request['diet_name'];
        $patientData->diet_result = $request['diet_result'];
        $patientData->fats_in_body = $request['fats_in_body'];
        $patientData->muscles = $request['muscles'];
        $patientData->water_in_body = $request['water_in_body'];
        $patientData->minerals = $request['minerals'];
        $patientData->khasr = $request['khasr'];
        $patientData->weight_first_time = $request['weight'];
        $patientData->fats_in_body_first_time = $request['fats_in_body'];
        $patientData->muscles_first_time = $request['muscles'];
        $patientData->water_in_body_first_time = $request['water_in_body'];
        $patientData->minerals_first_time = $request['minerals'];

        $patientData->khasr_first_time = $request['khasr'];


        $patientData->save();


        return redirect('patient');


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = Patient::where('id', $id)->first();

        $notes = Note::where('patient_id', $id)->get();
        return view('dashboard.pages.patient.showPatient')->with([
            'patient' => $patient,
            'notes' => $notes
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = Patient::where('id', $id)->first();
        return view('dashboard.pages.patient.updatePatient')->with([
            'patient' => $patient,
            'id' => $id,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [

            /*    'name'=>'required',
                'phone'=>'required',
                'register_date'=>'required',
                'email'=>'email|required',
                'gender'=>'required',
                'birthday'=>'required',

                'height' => 'required',
                'weight' => 'required',


                'age'=>'required',
                'health_condition'=>'required',
                'body_fat'=>'required',
                'activity_level'=>'required',
                'food_type_diet' => 'required',

                'goal'=>'required', */

        ]);
        $patientData = Patient::where('id', $id)->first();


        $patientData->save();

        if ($patientData->weight != $request['weight'] or $patientData->fats_in_body!=$request['fats_in_body']or
            $patientData->muscles!=$request['muscles']  or  $patientData->water_in_body!=$request['water_in_body'] or
            $patientData->minerals!=$request['minerals'] or $patientData->khasr!=$request['khasr']
        ) {
            $note = new Note();
            $note->patient_id = $id;

            $note->note = "نسبة الدهون في الجسم :  " . $request['fats_in_body'] . " ،  " . "  نسبة العضلات في الجسم :  " . $request['muscles'] .
                " ، " . " نسبة المياة في الجسم :  " . $request['water_in_body'] . " ، " . "  نسبة المعادن في الجسم :  " . $request['minerals'] .
                " ، " . " محيط الخصر :  " . $request['khasr'] . " ، " . "  وزن الجسم :  " . $request['weight'];

            $note->save();
        }

        $patientData->name = $request['name'];
        $patientData->phone = $request['phone'];
        $patientData->register_date = $request['register_date'];
        $patientData->email = $request['email'];
        $patientData->gender = $request['gender'];
        $patientData->birthday = $request['birthday'];
        $patientData->height = $request['height'];

        $x = str_replace("-","/",$request['birthday']);
        $year = explode("/",$x);
        if($year[2]<1000)
        {
            $patientData->age = date("Y") - $year[0];
        }else
        {
            $patientData->age = date("Y") - $year[2];
        }
        $patientData->health_condition = $request['health_condition'];
        $patientData->body_fat = $request['body_fat'];
        $patientData->activity_level = $request['activity_level'];
        $patientData->food_type_diet = $request['food_type_diet'];
        $patientData->dont_eat = $request['dont_eat'];
        $patientData->goal = $request['goal'];
        $patientData->sensitivity = $request['sensitivity'];
        $patientData->blood = $request['blood'];
        $patientData->sleeping_hours = $request['sleeping_hours'];
        $patientData->water = $request['water'];
        $patientData->diet = $request['diet'];
        $patientData->diet_name = $request['diet_name'];
        $patientData->diet_result = $request['diet_result'];

           $patientData->weight = $request['weight'];
           $patientData->fats_in_body=$request['fats_in_body'];
           $patientData->muscles=$request['muscles'];
           $patientData->water_in_body=$request['water_in_body'];
           $patientData->minerals=$request['minerals'];
           $patientData->khasr=$request['khasr'];
        $patientData->save();

        return redirect('patient');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Patient::where('id', $id)->delete();
        return redirect('patient');
    }

    public function saveNote(Request $request, $id)
    {


        $notesNumber = count($request->notes);

        for ($i = 0; $i < $notesNumber; $i++) {

            $saveNote = new Note();
            $saveNote->patient_id = $id;
            $saveNote->note = $request->notes[$i];
            $saveNote->save();
        }

        return redirect('patient/' . $id);

    }

    public function deleteNote($id, $pid)
    {
        Note::where('id', $id)->delete();
        return back();

    }

    public function saveSystem(Request $request, $id)
    {
        $data = Patient::where('id', $id)->first();
        $data->system = $request['patientSystem'];
        $data->save();

        return redirect('/patient/' . $id);
    }

    public function updateSpecificSystem($id, Request $request)
    {

        $data = System::where('id', $request['patientSystem'])->first();

        return view('dashboard.pages.system.updateSpecificSystem')->with([
            'id' => $id,
            'data' => $data,
        ]);
    }


}
