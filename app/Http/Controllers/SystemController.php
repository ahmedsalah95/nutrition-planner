<?php

namespace App\Http\Controllers;

use App\Patient;
use App\System;
use Illuminate\Http\Request;

class SystemController extends Controller
{

    public function index()
    {
        $systems = System::all();
        return view('dashboard.pages.system.index')->with([
            'systems'=>$systems
        ]);
    }


    public function create()
    {
        return view('dashboard.pages.system.addSystem');
    }
    public function saveTable($string)
    {
        $x = str_replace('-' ,'<br>',$string);

       $x =preg_replace('#(<br */?>\s*)+#i', '<br><br> -', $x);

       return $x;

    }


    public function store(Request $request)
    {
        $saveData = new System();

        $saveData->system_name = $request['system_name'];
        $saveData->system_desc = $request['system_desc'];
        //day 1
       // $saveData->day1_breakfast =str_replace('-' ,'<br>',$request['day1_breakfast']);
        $saveData->day1_breakfast = $this->saveTable($request['day1_breakfast']);
        $saveData->day1_lunch =  $this->saveTable($request['day1_lunch']);
        $saveData->day1_dinner =$this->saveTable($request['day1_dinner']);
        $saveData->day1_break1 = $this->saveTable($request['day1_break1']);
        $saveData->day1_break2 = $this->saveTable($request['day1_break2']);
        $saveData->day1_notes = $this->saveTable($request['day1_notes']);
        $saveData->carbSum  = $this->saveTable($request['carbSum']);
        $saveData->fatsSum  =$this->saveTable($request['fatsSum']);
        $saveData->proteinSum=$this->saveTable($request['proteinSum']);
        $saveData->caloriesSum=$this->saveTable($request['caloriesSum']);

        //day 2
        $saveData->day2_breakfast = $this->saveTable($request['day2_breakfast']);
        $saveData->day2_lunch =  $this->saveTable($request['day2_lunch']);
        $saveData->day2_dinner =$this->saveTable($request['day2_dinner']);
        $saveData->day2_break1 = $this->saveTable($request['day2_break1']);
        $saveData->day2_break2 = $this->saveTable($request['day2_break2']);
        $saveData->day2_notes = $this->saveTable($request['day2_notes']);
        $saveData->carbSum2  = $this->saveTable($request['carbSum2']);
        $saveData->fatsSum2  =$this->saveTable($request['fatsSum2']);
        $saveData->proteinSum2=$this->saveTable($request['proteinSum2']);
        $saveData->caloriesSum2=$this->saveTable($request['caloriesSum2']);


        //day 3
        $saveData->day3_breakfast = $this->saveTable($request['day3_breakfast']);
        $saveData->day3_lunch =  $this->saveTable($request['day3_lunch']);
        $saveData->day3_dinner =$this->saveTable($request['day3_dinner']);
        $saveData->day3_break1 = $this->saveTable($request['day3_break1']);
        $saveData->day3_break2 = $this->saveTable($request['day3_break2']);
        $saveData->day3_notes = $this->saveTable($request['day3_notes']);
        $saveData->carbSum3  = $this->saveTable($request['carbSum3']);
        $saveData->fatsSum3  =$this->saveTable($request['fatsSum3']);
        $saveData->proteinSum3=$this->saveTable($request['proteinSum3']);
        $saveData->caloriesSum3=$this->saveTable($request['caloriesSum3']);
        //day 4
        $saveData->day4_breakfast = $this->saveTable($request['day4_breakfast']);
        $saveData->day4_lunch =  $this->saveTable($request['day4_lunch']);
        $saveData->day4_dinner =$this->saveTable($request['day4_dinner']);
        $saveData->day4_break1 = $this->saveTable($request['day4_break1']);
        $saveData->day4_break2 = $this->saveTable($request['day4_break2']);
        $saveData->day4_notes = $this->saveTable($request['day4_notes']);
        $saveData->carbSum4  = $this->saveTable($request['carbSum4']);
        $saveData->fatsSum4  =$this->saveTable($request['fatsSum4']);
        $saveData->proteinSum4=$this->saveTable($request['proteinSum4']);
        $saveData->caloriesSum4=$this->saveTable($request['caloriesSum4']);

        //day 5
        $saveData->day5_breakfast = $this->saveTable($request['day5_breakfast']);
        $saveData->day5_lunch =  $this->saveTable($request['day5_lunch']);
        $saveData->day5_dinner =$this->saveTable($request['day5_dinner']);
        $saveData->day5_break1 = $this->saveTable($request['day5_break1']);
        $saveData->day5_break2 = $this->saveTable($request['day5_break2']);
        $saveData->day5_notes = $this->saveTable($request['day5_notes']);
        $saveData->carbSum5  = $this->saveTable($request['carbSum5']);
        $saveData->fatsSum5  =$this->saveTable($request['fatsSum5']);
        $saveData->proteinSum5=$this->saveTable($request['proteinSum5']);
        $saveData->caloriesSum5=$this->saveTable($request['caloriesSum5']);
        //day 6
        $saveData->day6_breakfast = $this->saveTable($request['day6_breakfast']);
        $saveData->day6_lunch =  $this->saveTable($request['day6_lunch']);
        $saveData->day6_dinner =$this->saveTable($request['day6_dinner']);
        $saveData->day6_break1 = $this->saveTable($request['day6_break1']);
        $saveData->day6_break2 = $this->saveTable($request['day6_break2']);
        $saveData->day6_notes = $this->saveTable($request['day6_notes']);
        $saveData->carbSum6  = $this->saveTable($request['carbSum6']);
        $saveData->fatsSum6  =$this->saveTable($request['fatsSum6']);
        $saveData->proteinSum6=$this->saveTable($request['proteinSum6']);
        $saveData->caloriesSum6=$this->saveTable($request['caloriesSum6']);

        //day 7
        $saveData->day7_breakfast = $this->saveTable($request['day7_breakfast']);
        $saveData->day7_lunch =  $this->saveTable($request['day7_lunch']);
        $saveData->day7_dinner =$this->saveTable($request['day7_dinner']);
        $saveData->day7_break1 = $this->saveTable($request['day7_break1']);
        $saveData->day7_break2 = $this->saveTable($request['day7_break2']);
        $saveData->day7_notes = $this->saveTable($request['day7_notes']);
        $saveData->carbSum7  = $this->saveTable($request['carbSum7']);
        $saveData->fatsSum7  =$this->saveTable($request['fatsSum7']);
        $saveData->proteinSum7=$this->saveTable($request['proteinSum7']);
        $saveData->caloriesSum7=$this->saveTable($request['caloriesSum7']);


        $saveData->save();

        return redirect('system');

    }


