<?php

namespace App\Http\Controllers;

use App\Patient;
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

        $patients = Patient::all();
        return view('dashboard.pages.patient.index')->with(['patients'=>$patients]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[

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

            'goal'=>'required',

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
        $patientData->age = $request['age'];
        $patientData->health_condition = $request['health_condition'];
        $patientData->body_fat = $request['body_fat'];
        $patientData->activity_level = $request['activity_level'];
        $patientData->food_type_diet = $request['food_type_diet'];
        $patientData->dont_eat = $request['dont_eat'];
        $patientData->goal           =$request['goal'];

        $patientData->save();

        return redirect('patient');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
