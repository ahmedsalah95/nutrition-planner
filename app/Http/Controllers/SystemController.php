<?php

namespace App\Http\Controllers;

use App\System;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $systems = System::paginate(3);
        return view('dashboard.pages.system.index')->with([
            'systems'=>$systems
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.system.addSystem');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $saveData = new System();

        $saveData->system_name = $request['system_name'];
        $saveData->system_desc = $request['system_desc'];
        //day 1
        $saveData->day1_breakfast = $request['day1_breakfast'];
        $saveData->day1_lunch = $request['day1_lunch'];
        $saveData->day1_dinner = $request['day1_dinner'];
        $saveData->day1_break1 = $request['day1_break1'];
        $saveData->day1_break2 = $request['day1_break2'];
        $saveData->day1_notes = $request['day1_notes'];
        $saveData->carbSum  = $request['carbSum'];
        $saveData->fatsSum  =$request['fatsSum'];
        $saveData->proteinSum=$request['proteinSum'];


        //day 2
        $saveData->day2_breakfast = $request['day2_breakfast'];
        $saveData->day2_lunch = $request['day2_lunch'];
        $saveData->day2_dinner = $request['day2_dinner'];
        $saveData->day2_break1 = $request['day2_break1'];
        $saveData->day2_break2 = $request['day2_break2'];
        $saveData->day2_notes = $request['day2_notes'];

        $saveData->carbSum2  = $request['carbSum2'];
        $saveData->fatsSum2  =$request['fatsSum2'];
        $saveData->proteinSum2=$request['proteinSum2'];


        //day 3
        $saveData->day3_breakfast = $request['day3_breakfast'];
        $saveData->day3_lunch = $request['day3_lunch'];
        $saveData->day3_dinner = $request['day3_dinner'];
        $saveData->day3_break1 = $request['day3_break1'];
        $saveData->day3_break2 = $request['day3_break2'];
        $saveData->day3_notes = $request['day3_notes'];

        $saveData->carbSum3  = $request['carbSum3'];
        $saveData->fatsSum3  =$request['fatsSum3'];
        $saveData->proteinSum3=$request['proteinSum3'];
        //day 4
        $saveData->day4_breakfast = $request['day4_breakfast'];
        $saveData->day4_lunch = $request['day4_lunch'];
        $saveData->day4_dinner = $request['day4_dinner'];
        $saveData->day4_break1 = $request['day4_break1'];
        $saveData->day4_break2 = $request['day4_break2'];
        $saveData->day4_notes = $request['day4_notes'];
        $saveData->carbSum4  = $request['carbSum4'];
        $saveData->fatsSum4  =$request['fatsSum4'];
        $saveData->proteinSum4=$request['proteinSum4'];

        //day 5
        $saveData->day5_breakfast = $request['day5_breakfast'];
        $saveData->day5_lunch = $request['day5_lunch'];
        $saveData->day5_dinner = $request['day5_dinner'];
        $saveData->day5_break1 = $request['day5_break1'];
        $saveData->day5_break2 = $request['day5_break2'];
        $saveData->day5_notes = $request['day5_notes'];
        $saveData->carbSum5  = $request['carbSum5'];
        $saveData->fatsSum5  =$request['fatsSum5'];
        $saveData->proteinSum5=$request['proteinSum5'];
        //day 6
        $saveData->day6_breakfast = $request['day6_breakfast'];
        $saveData->day6_lunch = $request['day6_lunch'];
        $saveData->day6_dinner = $request['day6_dinner'];
        $saveData->day6_break1 = $request['day6_break1'];
        $saveData->day6_break2 = $request['day6_break2'];
        $saveData->day6_notes = $request['day6_notes'];
        $saveData->carbSum6  = $request['carbSum6'];
        $saveData->fatsSum6  =$request['fatsSum6'];
        $saveData->proteinSum6=$request['proteinSum6'];

        //day 7
        $saveData->day7_breakfast = $request['day7_breakfast'];
        $saveData->day7_lunch = $request['day7_lunch'];
        $saveData->day7_dinner = $request['day7_dinner'];
        $saveData->day7_break1 = $request['day7_break1'];
        $saveData->day7_break2 = $request['day7_break2'];
        $saveData->day7_notes = $request['day7_notes'];
        $saveData->carbSum7  = $request['carbSum7'];
        $saveData->fatsSum7  =$request['fatsSum7'];
        $saveData->proteinSum7=$request['proteinSum7'];


        $saveData->save();

        return redirect('system');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = System::where('id',$id)->first();
        return view('dashboard.pages.system.showSystem')->with([
            'data'=>$data,

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = System::where('id',$id)->first();
        return view('dashboard.pages.system.updateSystem')->with([
            'data'=>$data,
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
