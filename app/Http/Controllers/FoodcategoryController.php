<?php

namespace App\Http\Controllers;

use App\Foodcategory;
use Illuminate\Http\Request;

class FoodcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = Foodcategory::paginate(3);
        return view('dashboard.pages.foodCategory.index')->with(['foods'=>$foods]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.foodCategory.addFood');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [

            'name' => 'required',
            'description' => 'required',
        ]);

        $saveData = new Foodcategory();

        $saveData->name = $request['name'];
        $saveData->description = $request['description'];

        $saveData->save();

        session()->flash('success', 'Category added Successfully');

        return redirect('foodCategory');
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
        $data = Foodcategory::where('id',$id)->first();
        return view('dashboard.pages.foodCategory.updateFood',['id'=>$id,'data'=>$data]);
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
        $this->validate($request, [

            'name' => 'required',
            'description' => 'required',
        ]);

        $saveData = Foodcategory::where('id',$id)->first();

        $saveData->name = $request['name'];
        $saveData->description = $request['description'];

        $saveData->save();

        session()->flash('success', 'Category added Successfully');

        return redirect('foodCategory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Foodcategory::where('id',$id)->first();
        $data->delete();

        session()->flash('success', 'Category deleted Successfully');

        return redirect('foodCategory');
    }
}
