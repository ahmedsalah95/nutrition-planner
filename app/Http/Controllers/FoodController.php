<?php

namespace App\Http\Controllers;

use App\Food;
use App\Foodcategory;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = Food::paginate(4);
        return view('dashboard.pages.food.index')->with([

            'foods'=>$foods
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Foodcategory::all();
        return view('dashboard.pages.food.addFood')->with([
            'categories'=>$categories
        ]);
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

            'food_name'=>'required',
            'calories'=>'required',
            'category_id'=>'required',
            'unit'=>'required',


        ]);

        $saveData = new Food();
        $saveData->food_name = $request['food_name'];
        $saveData->category_id=$request['category_id'];
        $saveData->calories =$request['calories'];

        $saveData->unit =$request['unit'];


        $saveData->save();
        return redirect('food');
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
        $food = Food::where('id',$id)->first();
        $categories=Foodcategory::all();
        return view('dashboard.pages.food.updateFood')->with([

            'food'=>$food,
            'id'=>$id,
            'categories'=>$categories
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

            'food_name'=>'required',
            'calories'=>'required',
            'category_id'=>'required',
            'unit'=>'required',


        ]);

        $saveData =  Food::where('id',$id)->first();
        $saveData->food_name = $request['food_name'];
        if($request['category_id'])
        {
            $saveData->category_id=$request['category_id'];

        }

        $saveData->calories =$request['calories'];

        $saveData->unit =$request['unit'];


        $saveData->save();
        return redirect('food');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Food::where('id',$id)->delete();

        return redirect('food');
    }
}