    public function show($id)
    {
        $data = System::where('id',$id)->first();
        return view('dashboard.pages.system.showSystem')->with([
            'data'=>$data,

        ]);
    }


    public function edit($id)
    {
        $data = System::where('id',$id)->first();
        return view('dashboard.pages.system.updateSystem')->with([
            'data'=>$data,
            'id'=>$id
        ]);
    }


    public function update(Request $request, $id)
    {
        $saveData = System::where('id',$id)->first();

        $saveData->system_name = $request['system_name'];
        $saveData->system_desc = $request['system_desc'];

        //day 1
        $saveData->day1_breakfast = $this->saveTable($request['day1_breakfast']);
        $saveData->day1_lunch =  $this->saveTable($request['day1_lunch']);
        $saveData->day1_dinner =$this->saveTable($request['day1_dinner']);
        $saveData->day1_break1 = $this->saveTable($request['day1_break1']);
        $saveData->day1_break2 = $this->saveTable($request['day1_break2']);
        $saveData->day1_notes = $this->saveTable($request['day1_notes']);
        if($request['carbSum'] || $request['carbSum'] =="0")
        {
            $saveData->carbSum  = $this->saveTable($request['carbSum']);
        }
        if($request['fatsSum']|| $request['fatsSum'] =="0")
        {
            $saveData->fatsSum  = $this->saveTable($request['fatsSum']);
        }

        if($request['proteinSum']|| $request['proteinSum'] =="0")
        {
            $saveData->proteinSum  = $this->saveTable($request['proteinSum']);
        }
        if($request['caloriesSum']|| $request['caloriesSum'] =="0")
        {
            $saveData->caloriesSum  = $this->saveTable($request['caloriesSum']);
        }




        //day 2
        $saveData->day2_breakfast = $this->saveTable($request['day2_breakfast']);
        $saveData->day2_lunch =  $this->saveTable($request['day2_lunch']);
        $saveData->day2_dinner =$this->saveTable($request['day2_dinner']);
        $saveData->day2_break1 = $this->saveTable($request['day2_break1']);
        $saveData->day2_break2 = $this->saveTable($request['day2_break2']);
        $saveData->day2_notes = $this->saveTable($request['day2_notes']);




        if($request['carbSum2'] || $request['carbSum2'] =="0")
        {
            $saveData->carbSum2  = $this->saveTable($request['carbSum2']);
        }
        if($request['fatsSum2']|| $request['fatsSum2'] =="0")
        {
            $saveData->fatsSum2  =$this->saveTable($request['fatsSum2']);
        }

        if($request['proteinSum2']|| $request['proteinSum2'] =="0")
        {
            $saveData->proteinSum2=$this->saveTable($request['proteinSum2']);
        }
        if($request['caloriesSum2']|| $request['caloriesSum2'] =="0")
        {
            $saveData->caloriesSum2=$this->saveTable($request['caloriesSum2']);
        }

        //day 3
        $saveData->day3_breakfast = $this->saveTable($request['day3_breakfast']);
        $saveData->day3_lunch =  $this->saveTable($request['day3_lunch']);
        $saveData->day3_dinner =$this->saveTable($request['day3_dinner']);
        $saveData->day3_break1 = $this->saveTable($request['day3_break1']);
        $saveData->day3_break2 = $this->saveTable($request['day3_break2']);
        $saveData->day3_notes = $this->saveTable($request['day3_notes']);




        if($request['carbSum3'] || $request['carbSum3'] =="0")
        {
            $saveData->carbSum3  = $this->saveTable($request['carbSum3']);
        }
        if($request['fatsSum3']|| $request['fatsSum3'] =="0")
        {
            $saveData->fatsSum3  =$this->saveTable($request['fatsSum3']);
        }

        if($request['proteinSum3']|| $request['proteinSum3'] =="0")
        {
            $saveData->proteinSum3=$this->saveTable($request['proteinSum3']);
        }
        if($request['caloriesSum3']|| $request['caloriesSum3'] =="0")
        {
            $saveData->caloriesSum3=$this->saveTable($request['caloriesSum3']);
        }
        //day 4
        $saveData->day4_breakfast = $this->saveTable($request['day4_breakfast']);
        $saveData->day4_lunch =  $this->saveTable($request['day4_lunch']);
        $saveData->day4_dinner =$this->saveTable($request['day4_dinner']);
        $saveData->day4_break1 = $this->saveTable($request['day4_break1']);
        $saveData->day4_break2 = $this->saveTable($request['day4_break2']);
        $saveData->day4_notes = $this->saveTable($request['day4_notes']);




        if($request['carbSum4'] || $request['carbSum4'] =="0")
        {
            $saveData->carbSum4  = $this->saveTable($request['carbSum4']);
        }
        if($request['fatsSum4']|| $request['fatsSum4'] =="0")
        {
            $saveData->fatsSum4  =$this->saveTable($request['fatsSum4']);
        }

        if($request['proteinSum4']|| $request['proteinSum4'] =="0")
        {
            $saveData->proteinSum4=$this->saveTable($request['proteinSum4']);
        }
        if($request['caloriesSum4']|| $request['caloriesSum4'] =="0")
        {
            $saveData->caloriesSum4=$this->saveTable($request['caloriesSum4']);
        }
        //day 5
        $saveData->day5_breakfast = $this->saveTable($request['day5_breakfast']);
        $saveData->day5_lunch =  $this->saveTable($request['day5_lunch']);
        $saveData->day5_dinner =$this->saveTable($request['day5_dinner']);
        $saveData->day5_break1 = $this->saveTable($request['day5_break1']);
        $saveData->day5_break2 = $this->saveTable($request['day5_break2']);
        $saveData->day5_notes = $this->saveTable($request['day5_notes']);

        if($request['carbSum5'] || $request['carbSum5'] =="0")
        {
            $saveData->carbSum5  = $this->saveTable($request['carbSum5']);
        }
        if($request['fatsSum5']|| $request['fatsSum5'] =="0")
        {
            $saveData->fatsSum5  =$this->saveTable($request['fatsSum5']);
        }

        if($request['proteinSum5']|| $request['proteinSum5'] =="0")
        {
            $saveData->proteinSum5=$this->saveTable($request['proteinSum5']);
        }
        if($request['caloriesSum5']|| $request['caloriesSum5'] =="0")
        {
            $saveData->caloriesSum5=$this->saveTable($request['caloriesSum5']);
        }
        //day 6
        $saveData->day6_breakfast = $this->saveTable($request['day6_breakfast']);
        $saveData->day6_lunch =  $this->saveTable($request['day6_lunch']);
        $saveData->day6_dinner =$this->saveTable($request['day6_dinner']);
        $saveData->day6_break1 = $this->saveTable($request['day6_break1']);
        $saveData->day6_break2 = $this->saveTable($request['day6_break2']);
        $saveData->day6_notes = $this->saveTable($request['day6_notes']);

        if($request['carbSum6'] || $request['carbSum6'] =="0")
        {
            $saveData->carbSum6  = $this->saveTable($request['carbSum6']);
        }
        if($request['fatsSum6']|| $request['fatsSum6'] =="0")
        {
            $saveData->fatsSum6  =$this->saveTable($request['fatsSum6']);
        }

        if($request['proteinSum6']|| $request['proteinSum6'] =="0")
        {
            $saveData->proteinSum6=$this->saveTable($request['proteinSum6']);
        }
        if($request['caloriesSum6']|| $request['caloriesSum6'] =="0")
        {
            $saveData->caloriesSum6=$this->saveTable($request['caloriesSum6']);
        }
        //day 7

        $saveData->day7_breakfast = $this->saveTable($request['day7_breakfast']);
        $saveData->day7_lunch =  $this->saveTable($request['day7_lunch']);
        $saveData->day7_dinner =$this->saveTable($request['day7_dinner']);
        $saveData->day7_break1 = $this->saveTable($request['day7_break1']);
        $saveData->day7_break2 = $this->saveTable($request['day7_break2']);
        $saveData->day7_notes = $this->saveTable($request['day7_notes']);




        if($request['carbSum7'] || $request['carbSum7'] =="0")
        {
            $saveData->carbSum7  = $this->saveTable($request['carbSum7']);
        }
        if($request['fatsSum7']|| $request['fatsSum7'] =="0")
        {
            $saveData->fatsSum7  =$this->saveTable($request['fatsSum7']);
        }

        if($request['proteinSum7']|| $request['proteinSum7'] =="0")
        {
            $saveData->proteinSum7=$this->saveTable($request['proteinSum7']);
        }
        if($request['caloriesSum7']|| $request['caloriesSum7'] =="0")
        {
            $saveData->caloriesSum7=$this->saveTable($request['caloriesSum7']);
        }

        $saveData->save();

        return redirect('system');

    }
    public function systemUpdatedForPatient(Request $request)
    {


        $saveData = new System();


        $saveData->system_name = $request['system_name'];
        $saveData->system_desc = $request['system_desc'];

        //day 1
        $saveData->day1_breakfast = $this->saveTable($request['day1_breakfast']);
        $saveData->day1_lunch =  $this->saveTable($request['day1_lunch']);
        $saveData->day1_dinner =$this->saveTable($request['day1_dinner']);
        $saveData->day1_break1 = $this->saveTable($request['day1_break1']);
        $saveData->day1_break2 = $this->saveTable($request['day1_break2']);
        $saveData->day1_notes = $this->saveTable($request['day1_notes']);
        if($request['carbSum'] || $request['carbSum'] =="0")
        {
            $saveData->carbSum  = $this->saveTable($request['carbSum']);
        }
        if($request['fatsSum']|| $request['fatsSum'] =="0")
        {
            $saveData->fatsSum  = $this->saveTable($request['fatsSum']);
        }

        if($request['proteinSum']|| $request['proteinSum'] =="0")
        {
            $saveData->proteinSum  = $this->saveTable($request['proteinSum']);
        }
        if($request['caloriesSum']|| $request['caloriesSum'] =="0")
        {
            $saveData->caloriesSum  = $this->saveTable($request['caloriesSum']);
        }




        //day 2
        $saveData->day2_breakfast = $this->saveTable($request['day2_breakfast']);
        $saveData->day2_lunch =  $this->saveTable($request['day2_lunch']);
        $saveData->day2_dinner =$this->saveTable($request['day2_dinner']);
        $saveData->day2_break1 = $this->saveTable($request['day2_break1']);
        $saveData->day2_break2 = $this->saveTable($request['day2_break2']);
        $saveData->day2_notes = $this->saveTable($request['day2_notes']);




        if($request['carbSum2'] || $request['carbSum2'] =="0")
        {
            $saveData->carbSum2  = $this->saveTable($request['carbSum2']);
        }
        if($request['fatsSum2']|| $request['fatsSum2'] =="0")
        {
            $saveData->fatsSum2  =$this->saveTable($request['fatsSum2']);
        }

        if($request['proteinSum2']|| $request['proteinSum2'] =="0")
        {
            $saveData->proteinSum2=$this->saveTable($request['proteinSum2']);
        }
        if($request['caloriesSum2']|| $request['caloriesSum2'] =="0")
        {
            $saveData->caloriesSum2=$this->saveTable($request['caloriesSum2']);
        }

        //day 3
        $saveData->day3_breakfast = $this->saveTable($request['day3_breakfast']);
        $saveData->day3_lunch =  $this->saveTable($request['day3_lunch']);
        $saveData->day3_dinner =$this->saveTable($request['day3_dinner']);
        $saveData->day3_break1 = $this->saveTable($request['day3_break1']);
        $saveData->day3_break2 = $this->saveTable($request['day3_break2']);
        $saveData->day3_notes = $this->saveTable($request['day3_notes']);




        if($request['carbSum3'] || $request['carbSum3'] =="0")
        {
            $saveData->carbSum3  = $this->saveTable($request['carbSum3']);
        }
        if($request['fatsSum3']|| $request['fatsSum3'] =="0")
        {
            $saveData->fatsSum3  =$this->saveTable($request['fatsSum3']);
        }

        if($request['proteinSum3']|| $request['proteinSum3'] =="0")
        {
            $saveData->proteinSum3=$this->saveTable($request['proteinSum3']);
        }
        if($request['caloriesSum3']|| $request['caloriesSum3'] =="0")
        {
            $saveData->caloriesSum3=$this->saveTable($request['caloriesSum3']);
        }
        //day 4
        $saveData->day4_breakfast = $this->saveTable($request['day4_breakfast']);
        $saveData->day4_lunch =  $this->saveTable($request['day4_lunch']);
        $saveData->day4_dinner =$this->saveTable($request['day4_dinner']);
        $saveData->day4_break1 = $this->saveTable($request['day4_break1']);
        $saveData->day4_break2 = $this->saveTable($request['day4_break2']);
        $saveData->day4_notes = $this->saveTable($request['day4_notes']);




        if($request['carbSum4'] || $request['carbSum4'] =="0")
        {
            $saveData->carbSum4  = $this->saveTable($request['carbSum4']);
        }
        if($request['fatsSum4']|| $request['fatsSum4'] =="0")
        {
            $saveData->fatsSum4  =$this->saveTable($request['fatsSum4']);
        }

        if($request['proteinSum4']|| $request['proteinSum4'] =="0")
        {
            $saveData->proteinSum4=$this->saveTable($request['proteinSum4']);
        }
        if($request['caloriesSum4']|| $request['caloriesSum4'] =="0")
        {
            $saveData->caloriesSum4=$this->saveTable($request['caloriesSum4']);
        }
        //day 5
        $saveData->day5_breakfast = $this->saveTable($request['day5_breakfast']);
        $saveData->day5_lunch =  $this->saveTable($request['day5_lunch']);
        $saveData->day5_dinner =$this->saveTable($request['day5_dinner']);
        $saveData->day5_break1 = $this->saveTable($request['day5_break1']);
        $saveData->day5_break2 = $this->saveTable($request['day5_break2']);
        $saveData->day5_notes = $this->saveTable($request['day5_notes']);

        if($request['carbSum5'] || $request['carbSum5'] =="0")
        {
            $saveData->carbSum5  = $this->saveTable($request['carbSum5']);
        }
        if($request['fatsSum5']|| $request['fatsSum5'] =="0")
        {
            $saveData->fatsSum5  =$this->saveTable($request['fatsSum5']);
        }

        if($request['proteinSum5']|| $request['proteinSum5'] =="0")
        {
            $saveData->proteinSum5=$this->saveTable($request['proteinSum5']);
        }
        if($request['caloriesSum5']|| $request['caloriesSum5'] =="0")
        {
            $saveData->caloriesSum5=$this->saveTable($request['caloriesSum5']);
        }
        //day 6
        $saveData->day6_breakfast = $this->saveTable($request['day6_breakfast']);
        $saveData->day6_lunch =  $this->saveTable($request['day6_lunch']);
        $saveData->day6_dinner =$this->saveTable($request['day6_dinner']);
        $saveData->day6_break1 = $this->saveTable($request['day6_break1']);
        $saveData->day6_break2 = $this->saveTable($request['day6_break2']);
        $saveData->day6_notes = $this->saveTable($request['day6_notes']);

        if($request['carbSum6'] || $request['carbSum6'] =="0")
        {
            $saveData->carbSum6  = $this->saveTable($request['carbSum6']);
        }
        if($request['fatsSum6']|| $request['fatsSum6'] =="0")
        {
            $saveData->fatsSum6  =$this->saveTable($request['fatsSum6']);
        }

        if($request['proteinSum6']|| $request['proteinSum6'] =="0")
        {
            $saveData->proteinSum6=$this->saveTable($request['proteinSum6']);
        }
        if($request['caloriesSum6']|| $request['caloriesSum6'] =="0")
        {
            $saveData->caloriesSum6=$this->saveTable($request['caloriesSum6']);
        }
        //day 7

        $saveData->day7_breakfast = $this->saveTable($request['day7_breakfast']);
        $saveData->day7_lunch =  $this->saveTable($request['day7_lunch']);
        $saveData->day7_dinner =$this->saveTable($request['day7_dinner']);
        $saveData->day7_break1 = $this->saveTable($request['day7_break1']);
        $saveData->day7_break2 = $this->saveTable($request['day7_break2']);
        $saveData->day7_notes = $this->saveTable($request['day7_notes']);




        if($request['carbSum7'] || $request['carbSum7'] =="0")
        {
            $saveData->carbSum7  = $this->saveTable($request['carbSum7']);
        }
        if($request['fatsSum7']|| $request['fatsSum7'] =="0")
        {
            $saveData->fatsSum7  =$this->saveTable($request['fatsSum7']);
        }

        if($request['proteinSum7']|| $request['proteinSum7'] =="0")
        {
            $saveData->proteinSum7=$this->saveTable($request['proteinSum7']);
        }
        if($request['caloriesSum7']|| $request['caloriesSum7'] =="0")
        {
            $saveData->caloriesSum7=$this->saveTable($request['caloriesSum7']);
        }
        $saveData->save();

        $patient =Patient::where('id',$request['patientID'])->first();
        $patient->system =$saveData->id;
        $patient->save();
        return redirect('patient/'.$request['patientID']);
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

    public function storeSystemForSpecificPatient(Request $request)
    {
        $saveData = new System();

        $saveData->system_name = $request['system_name'];
        $saveData->system_desc = $request['system_desc'];
        //day 1
        $saveData->day1_breakfast = $this->saveTable($request['day1_breakfast']);
        $saveData->day1_lunch =  $this->saveTable($request['day1_lunch']);
        $saveData->day1_dinner =$this->saveTable($request['day1_dinner']);
        $saveData->day1_break1 = $this->saveTable($request['day1_break1']);
        $saveData->day1_break2 = $this->saveTable($request['day1_break2']);
        $saveData->day1_notes = $this->saveTable($request['day1_notes']);
        $saveData->carbSum  = $this->saveTable($request['carbSum']);
        $saveData->fatsSum  =$this->saveTable($request['fatsSum']);
        $saveData->proteinSum=$this->saveTable($request['proteinSum']);
        $saveData->caloriesSum=$this->saveTable($request['caloriesSum']);

        //day 2
        $saveData->day2_breakfast = $this->saveTable($request['day2_breakfast']);
        $saveData->day2_lunch =  $this->saveTable($request['day2_lunch']);
        $saveData->day2_dinner =$this->saveTable($request['day2_dinner']);
        $saveData->day2_break1 = $this->saveTable($request['day2_break1']);
        $saveData->day2_break2 = $this->saveTable($request['day2_break2']);
        $saveData->day2_notes = $this->saveTable($request['day2_notes']);
        $saveData->carbSum2  = $this->saveTable($request['carbSum2']);
        $saveData->fatsSum2  =$this->saveTable($request['fatsSum2']);
        $saveData->proteinSum2=$this->saveTable($request['proteinSum2']);
        $saveData->caloriesSum2=$this->saveTable($request['caloriesSum2']);


        //day 3
        $saveData->day3_breakfast = $this->saveTable($request['day3_breakfast']);
        $saveData->day3_lunch =  $this->saveTable($request['day3_lunch']);
        $saveData->day3_dinner =$this->saveTable($request['day3_dinner']);
        $saveData->day3_break1 = $this->saveTable($request['day3_break1']);
        $saveData->day3_break2 = $this->saveTable($request['day3_break2']);
        $saveData->day3_notes = $this->saveTable($request['day3_notes']);
        $saveData->carbSum3  = $this->saveTable($request['carbSum3']);
        $saveData->fatsSum3  =$this->saveTable($request['fatsSum3']);
        $saveData->proteinSum3=$this->saveTable($request['proteinSum3']);
        $saveData->caloriesSum3=$this->saveTable($request['caloriesSum3']);
        //day 4
        $saveData->day4_breakfast = $this->saveTable($request['day4_breakfast']);
        $saveData->day4_lunch =  $this->saveTable($request['day4_lunch']);
        $saveData->day4_dinner =$this->saveTable($request['day4_dinner']);
        $saveData->day4_break1 = $this->saveTable($request['day4_break1']);
        $saveData->day4_break2 = $this->saveTable($request['day4_break2']);
        $saveData->day4_notes = $this->saveTable($request['day4_notes']);
        $saveData->carbSum4  = $this->saveTable($request['carbSum4']);
        $saveData->fatsSum4  =$this->saveTable($request['fatsSum4']);
        $saveData->proteinSum4=$this->saveTable($request['proteinSum4']);
        $saveData->caloriesSum4=$this->saveTable($request['caloriesSum4']);

        //day 5
        $saveData->day5_breakfast = $this->saveTable($request['day5_breakfast']);
        $saveData->day5_lunch =  $this->saveTable($request['day5_lunch']);
        $saveData->day5_dinner =$this->saveTable($request['day5_dinner']);
        $saveData->day5_break1 = $this->saveTable($request['day5_break1']);
        $saveData->day5_break2 = $this->saveTable($request['day5_break2']);
        $saveData->day5_notes = $this->saveTable($request['day5_notes']);
        $saveData->carbSum5  = $this->saveTable($request['carbSum5']);
        $saveData->fatsSum5  =$this->saveTable($request['fatsSum5']);
        $saveData->proteinSum5=$this->saveTable($request['proteinSum5']);
        $saveData->caloriesSum5=$this->saveTable($request['caloriesSum5']);
        //day 6
        $saveData->day6_breakfast = $this->saveTable($request['day6_breakfast']);
        $saveData->day6_lunch =  $this->saveTable($request['day6_lunch']);
        $saveData->day6_dinner =$this->saveTable($request['day6_dinner']);
        $saveData->day6_break1 = $this->saveTable($request['day6_break1']);
        $saveData->day6_break2 = $this->saveTable($request['day6_break2']);
        $saveData->day6_notes = $this->saveTable($request['day6_notes']);
        $saveData->carbSum6  = $this->saveTable($request['carbSum6']);
        $saveData->fatsSum6  =$this->saveTable($request['fatsSum6']);
        $saveData->proteinSum6=$this->saveTable($request['proteinSum6']);
        $saveData->caloriesSum6=$this->saveTable($request['caloriesSum6']);

        //day 7
        $saveData->day7_breakfast = $this->saveTable($request['day7_breakfast']);
        $saveData->day7_lunch =  $this->saveTable($request['day7_lunch']);
        $saveData->day7_dinner =$this->saveTable($request['day7_dinner']);
        $saveData->day7_break1 = $this->saveTable($request['day7_break1']);
        $saveData->day7_break2 = $this->saveTable($request['day7_break2']);
        $saveData->day7_notes = $this->saveTable($request['day7_notes']);
        $saveData->carbSum7  = $this->saveTable($request['carbSum7']);
        $saveData->fatsSum7  =$this->saveTable($request['fatsSum7']);
        $saveData->proteinSum7=$this->saveTable($request['proteinSum7']);
        $saveData->caloriesSum7=$this->saveTable($request['caloriesSum7']);



        $saveData->save();

        $patient =Patient::where('id',$request['patientID'])->first();
        $patient->system =$saveData->id;
        $patient->save();
        return redirect('patient/'.$request['patientID']);


    }

    public function showNewSystem($id)
    {
        return view('dashboard.pages.system.addSystemForPatient')->with([
            'id'=>$id
        ]);
    }
}
