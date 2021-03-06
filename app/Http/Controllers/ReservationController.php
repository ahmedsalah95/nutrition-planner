<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $patients = Reservation::all();
        return view('dashboard.pages.reservation.index')->with([
            'patients'=>$patients
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.reservation.addReservation');
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
            'patient_name'=>'required',
            'patient_number'=>'required',
            'reservation_date'=>'required'


        ]);

        $saveData = new Reservation();

        $saveData->patient_name = $request['patient_name'];
        $saveData->patient_number=$request['patient_number'];
        $date = str_replace("-","/",$request['reservation_date']);
        $dateArray = explode("/",$date);

        if($dateArray[2] <1000)
        {
            $day = $dateArray[2];
            $month=$dateArray[1];
            $year = $dateArray[0];
            $saveData->reservation_date=$month."/".$day."/".$year;
        }else
        {
            $saveData->reservation_date=$request['reservation_date'];
        }

        $saveData->save();

        return redirect('reservation');
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
        $data = Reservation::where('id',$id)->first();
        return view('dashboard.pages.reservation.updateReservation')->with([
            'data'=>$data,
            'id'=>$id
        ]);
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
        $this->validate($request,[
            'patient_name'=>'required',
            'patient_number'=>'required',
            'reservation_date'=>'required'


        ]);

        $saveData = Reservation::where('id',$id)->first();

        $saveData->patient_name = $request['patient_name'];
        $saveData->patient_number=$request['patient_number'];
        $date = str_replace("-","/",$request['reservation_date']);
        $dateArray = explode("/",$date);

        if($dateArray[2] <1000)
        {
            $day = $dateArray[2];
            $month=$dateArray[1];
            $year = $dateArray[0];
            $saveData->reservation_date=$month."/".$day."/".$year;
        }else
        {
            $saveData->reservation_date=$request['reservation_date'];
        }
        $saveData->save();

        return redirect('reservation');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Reservation::where('id',$id)->delete();

        return redirect('reservation');
    }
}
