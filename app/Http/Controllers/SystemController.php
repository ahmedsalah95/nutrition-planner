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
        $saveData->day1_breakfast =str_replace('و' ,'<br>',$request['day1_breakfast']);
        $saveData->day1_lunch = str_replace('و' ,'<br>',$request['day1_lunch']);
        $saveData->day1_dinner =str_replace('و' ,'<br>',$request['day1_dinner']);
        $saveData->day1_break1 = str_replace('و' ,'<br>',$request['day1_break1']);
        $saveData->day1_break2 = str_replace('و' ,'<br>',$request['day1_break2']);
        $saveData->day1_notes = str_replace('و' ,'<br>',$request['day1_notes']);
        $saveData->carbSum  = str_replace('و' ,'<br>',$request['carbSum']);
        $saveData->fatsSum  =str_replace('و' ,'<br>',$request['fatsSum']);
        $saveData->proteinSum=str_replace('و' ,'<br>',$request['proteinSum']);


        //day 2
        $saveData->day2_breakfast =str_replace('و' ,'<br>',$request['day2_breakfast']);
        $saveData->day2_lunch = str_replace('و' ,'<br>',$request['day2_lunch']);
        $saveData->day2_dinner =str_replace('و' ,'<br>',$request['day2_dinner']);
        $saveData->day2_break1 = str_replace('و' ,'<br>',$request['day2_break1']);
        $saveData->day2_break2 = str_replace('و' ,'<br>',$request['day2_break2']);
        $saveData->day2_notes = str_replace('و' ,'<br>',$request['day2_notes']);
        $saveData->carbSum2  = str_replace('و' ,'<br>',$request['carbSum2']);
        $saveData->fatsSum2  =str_replace('و' ,'<br>',$request['fatsSum2']);
        $saveData->proteinSum2=str_replace('و' ,'<br>',$request['proteinSum2']);


        //day 3
        $saveData->day3_breakfast =str_replace('و' ,'<br>',$request['day3_breakfast']);
        $saveData->day3_lunch = str_replace('و' ,'<br>',$request['day3_lunch']);
        $saveData->day3_dinner =str_replace('و' ,'<br>',$request['day3_dinner']);
        $saveData->day3_break1 = str_replace('و' ,'<br>',$request['day3_break1']);
        $saveData->day3_break2 = str_replace('و' ,'<br>',$request['day3_break2']);
        $saveData->day3_notes = str_replace('و' ,'<br>',$request['day3_notes']);
        $saveData->carbSum3  = str_replace('و' ,'<br>',$request['carbSum3']);
        $saveData->fatsSum3  =str_replace('و' ,'<br>',$request['fatsSum3']);
        $saveData->proteinSum3=str_replace('و' ,'<br>',$request['proteinSum3']);
        //day 4
        $saveData->day4_breakfast =str_replace('و' ,'<br>',$request['day4_breakfast']);
        $saveData->day4_lunch = str_replace('و' ,'<br>',$request['day4_lunch']);
        $saveData->day4_dinner =str_replace('و' ,'<br>',$request['day4_dinner']);
        $saveData->day4_break1 = str_replace('و' ,'<br>',$request['day4_break1']);
        $saveData->day4_break2 = str_replace('و' ,'<br>',$request['day4_break2']);
        $saveData->day4_notes = str_replace('و' ,'<br>',$request['day4_notes']);
        $saveData->carbSum4  = str_replace('و' ,'<br>',$request['carbSum4']);
        $saveData->fatsSum4  =str_replace('و' ,'<br>',$request['fatsSum4']);
        $saveData->proteinSum4=str_replace('و' ,'<br>',$request['proteinSum4']);

        //day 5
        $saveData->day5_breakfast =str_replace('و' ,'<br>',$request['day5_breakfast']);
        $saveData->day5_lunch = str_replace('و' ,'<br>',$request['day5_lunch']);
        $saveData->day5_dinner =str_replace('و' ,'<br>',$request['day5_dinner']);
        $saveData->day5_break1 = str_replace('و' ,'<br>',$request['day5_break1']);
        $saveData->day5_break2 = str_replace('و' ,'<br>',$request['day5_break2']);
        $saveData->day5_notes = str_replace('و' ,'<br>',$request['day5_notes']);
        $saveData->carbSum5  = str_replace('و' ,'<br>',$request['carbSum5']);
        $saveData->fatsSum5  =str_replace('و' ,'<br>',$request['fatsSum5']);
        $saveData->proteinSum5=str_replace('و' ,'<br>',$request['proteinSum5']);
        //day 6
        $saveData->day6_breakfast =str_replace('و' ,'<br>',$request['day6_breakfast']);
        $saveData->day6_lunch = str_replace('و' ,'<br>',$request['day6_lunch']);
        $saveData->day6_dinner =str_replace('و' ,'<br>',$request['day6_dinner']);
        $saveData->day6_break1 = str_replace('و' ,'<br>',$request['day6_break1']);
        $saveData->day6_break2 = str_replace('و' ,'<br>',$request['day6_break2']);
        $saveData->day6_notes = str_replace('و' ,'<br>',$request['day6_notes']);
        $saveData->carbSum6  = str_replace('و' ,'<br>',$request['carbSum6']);
        $saveData->fatsSum6  =str_replace('و' ,'<br>',$request['fatsSum6']);
        $saveData->proteinSum6=str_replace('و' ,'<br>',$request['proteinSum6']);

        //day 7
        $saveData->day7_breakfast =str_replace('و' ,'<br>',$request['day7_breakfast']);
        $saveData->day7_lunch = str_replace('و' ,'<br>',$request['day7_lunch']);
        $saveData->day7_dinner =str_replace('و' ,'<br>',$request['day7_dinner']);
        $saveData->day7_break1 = str_replace('و' ,'<br>',$request['day7_break1']);
        $saveData->day7_break2 = str_replace('و' ,'<br>',$request['day7_break2']);
        $saveData->day7_notes = str_replace('و' ,'<br>',$request['day7_notes']);
        $saveData->carbSum7  = str_replace('و' ,'<br>',$request['carbSum7']);
        $saveData->fatsSum7  =str_replace('و' ,'<br>',$request['fatsSum7']);
        $saveData->proteinSum7=str_replace('و' ,'<br>',$request['proteinSum7']);


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
        $saveData = System::where('id',$id)->first();

        $saveData->system_name = $request['system_name'];
        $saveData->system_desc = $request['system_desc'];

        //day 1
        $saveData->day1_breakfast =str_replace('و' ,'<br>',$request['day1_breakfast']);
        $saveData->day1_lunch = str_replace('و' ,'<br>',$request['day1_lunch']);
        $saveData->day1_dinner =str_replace('و' ,'<br>',$request['day1_dinner']);
        $saveData->day1_break1 = str_replace('و' ,'<br>',$request['day1_break1']);
        $saveData->day1_break2 = str_replace('و' ,'<br>',$request['day1_break2']);
        $saveData->day1_notes =  $request['day1_notes'];
        $saveData->carbSum  = str_replace('و' ,'<br>',$request['carbSum']);
        $saveData->fatsSum  =str_replace('و' ,'<br>',$request['fatsSum']);
        $saveData->proteinSum=str_replace('و' ,'<br>',$request['proteinSum']);


        //day 2
        $saveData->day2_breakfast =str_replace('و' ,'<br>',$request['day2_breakfast']);
        $saveData->day2_lunch = str_replace('و' ,'<br>',$request['day2_lunch']);
        $saveData->day2_dinner =str_replace('و' ,'<br>',$request['day2_dinner']);
        $saveData->day2_break1 = str_replace('و' ,'<br>',$request['day2_break1']);
        $saveData->day2_break2 = str_replace('و' ,'<br>',$request['day2_break2']);
        $saveData->day2_notes =  $request['day2_notes'];
        $saveData->carbSum2  = str_replace('و' ,'<br>',$request['carbSum2']);
        $saveData->fatsSum2  =str_replace('و' ,'<br>',$request['fatsSum2']);
        $saveData->proteinSum2=str_replace('و' ,'<br>',$request['proteinSum2']);


        //day 3
        $saveData->day3_breakfast =str_replace('و' ,'<br>',$request['day3_breakfast']);
        $saveData->day3_lunch = str_replace('و' ,'<br>',$request['day3_lunch']);
        $saveData->day3_dinner =str_replace('و' ,'<br>',$request['day3_dinner']);
        $saveData->day3_break1 = str_replace('و' ,'<br>',$request['day3_break1']);
        $saveData->day3_break2 = str_replace('و' ,'<br>',$request['day3_break2']);
        $saveData->day3_notes =  $request['day3_notes'];
        $saveData->carbSum3  = str_replace('و' ,'<br>',$request['carbSum3']);
        $saveData->fatsSum3  =str_replace('و' ,'<br>',$request['fatsSum3']);
        $saveData->proteinSum3=str_replace('و' ,'<br>',$request['proteinSum3']);
        //day 4
        $saveData->day4_breakfast =str_replace('و' ,'<br>',$request['day4_breakfast']);
        $saveData->day4_lunch = str_replace('و' ,'<br>',$request['day4_lunch']);
        $saveData->day4_dinner =str_replace('و' ,'<br>',$request['day4_dinner']);
        $saveData->day4_break1 = str_replace('و' ,'<br>',$request['day4_break1']);
        $saveData->day4_break2 = str_replace('و' ,'<br>',$request['day4_break2']);
        $saveData->day4_notes = $request['day4_notes'];
        $saveData->carbSum4  = str_replace('و' ,'<br>',$request['carbSum4']);
        $saveData->fatsSum4  =str_replace('و' ,'<br>',$request['fatsSum4']);
        $saveData->proteinSum4=str_replace('و' ,'<br>',$request['proteinSum4']);

        //day 5
        $saveData->day5_breakfast =str_replace('و' ,'<br>',$request['day5_breakfast']);
        $saveData->day5_lunch = str_replace('و' ,'<br>',$request['day5_lunch']);
        $saveData->day5_dinner =str_replace('و' ,'<br>',$request['day5_dinner']);
        $saveData->day5_break1 = str_replace('و' ,'<br>',$request['day5_break1']);
        $saveData->day5_break2 = str_replace('و' ,'<br>',$request['day5_break2']);
        $saveData->day5_notes =  $request['day5_notes'];
        $saveData->carbSum5  = str_replace('و' ,'<br>',$request['carbSum5']);
        $saveData->fatsSum5  =str_replace('و' ,'<br>',$request['fatsSum5']);
        $saveData->proteinSum5=str_replace('و' ,'<br>',$request['proteinSum5']);
        //day 6
        $saveData->day6_breakfast =str_replace('و' ,'<br>',$request['day6_breakfast']);
        $saveData->day6_lunch = str_replace('و' ,'<br>',$request['day6_lunch']);
        $saveData->day6_dinner =str_replace('و' ,'<br>',$request['day6_dinner']);
        $saveData->day6_break1 = str_replace('و' ,'<br>',$request['day6_break1']);
        $saveData->day6_break2 = str_replace('و' ,'<br>',$request['day6_break2']);
        $saveData->day6_notes = $request['day6_notes'];
        $saveData->carbSum6  = str_replace('و' ,'<br>',$request['carbSum6']);
        $saveData->fatsSum6  =str_replace('و' ,'<br>',$request['fatsSum6']);
        $saveData->proteinSum6=str_replace('و' ,'<br>',$request['proteinSum6']);

        //day 7
        $saveData->day7_breakfast =str_replace('و' ,'<br>',$request['day7_breakfast']);
        $saveData->day7_lunch = str_replace('و' ,'<br>',$request['day7_lunch']);
        $saveData->day7_dinner =str_replace('و' ,'<br>',$request['day7_dinner']);
        $saveData->day7_break1 = str_replace('و' ,'<br>',$request['day7_break1']);
        $saveData->day7_break2 = str_replace('و' ,'<br>',$request['day7_break2']);
        $saveData->day7_notes = $request['day7_notes'];
        $saveData->carbSum7  = str_replace('و' ,'<br>',$request['carbSum7']);
        $saveData->fatsSum7  =str_replace('و' ,'<br>',$request['fatsSum7']);
        $saveData->proteinSum7=str_replace('و' ,'<br>',$request['proteinSum7']);


        $saveData->save();

        return redirect('system');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        System::where('id',$id)->delete();
        return redirect('system');
    }
}
