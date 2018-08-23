<?php

namespace App\Http\Controllers;

use App\setting;
use Illuminate\Http\Request;

use File;
class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           $setting = setting::first();
           
        return view('dashboard.pages.settings',[
            'setting' =>$setting
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(request(), [
                'email' => 'required|max:191|email',
                'filter_price_start' => 'required|max:191',
                'filter_price_end' => 'required|max:191',
                'phone' => 'required|max:191',
                'address' => 'required|max:191',
                'flicker_description' => 'required|max:191',
                'mailing_description' => 'required|max:191',
                'get_in_touch_description' => 'required|max:191',
                'whats_app' => 'required|max:191',
                'facebook' => 'required|max:191',
                'skype' => 'required|max:191',
                'viber' => 'required|max:191',
                'youtube' => 'required|max:191',
                'live' => 'required|max:191',
                'google' => 'required|max:191',
                'cities' => 'required|max:191',
        ],[],
        [
                
        ]);
        
        if($request->file('logo') !=null){
            $image = time().'.'.$request->file('logo')->getClientOriginalExtension();
            $request->file('logo')->move(public_path('images'), $image);
            $url='images/'.$image;
            setting::where('id', $id)->update(['logo' => $url,]);
        }
            
            
        setting::where('id', $id)
                
                    ->update([
                            
                            'email' => $request->email,
                            'filter_price_start' => $request->filter_price_start,
                            'filter_price_end' => $request->filter_price_end,
                            'phone' => $request->phone,
                            'address' => $request->address,
                            'flicker_description' => $request->flicker_description,
                            'mailing_description' => $request->mailing_description,
                            'get_in_touch_description' => $request->get_in_touch_description,
                            'whats_app' => $request->whats_app,
                            'facebook' => $request->facebook,
                            'skype' => $request->skype,
                            'viber' => $request->viber,
                            'youtube' => $request->youtube,
                            'live' => $request->live,
                            'google' => $request->google,
                            'cities' => $request->cities,
                            

                        ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(setting $setting)
    {
        //
    }
}
