@extends('dashboard.master')

@section('content')

    <link rel="stylesheet" href="{{url('/')}}/vendors/fm.tagator.jquery.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script src="{{url('/')}}/vendors/fm.tagator.jquery.js"></script>
    <script src="//cdn.ckeditor.com/4.9.0/standard/ckeditor.js"></script>




    <section class="system">
        <div class="container">

            @if($errors->all())
                <div style="color: #a94442; background-color: #f2dede; border-color: #ebccd1;" class="alert ">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
                    <form   action="/system/{{$id}}"  method="post" class="form-horizontal form-label-left" >
                        <input type="hidden" name="_method" value="PUT">
                        @csrf


                        <button class="accordion" type="button"> معلومات عن النظام</button>
                        <div class="panel">
                            <br><br>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="system_name">اسم النظام
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="system_name" required="required" name="system_name"
                                           class="form-control col-md-7 col-xs-12"
                                           value="{{$data->system_name}}">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="system_desc"> وصف النظام


                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea name="system_desc"  cols="30" rows="10" id="system_desc" class="form-control">
                                {!! $data->system_desc !!}
                            </textarea>
                                </div>
                            </div>
                        </div>




                        <button class="accordion" type="button"> اليوم الاول</button>
                        <div class="panel">
                            <br><br>
                            <div class="form-group first_day">

                                <div class="text-center">

                                    <h2 class="text-center">اليوم الاول</h2>



                                </div>




                                <div class="form-group text-center">

                                    <div class="col-lg-12">
                                        <div class="col-lg-3">
                                            <select id="continents" class="form-control">
                                                <option value = "0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>


                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <select id="selectcountries" class="form-control"></select>
                                        </div>
                                        <div class="col-lg-3">
                                            <select name="gmValue" id="gmValue" class="form-control">
                                                <option value="10">10 gm</option>
                                                <option value="20">20 gm</option>
                                                <option value="30">30 gm</option>
                                                <option value="50">50 gm</option>
                                                <option value="100">100 gm</option>
                                                <option value="200">200 gm</option>
                                                <option value="300">300 gm</option>
                                                <option value="400">400 gm</option>
                                                <option value="500">500 gm</option>
                                                <option value="600">600 gm</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <button type="button" class="btn btn-success" onclick="getData()">أضف</button>
                                        </div>
                                    </div>

                                    <br>
                                    <br>






                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day1_breakfast">الافطار
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day1_breakfast" name="day1_breakfast"


                                               value="<?php echo str_replace("<br>","و", $data->day1_breakfast) ?>"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>


                                <br><br><br>



                                <div class="form-group text-center">
                                    <div class="col-lg-12">
                                        <div class="col-lg-3">
                                            <select id="continents1_break1" class="form-control">
                                                <option value = "0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>


                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <select id="selectcountries1_break1" class="form-control"></select>
                                        </div>
                                        <div class="col-lg-3">
                                            <select name="gmValue" id="gmValue1_break1" class="form-control" >
                                                <option value="10">10 gm</option>
                                                <option value="20">20 gm</option>
                                                <option value="30">30 gm</option>
                                                <option value="50">50 gm</option>
                                                <option value="100">100 gm</option>
                                                <option value="200">200 gm</option>
                                                <option value="300">300 gm</option>
                                                <option value="400">400 gm</option>
                                                <option value="500">500 gm</option>
                                                <option value="600">600 gm</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <button type="button" class="btn btn-success" onclick="getData1_break1()">أضف</button>
                                        </div>
                                    </div>

                                    <br>






                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day1_break1">وجبة خفيفة
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day1_break1" name="day1_break1"

                                               value="<?php echo str_replace("<br>","و", $data->day1_break1) ?>"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>

                                <br><br><br>



                                <div class="form-group text-center">
                                    <div class="col-lg-12">
                                        <div class="col-lg-3"> <select id="continents1_lunch" class="form-control">
                                                <option value = "0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>


                                            </select></div>
                                        <div class="col-lg-3"><select id="selectcountries1_lunch" class="form-control"></select></div>
                                        <div class="col-lg-3">  <select name="gmValue" id="gmValue1_lunch" class="form-control" >
                                                <option value="10">10 gm</option>
                                                <option value="20">20 gm</option>
                                                <option value="30">30 gm</option>
                                                <option value="50">50 gm</option>
                                                <option value="100">100 gm</option>
                                                <option value="200">200 gm</option>
                                                <option value="300">300 gm</option>
                                                <option value="400">400 gm</option>
                                                <option value="500">500 gm</option>
                                                <option value="600">600 gm</option>
                                            </select></div>
                                        <div class="col-lg-3">
                                            <button type="button" class="btn btn-success" onclick="getData1_lunch()">أضف</button>
                                        </div>
                                    </div>


                                    <br><br><br>




                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day1_lunch">الغداء
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day1_lunch" name="day1_lunch"

                                               value="<?php echo str_replace("<br>","و", $data->day1_lunch) ?>"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>
                                <br><br><br>






                                <div class="form-group text-center">
                                    <div class="col-lg-12">
                                        <div class="col-lg-3">   <select id="continents1_break2" class="form-control">
                                                <option value = "0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>


                                            </select></div>
                                        <div class="col-lg-3">
                                            <select id="selectcountries1_break2" class="form-control"></select>
                                        </div>
                                        <div class="col-lg-3">
                                            <select name="gmValue" id="gmValue1_break2" class="form-control" >
                                                <option value="10">10 gm</option>
                                                <option value="20">20 gm</option>
                                                <option value="30">30 gm</option>
                                                <option value="50">50 gm</option>
                                                <option value="100">100 gm</option>
                                                <option value="200">200 gm</option>
                                                <option value="300">300 gm</option>
                                                <option value="400">400 gm</option>
                                                <option value="500">500 gm</option>
                                                <option value="600">600 gm</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <button type="button" class="btn btn-success" onclick="getData1_break2()">أضف</button>
                                        </div>
                                    </div>


                                    <br><br>



                                    <br>


                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day1_break2">وجبة خفيفة
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day1_break2" name="day1_break2"

                                               value="<?php echo str_replace("<br>","و", $data->day1_break2) ?>"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>


                                <br><br><br>



                                <div class="form-group text-center">
                                    <div class="col-lg-12">
                                        <div class="col-lg-3">
                                            <select id="continents1_dinner" class="form-control">
                                                <option value = "0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>


                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <select id="selectcountries1_dinner" class="form-control"></select>
                                        </div>
                                        <div class="col-lg-3">
                                            <select name="gmValue" id="gmValue1_dinner" class="form-control">
                                                <option value="10">10 gm</option>
                                                <option value="20">20 gm</option>
                                                <option value="30">30 gm</option>
                                                <option value="50">50 gm</option>
                                                <option value="100">100 gm</option>
                                                <option value="200">200 gm</option>
                                                <option value="300">300 gm</option>
                                                <option value="400">400 gm</option>
                                                <option value="500">500 gm</option>
                                                <option value="600">600 gm</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3">

                                            <button type="button" class="btn btn-success" onclick="getData1_dinner()">أضف</button>
                                        </div>
                                    </div>





                                    <br>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day1_dinner">العشاء
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day1_dinner" name="day1_dinner"
                                               value="<?php echo str_replace("<br>","و", $data->day1_dinner) ?>"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>

                                <br><br><br>

                                <div class="form-group text-center">

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day1_notes">ملاحظات
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day1_notes" name="day1_notes"
                                               value="{{$data->day1_notes}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>

                                <br>
                                <br>


                                <div class="col-lg-12">

                                    <h2 class="text-center">مجموع السعرات الحرارية لليوم الاول</h2>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <label for="carbSum">carbs old value : {{$data->carbSum}}</label>
                                        <input type="text" id="carbSum" class="form-control"
                                               name="carbSum"

                                               placeholder="مجموع الكربهيدرات" readonly>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <label for="carbSum">fats old value : {{$data->fatsSum}}</label>
                                        <input type="text" id="fatsSum" class="form-control"
                                               name="fatsSum"

                                               placeholder="مجموع الدهون" readonly>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <label for="carbSum">protein old value : {{$data->proteinSum}}</label>
                                        <input type="text" id="proteinSum" class="form-control"
                                               name="proteinSum"

                                               placeholder="مجموع البروتينات" readonly>
                                    </div>
                                </div>





                            </div>
                        </div>



                        <button class="accordion" type="button">اليوم الثانى</button>
                        <div class="panel">
                            <div class="form-group sec_day">

                                <div class="form-group text-center">
                                    <div class="col-lg-12">
                                        <div class="col-lg-3">
                                            <select id="continent2" class="form-control">
                                                <option value = "0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>


                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <select id="selectcountries2" class="form-control"></select>
                                        </div>
                                        <div class="col-lg-3">
                                            <select name="gmValue" id="gmValue2" class="form-control">
                                                <option value="10">10 gm</option>
                                                <option value="20">20 gm</option>
                                                <option value="30">30 gm</option>
                                                <option value="50">50 gm</option>
                                                <option value="100">100 gm</option>
                                                <option value="200">200 gm</option>
                                                <option value="300">300 gm</option>
                                                <option value="400">400 gm</option>
                                                <option value="500">500 gm</option>
                                                <option value="600">600 gm</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <button type="button" class="btn btn-success" onclick="getData2()">أضف</button>
                                        </div>
                                    </div>


                                    <br>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day2_breakfast">الافطار
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day2_breakfast" name="day2_breakfast"
                                               value="<?php echo str_replace("<br>","و", $data->day2_breakfast) ?>"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>


                                <br><br><br>



                                <div class="form-group text-center">
                                    <div class="col-lg-12">
                                        <div class="col-lg-3">
                                            <select id="continents2_break1" class="form-control">
                                                <option value = "0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>


                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <select id="selectcountries2_break1" class="form-control"></select>
                                        </div>
                                        <div class="col-lg-3">
                                            <select name="gmValue" id="gmValue2_break1" class="form-control">
                                                <option value="10">10 gm</option>
                                                <option value="20">20 gm</option>
                                                <option value="30">30 gm</option>
                                                <option value="50">50 gm</option>
                                                <option value="100">100 gm</option>
                                                <option value="200">200 gm</option>
                                                <option value="300">300 gm</option>
                                                <option value="400">400 gm</option>
                                                <option value="500">500 gm</option>
                                                <option value="600">600 gm</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <button type="button" class="btn btn-success" onclick="getData2_break1()">أضف</button>
                                        </div>
                                    </div>


                                    <br>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day2_break1">وجبة خفيفة
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day2_break1" name="day2_break1"
                                               value="<?php echo str_replace("<br>","و", $data->day2_break1) ?>"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>

                                <br><br><br>



                                <div class="form-group text-center">
                                    <div class="col-lg-12">
                                        <div class="col-lg-3"> <select id="continents2_lunch" class="form-control">
                                                <option value = "0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>


                                            </select></div>
                                        <div class="col-lg-3"> <select id="selectcountries2_lunch" class="form-control"></select></div>
                                        <div class="col-lg-3">   <select name="gmValue" id="gmValue2_lunch"  class="form-control">
                                                <option value="10">10 gm</option>
                                                <option value="20">20 gm</option>
                                                <option value="30">30 gm</option>
                                                <option value="50">50 gm</option>
                                                <option value="100">100 gm</option>
                                                <option value="200">200 gm</option>
                                                <option value="300">300 gm</option>
                                                <option value="400">400 gm</option>
                                                <option value="500">500 gm</option>
                                                <option value="600">600 gm</option>
                                            </select></div>
                                        <div class="col-lg-3"> <button type="button" class="btn btn-success" onclick="getData2_lunch()">أضف</button></div>
                                    </div>






                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day2_lunch">الغداء
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day2_lunch" name="day2_lunch"
                                               value="{{$data->day2_lunch}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>


                                <br><br><br>



                                <div class="form-group text-center">

                                    <select id="continents2_break2">
                                        <option value = "0">all</option>
                                        <option value="1">carbs</option>
                                        <option value="2">Fats</option>
                                        <option value="3">proteins</option>


                                    </select>
                                    <select id="selectcountries2_break2"></select>

                                    <select name="gmValue" id="gmValue2_break2" >
                                        <option value="10">10 gm</option>
                                        <option value="20">20 gm</option>
                                        <option value="30">30 gm</option>
                                        <option value="50">50 gm</option>
                                        <option value="100">100 gm</option>
                                        <option value="200">200 gm</option>
                                        <option value="300">300 gm</option>
                                        <option value="400">400 gm</option>
                                        <option value="500">500 gm</option>
                                        <option value="600">600 gm</option>
                                    </select>

                                    <button type="button" class="btn btn-success" onclick="getData2_break2()">أضف</button>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day2_break2">وجبة خفيفة
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day2_break2" name="day2_break2"
                                               value="{{$data->day2_break2}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>


                                <br><br><br>



                                <div class="form-group text-center">

                                    <select id="continents2_dinner">
                                        <option value = "0">all</option>
                                        <option value="1">carbs</option>
                                        <option value="2">Fats</option>
                                        <option value="3">proteins</option>


                                    </select>
                                    <select id="selectcountries2_dinner"></select>

                                    <select name="gmValue" id="gmValue2_dinner" >
                                        <option value="10">10 gm</option>
                                        <option value="20">20 gm</option>
                                        <option value="30">30 gm</option>
                                        <option value="50">50 gm</option>
                                        <option value="100">100 gm</option>
                                        <option value="200">200 gm</option>
                                        <option value="300">300 gm</option>
                                        <option value="400">400 gm</option>
                                        <option value="500">500 gm</option>
                                        <option value="600">600 gm</option>
                                    </select>

                                    <button type="button" class="btn btn-success" onclick="getData2_dinner()">أضف</button>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day2_dinner">العشاء
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day2_dinner" name="day2_dinner"
                                               value="{{$data->day2_dinner}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>

                                <br><br><br>

                                <div class="form-group text-center">

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day2_notes">ملاحظات
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day2_notes" name="day2_notes"
                                               value="{{$data->day2_notes}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>






                                <br>
                                <br>
                                <br>

                                <div class="col-lg-12">

                                    <h2 class="text-center">مجموع السعرات الحرارية لليوم الثانى</h2>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <input type="text" id="carbSum2" class="form-control"
                                               name="carbSum2"
                                               value="{{$data->carbSum2}}"
                                               placeholder="مجموع الكربهيدرات" readonly>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <input type="text" id="fatsSum2" class="form-control"
                                               name="fatsSum2"
                                               value="{{$data->fatsSum2}}"
                                               placeholder="مجموع الدهون" readonly>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <input type="text" id="proteinSum2" class="form-control"
                                               name="proteinSum2"
                                               value="{{$data->proteinSum2}}"
                                               placeholder="مجموع البروتينات" readonly>
                                    </div>
                                </div>





                            </div>
                        </div>


                        <button class="accordion" type="button">اليوم الثالث</button>
                        <div class="panel">
                            <div class="form-group third_day">

                                <div class="form-group text-center">

                                    <select id="continent3">
                                        <option value = "0">all</option>
                                        <option value="1">carbs</option>
                                        <option value="2">Fats</option>
                                        <option value="3">proteins</option>


                                    </select>
                                    <select id="selectcountries3"></select>

                                    <select name="gmValue" id="gmValue3" >
                                        <option value="10">10 gm</option>
                                        <option value="20">20 gm</option>
                                        <option value="30">30 gm</option>
                                        <option value="50">50 gm</option>
                                        <option value="100">100 gm</option>
                                        <option value="200">200 gm</option>
                                        <option value="300">300 gm</option>
                                        <option value="400">400 gm</option>
                                        <option value="500">500 gm</option>
                                        <option value="600">600 gm</option>
                                    </select>

                                    <button type="button" class="btn btn-success" onclick="getData3()">أضف</button>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day3_breakfast">الافطار
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day3_breakfast" name="day3_breakfast"
                                               value="{{$data->day3_breakfast}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>


                                <br><br><br>



                                <div class="form-group text-center">

                                    <select id="continents3_break1">
                                        <option value = "0">all</option>
                                        <option value="1">carbs</option>
                                        <option value="2">Fats</option>
                                        <option value="3">proteins</option>


                                    </select>
                                    <select id="selectcountries3_break1"></select>

                                    <select name="gmValue" id="gmValue3_break1" >
                                        <option value="10">10 gm</option>
                                        <option value="20">20 gm</option>
                                        <option value="30">30 gm</option>
                                        <option value="50">50 gm</option>
                                        <option value="100">100 gm</option>
                                        <option value="200">200 gm</option>
                                        <option value="300">300 gm</option>
                                        <option value="400">400 gm</option>
                                        <option value="500">500 gm</option>
                                        <option value="600">600 gm</option>
                                    </select>

                                    <button type="button" class="btn btn-success" onclick="getData3_break1()">أضف</button>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day3_break1">وجبة خفيفة
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day3_break1" name="day3_break1"
                                               value="{{$data->day3_break1}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>

                                <br><br><br>



                                <div class="form-group text-center">

                                    <select id="continents3_lunch">
                                        <option value = "0">all</option>
                                        <option value="1">carbs</option>
                                        <option value="2">Fats</option>
                                        <option value="3">proteins</option>


                                    </select>
                                    <select id="selectcountries3_lunch"></select>

                                    <select  id="gmValue3_lunch" >
                                        <option value="10">10 gm</option>
                                        <option value="20">20 gm</option>
                                        <option value="30">30 gm</option>
                                        <option value="50">50 gm</option>
                                        <option value="100">100 gm</option>
                                        <option value="200">200 gm</option>
                                        <option value="300">300 gm</option>
                                        <option value="400">400 gm</option>
                                        <option value="500">500 gm</option>
                                        <option value="600">600 gm</option>
                                    </select>

                                    <button type="button" class="btn btn-success" onclick="getData3_lunch()">أضف</button>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day3_lunch">الغداء
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day3_lunch" name="day3_lunch"
                                               value="{{$data->day3_lunch}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>


                                <br><br><br>



                                <div class="form-group text-center">

                                    <select id="continents3_break2">
                                        <option value = "0">all</option>
                                        <option value="1">carbs</option>
                                        <option value="2">Fats</option>
                                        <option value="3">proteins</option>


                                    </select>
                                    <select id="selectcountries3_break2"></select>

                                    <select name="gmValue" id="gmValue3_break2" >
                                        <option value="10">10 gm</option>
                                        <option value="20">20 gm</option>
                                        <option value="30">30 gm</option>
                                        <option value="50">50 gm</option>
                                        <option value="100">100 gm</option>
                                        <option value="200">200 gm</option>
                                        <option value="300">300 gm</option>
                                        <option value="400">400 gm</option>
                                        <option value="500">500 gm</option>
                                        <option value="600">600 gm</option>
                                    </select>

                                    <button type="button" class="btn btn-success" onclick="getData3_break2()">أضف</button>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day3_break2">وجبة خفيفة
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day3_break2" name="day3_break2"
                                               value="{{$data->day3_break2}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>


                                <br><br><br>



                                <div class="form-group text-center">

                                    <select id="continents3_dinner">
                                        <option value = "0">all</option>
                                        <option value="1">carbs</option>
                                        <option value="2">Fats</option>
                                        <option value="3">proteins</option>


                                    </select>
                                    <select id="selectcountries3_dinner"></select>

                                    <select name="gmValue" id="gmValue3_dinner" >
                                        <option value="10">10 gm</option>
                                        <option value="20">20 gm</option>
                                        <option value="30">30 gm</option>
                                        <option value="50">50 gm</option>
                                        <option value="100">100 gm</option>
                                        <option value="200">200 gm</option>
                                        <option value="300">300 gm</option>
                                        <option value="400">400 gm</option>
                                        <option value="500">500 gm</option>
                                        <option value="600">600 gm</option>
                                    </select>

                                    <button type="button" class="btn btn-success" onclick="getData3_dinner()">أضف</button>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day3_dinner">العشاء
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day3_dinner" name="day3_dinner"
                                               value="{{$data->day3_dinner}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>

                                <br><br><br>

                                <div class="form-group text-center">

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day3_notes">ملاحظات
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day3_notes" name="day3_notes"
                                               value="{{$data->day3_notes}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>






                                <br>
                                <br>
                                <br>

                                <div class="col-lg-12">

                                    <h2 class="text-center">مجموع السعرات الحرارية لليوم الثالث</h2>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <input type="text" id="carbSum3" class="form-control"
                                               name="carbSum3"
                                               value="{{$data->carbSum3}}"
                                               placeholder="مجموع الكربهيدرات" readonly>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <input type="text" id="fatsSum3" class="form-control"
                                               name="fatsSum3"
                                               value="{{$data->fatsSum3}}"
                                               placeholder="مجموع الدهون" readonly>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <input type="text" id="proteinSum3" class="form-control"
                                               name="proteinSum3"
                                               value="{{$data->proteinSum3}}"
                                               placeholder="مجموع البروتينات" readonly>
                                    </div>
                                </div>





                            </div>
                        </div>




                        <button class="accordion" type="button">اليوم الرابع</button>
                        <div class="panel">
                            <div class="form-group forth_day">


                                <div class="form-group text-center">

                                    <select id="continent4">
                                        <option value = "0">all</option>
                                        <option value="1">carbs</option>
                                        <option value="2">Fats</option>
                                        <option value="3">proteins</option>


                                    </select>
                                    <select id="selectcountries4"></select>

                                    <select name="gmValue" id="gmValue4" >
                                        <option value="10">10 gm</option>
                                        <option value="20">20 gm</option>
                                        <option value="30">30 gm</option>
                                        <option value="50">50 gm</option>
                                        <option value="100">100 gm</option>
                                        <option value="200">200 gm</option>
                                        <option value="300">300 gm</option>
                                        <option value="400">400 gm</option>
                                        <option value="500">500 gm</option>
                                        <option value="600">600 gm</option>
                                    </select>

                                    <button type="button" class="btn btn-success" onclick="getData4()">أضف</button>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day4_breakfast">الافطار
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day4_breakfast" name="day4_breakfast"
                                               value="{{$data->day4_breakfast}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>


                                <br><br><br>



                                <div class="form-group text-center">

                                    <select id="continents4_break1">
                                        <option value = "0">all</option>
                                        <option value="1">carbs</option>
                                        <option value="2">Fats</option>
                                        <option value="3">proteins</option>


                                    </select>
                                    <select id="selectcountries4_break1"></select>

                                    <select name="gmValue" id="gmValue4_break1" >
                                        <option value="10">10 gm</option>
                                        <option value="20">20 gm</option>
                                        <option value="30">30 gm</option>
                                        <option value="50">50 gm</option>
                                        <option value="100">100 gm</option>
                                        <option value="200">200 gm</option>
                                        <option value="300">300 gm</option>
                                        <option value="400">400 gm</option>
                                        <option value="500">500 gm</option>
                                        <option value="600">600 gm</option>
                                    </select>

                                    <button type="button" class="btn btn-success" onclick="getData4_break1()">أضف</button>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day4_break1">وجبة خفيفة
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day4_break1" name="day4_break1"
                                               value="{{$data->day4_break1}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>

                                <br><br><br>



                                <div class="form-group text-center">

                                    <select id="continents4_lunch">
                                        <option value = "0">all</option>
                                        <option value="1">carbs</option>
                                        <option value="2">Fats</option>
                                        <option value="3">proteins</option>


                                    </select>
                                    <select id="selectcountries4_lunch"></select>

                                    <select  id="gmValue4_lunch" >
                                        <option value="10">10 gm</option>
                                        <option value="20">20 gm</option>
                                        <option value="30">30 gm</option>
                                        <option value="50">50 gm</option>
                                        <option value="100">100 gm</option>
                                        <option value="200">200 gm</option>
                                        <option value="300">300 gm</option>
                                        <option value="400">400 gm</option>
                                        <option value="500">500 gm</option>
                                        <option value="600">600 gm</option>
                                    </select>

                                    <button type="button" class="btn btn-success" onclick="getData4_lunch()">أضف</button>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day4_lunch">الغداء
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day4_lunch" name="day4_lunch"
                                               value="{{$data->day4_lunch}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>


                                <br><br><br>



                                <div class="form-group text-center">

                                    <select id="continents4_break2">
                                        <option value = "0">all</option>
                                        <option value="1">carbs</option>
                                        <option value="2">Fats</option>
                                        <option value="3">proteins</option>


                                    </select>
                                    <select id="selectcountries4_break2"></select>

                                    <select name="gmValue" id="gmValue4_break2" >
                                        <option value="10">10 gm</option>
                                        <option value="20">20 gm</option>
                                        <option value="30">30 gm</option>
                                        <option value="50">50 gm</option>
                                        <option value="100">100 gm</option>
                                        <option value="200">200 gm</option>
                                        <option value="300">300 gm</option>
                                        <option value="400">400 gm</option>
                                        <option value="500">500 gm</option>
                                        <option value="600">600 gm</option>
                                    </select>

                                    <button type="button" class="btn btn-success" onclick="getData4_break2()">أضف</button>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day4_break2">وجبة خفيفة
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day4_break2" name="day4_break2"
                                               value="{{$data->day4_break2}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>


                                <br><br><br>



                                <div class="form-group text-center">

                                    <select id="continents4_dinner">
                                        <option value = "0">all</option>
                                        <option value="1">carbs</option>
                                        <option value="2">Fats</option>
                                        <option value="3">proteins</option>


                                    </select>
                                    <select id="selectcountries4_dinner"></select>

                                    <select name="gmValue" id="gmValue4_dinner" >
                                        <option value="10">10 gm</option>
                                        <option value="20">20 gm</option>
                                        <option value="30">30 gm</option>
                                        <option value="50">50 gm</option>
                                        <option value="100">100 gm</option>
                                        <option value="200">200 gm</option>
                                        <option value="300">300 gm</option>
                                        <option value="400">400 gm</option>
                                        <option value="500">500 gm</option>
                                        <option value="600">600 gm</option>
                                    </select>

                                    <button type="button" class="btn btn-success" onclick="getData4_dinner()">أضف</button>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day4_dinner">العشاء
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day4_dinner" name="day4_dinner"
                                               value="{{$data->day4_dinner}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>

                                <br><br><br>

                                <div class="form-group text-center">

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day4_notes">ملاحظات
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day4_notes" name="day4_notes"
                                               value="{{$data->day4_notes}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>






                                <br>
                                <br>
                                <br>

                                <div class="col-lg-12">

                                    <h2 class="text-center">مجموع السعرات الحرارية لليوم الثالث</h2>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <input type="text" id="carbSum4" class="form-control"
                                               name="carbSum4"
                                               value="{{$data->carbSum4}}"
                                               placeholder="مجموع الكربهيدرات" readonly>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <input type="text" id="fatsSum4" class="form-control"
                                               name="fatsSum4"
                                               value="{{$data->fatsSum4}}"
                                               placeholder="مجموع الدهون" readonly>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <input type="text" id="proteinSum4" class="form-control"
                                               name="proteinSum4"
                                               value="{{$data->proteinSum4}}"
                                               placeholder="مجموع البروتينات" readonly>
                                    </div>
                                </div>





                            </div>
                        </div>


                        <button class="accordion" type="button">اليوم الخامس</button>
                        <div class="panel">
                            <div class="form-group fifth_day">


                                <div class="form-group text-center">

                                    <select id="continent5">
                                        <option value = "0">all</option>
                                        <option value="1">carbs</option>
                                        <option value="2">Fats</option>
                                        <option value="3">proteins</option>


                                    </select>
                                    <select id="selectcountries5"></select>

                                    <select name="gmValue" id="gmValue5" >
                                        <option value="10">10 gm</option>
                                        <option value="20">20 gm</option>
                                        <option value="30">30 gm</option>
                                        <option value="50">50 gm</option>
                                        <option value="100">100 gm</option>
                                        <option value="200">200 gm</option>
                                        <option value="300">300 gm</option>
                                        <option value="400">400 gm</option>
                                        <option value="500">500 gm</option>
                                        <option value="600">600 gm</option>
                                    </select>

                                    <button type="button" class="btn btn-success" onclick="getData5()">أضف</button>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day5_breakfast">الافطار
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day5_breakfast" name="day5_breakfast"
                                               value="{{$data->day5_breakfast}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>


                                <br><br><br>



                                <div class="form-group text-center">

                                    <select id="continents5_break1">
                                        <option value = "0">all</option>
                                        <option value="1">carbs</option>
                                        <option value="2">Fats</option>
                                        <option value="3">proteins</option>


                                    </select>
                                    <select id="selectcountries5_break1"></select>

                                    <select name="gmValue" id="gmValue5_break1" >
                                        <option value="10">10 gm</option>
                                        <option value="20">20 gm</option>
                                        <option value="30">30 gm</option>
                                        <option value="50">50 gm</option>
                                        <option value="100">100 gm</option>
                                        <option value="200">200 gm</option>
                                        <option value="300">300 gm</option>
                                        <option value="400">400 gm</option>
                                        <option value="500">500 gm</option>
                                        <option value="600">600 gm</option>
                                    </select>

                                    <button type="button" class="btn btn-success" onclick="getData5_break1()">أضف</button>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day5_break1">وجبة خفيفة
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day5_break1" name="day5_break1"
                                               value="{{$data->day5_break1}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>

                                <br><br><br>



                                <div class="form-group text-center">

                                    <select id="continents5_lunch">
                                        <option value = "0">all</option>
                                        <option value="1">carbs</option>
                                        <option value="2">Fats</option>
                                        <option value="3">proteins</option>


                                    </select>
                                    <select id="selectcountries5_lunch"></select>

                                    <select  id="gmValue5_lunch" >
                                        <option value="10">10 gm</option>
                                        <option value="20">20 gm</option>
                                        <option value="30">30 gm</option>
                                        <option value="50">50 gm</option>
                                        <option value="100">100 gm</option>
                                        <option value="200">200 gm</option>
                                        <option value="300">300 gm</option>
                                        <option value="400">400 gm</option>
                                        <option value="500">500 gm</option>
                                        <option value="600">600 gm</option>
                                    </select>

                                    <button type="button" class="btn btn-success" onclick="getData5_lunch()">أضف</button>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day5_lunch">الغداء
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day5_lunch" name="day5_lunch"
                                               value="{{$data->day5_lunch}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>


                                <br><br><br>



                                <div class="form-group text-center">

                                    <select id="continents5_break2">
                                        <option value = "0">all</option>
                                        <option value="1">carbs</option>
                                        <option value="2">Fats</option>
                                        <option value="3">proteins</option>


                                    </select>
                                    <select id="selectcountries5_break2"></select>

                                    <select name="gmValue" id="gmValue5_break2" >
                                        <option value="10">10 gm</option>
                                        <option value="20">20 gm</option>
                                        <option value="30">30 gm</option>
                                        <option value="50">50 gm</option>
                                        <option value="100">100 gm</option>
                                        <option value="200">200 gm</option>
                                        <option value="300">300 gm</option>
                                        <option value="400">400 gm</option>
                                        <option value="500">500 gm</option>
                                        <option value="600">600 gm</option>
                                    </select>

                                    <button type="button" class="btn btn-success" onclick="getData5_break2()">أضف</button>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day5_break2">وجبة خفيفة
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day5_break2" name="day5_break2"
                                               value="{{$data->day5_break2}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>


                                <br><br><br>



                                <div class="form-group text-center">

                                    <select id="continents5_dinner">
                                        <option value = "0">all</option>
                                        <option value="1">carbs</option>
                                        <option value="2">Fats</option>
                                        <option value="3">proteins</option>


                                    </select>
                                    <select id="selectcountries5_dinner"></select>

                                    <select name="gmValue" id="gmValue5_dinner" >
                                        <option value="10">10 gm</option>
                                        <option value="20">20 gm</option>
                                        <option value="30">30 gm</option>
                                        <option value="50">50 gm</option>
                                        <option value="100">100 gm</option>
                                        <option value="200">200 gm</option>
                                        <option value="300">300 gm</option>
                                        <option value="400">400 gm</option>
                                        <option value="500">500 gm</option>
                                        <option value="600">600 gm</option>
                                    </select>

                                    <button type="button" class="btn btn-success" onclick="getData5_dinner()">أضف</button>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day5_dinner">العشاء
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day5_dinner" name="day5_dinner"
                                               value="{{$data->day5_dinner}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>

                                <br><br><br>

                                <div class="form-group text-center">

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day5_notes">ملاحظات
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day5_notes" name="day5_notes"
                                               value="{{$data->day5_notes}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>






                                <br>
                                <br>
                                <br>

                                <div class="col-lg-12">

                                    <h2 class="text-center">مجموع السعرات الحرارية لليوم الخامس</h2>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <input type="text" id="carbSum5" class="form-control"
                                               name="carbSum5"
                                               value="{{$data->carbSum5}}"
                                               placeholder="مجموع الكربهيدرات" readonly>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <input type="text" id="fatsSum5" class="form-control"
                                               name="fatsSum5"
                                               value="{{$data->fatsSum5}}"
                                               placeholder="مجموع الدهون" readonly>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <input type="text" id="proteinSum5" class="form-control"
                                               name="proteinSum5"
                                               value="{{$data->proteinSum5}}"
                                               placeholder="مجموع البروتينات" readonly>
                                    </div>
                                </div>





                            </div>
                        </div>





                        <button class="accordion" type="button">اليوم السادس</button>
                        <div class="panel">
                            <div class="form-group sixth_day">


                                <div class="form-group text-center">

                                    <select id="continent6">
                                        <option value = "0">all</option>
                                        <option value="1">carbs</option>
                                        <option value="2">Fats</option>
                                        <option value="3">proteins</option>


                                    </select>
                                    <select id="selectcountries6"></select>

                                    <select name="gmValue" id="gmValue6" >
                                        <option value="10">10 gm</option>
                                        <option value="20">20 gm</option>
                                        <option value="30">30 gm</option>
                                        <option value="50">50 gm</option>
                                        <option value="100">100 gm</option>
                                        <option value="200">200 gm</option>
                                        <option value="300">300 gm</option>
                                        <option value="400">400 gm</option>
                                        <option value="500">500 gm</option>
                                        <option value="600">600 gm</option>
                                    </select>

                                    <button type="button" class="btn btn-success" onclick="getData6()">أضف</button>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day6_breakfast">الافطار
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day6_breakfast" name="day6_breakfast"
                                               value="{{$data->day6_breakfast}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>


                                <br><br><br>



                                <div class="form-group text-center">

                                    <select id="continents6_break1">
                                        <option value = "0">all</option>
                                        <option value="1">carbs</option>
                                        <option value="2">Fats</option>
                                        <option value="3">proteins</option>


                                    </select>
                                    <select id="selectcountries6_break1"></select>

                                    <select name="gmValue" id="gmValue6_break1" >
                                        <option value="10">10 gm</option>
                                        <option value="20">20 gm</option>
                                        <option value="30">30 gm</option>
                                        <option value="50">50 gm</option>
                                        <option value="100">100 gm</option>
                                        <option value="200">200 gm</option>
                                        <option value="300">300 gm</option>
                                        <option value="400">400 gm</option>
                                        <option value="500">500 gm</option>
                                        <option value="600">600 gm</option>
                                    </select>

                                    <button type="button" class="btn btn-success" onclick="getData6_break1()">أضف</button>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day6_break1">وجبة خفيفة
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day6_break1" name="day6_break1"
                                               value="{{$data->day6_break1}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>

                                <br><br><br>



                                <div class="form-group text-center">

                                    <select id="continents6_lunch">
                                        <option value = "0">all</option>
                                        <option value="1">carbs</option>
                                        <option value="2">Fats</option>
                                        <option value="3">proteins</option>


                                    </select>
                                    <select id="selectcountries6_lunch"></select>

                                    <select  id="gmValue6_lunch" >
                                        <option value="10">10 gm</option>
                                        <option value="20">20 gm</option>
                                        <option value="30">30 gm</option>
                                        <option value="50">50 gm</option>
                                        <option value="100">100 gm</option>
                                        <option value="200">200 gm</option>
                                        <option value="300">300 gm</option>
                                        <option value="400">400 gm</option>
                                        <option value="500">500 gm</option>
                                        <option value="600">600 gm</option>
                                    </select>

                                    <button type="button" class="btn btn-success" onclick="getData6_lunch()">أضف</button>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day6_lunch">الغداء
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day6_lunch" name="day6_lunch"
                                               value="{{$data->day6_lunch}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>


                                <br><br><br>



                                <div class="form-group text-center">

                                    <select id="continents6_break2">
                                        <option value = "0">all</option>
                                        <option value="1">carbs</option>
                                        <option value="2">Fats</option>
                                        <option value="3">proteins</option>


                                    </select>
                                    <select id="selectcountries6_break2"></select>

                                    <select name="gmValue" id="gmValue6_break2" >
                                        <option value="10">10 gm</option>
                                        <option value="20">20 gm</option>
                                        <option value="30">30 gm</option>
                                        <option value="50">50 gm</option>
                                        <option value="100">100 gm</option>
                                        <option value="200">200 gm</option>
                                        <option value="300">300 gm</option>
                                        <option value="400">400 gm</option>
                                        <option value="500">500 gm</option>
                                        <option value="600">600 gm</option>
                                    </select>

                                    <button type="button" class="btn btn-success" onclick="getData6_break2()">أضف</button>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day6_break2">وجبة خفيفة
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day6_break2" name="day6_break2"
                                               value="{{$data->day6_break2}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>


                                <br><br><br>



                                <div class="form-group text-center">

                                    <select id="continents6_dinner">
                                        <option value = "0">all</option>
                                        <option value="1">carbs</option>
                                        <option value="2">Fats</option>
                                        <option value="3">proteins</option>


                                    </select>
                                    <select id="selectcountries6_dinner"></select>

                                    <select name="gmValue" id="gmValue6_dinner" >
                                        <option value="10">10 gm</option>
                                        <option value="20">20 gm</option>
                                        <option value="30">30 gm</option>
                                        <option value="50">50 gm</option>
                                        <option value="100">100 gm</option>
                                        <option value="200">200 gm</option>
                                        <option value="300">300 gm</option>
                                        <option value="400">400 gm</option>
                                        <option value="500">500 gm</option>
                                        <option value="600">600 gm</option>
                                    </select>

                                    <button type="button" class="btn btn-success" onclick="getData6_dinner()">أضف</button>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day6_dinner">العشاء
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day6_dinner" name="day6_dinner"
                                               value="{{$data->day6_dinner}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>

                                <br><br><br>

                                <div class="form-group text-center">

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day6_notes">ملاحظات
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day6_notes" name="day6_notes"
                                               value="{{$data->day6_notes}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>






                                <br>
                                <br>
                                <br>

                                <div class="col-lg-12">

                                    <h2 class="text-center">مجموع السعرات الحرارية لليوم السادس</h2>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <input type="text" id="carbSum6" class="form-control"
                                               name="carbSum6"
                                               value="{{$data->carbSum6}}"
                                               placeholder="مجموع الكربهيدرات" readonly>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <input type="text" id="fatsSum6" class="form-control"
                                               name="fatsSum6"
                                               value="{{$data->fatsSum6}}"
                                               placeholder="مجموع الدهون" readonly>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <input type="text" id="proteinSum6" class="form-control"
                                               name="proteinSum6"
                                               value="{{$data->proteinSum6}}"
                                               placeholder="مجموع البروتينات" readonly>
                                    </div>
                                </div>





                            </div>
                        </div>


                        <button class="accordion" type="button">اليوم السابع</button>
                        <div class="panel">
                            <div class="form-group seventh_day">


                                <div class="form-group text-center">

                                    <select id="continent7">
                                        <option value = "0">all</option>
                                        <option value="1">carbs</option>
                                        <option value="2">Fats</option>
                                        <option value="3">proteins</option>


                                    </select>
                                    <select id="selectcountries7"></select>

                                    <select name="gmValue" id="gmValue7" >
                                        <option value="10">10 gm</option>
                                        <option value="20">20 gm</option>
                                        <option value="30">30 gm</option>
                                        <option value="50">50 gm</option>
                                        <option value="100">100 gm</option>
                                        <option value="200">200 gm</option>
                                        <option value="300">300 gm</option>
                                        <option value="400">400 gm</option>
                                        <option value="500">500 gm</option>
                                        <option value="600">600 gm</option>
                                    </select>

                                    <button type="button" class="btn btn-success" onclick="getData7()">أضف</button>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day7_breakfast">الافطار
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day7_breakfast" name="day7_breakfast"
                                               value="{{$data->day7_breakfast}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>


                                <br><br><br>



                                <div class="form-group text-center">

                                    <select id="continents7_break1">
                                        <option value = "0">all</option>
                                        <option value="1">carbs</option>
                                        <option value="2">Fats</option>
                                        <option value="3">proteins</option>


                                    </select>
                                    <select id="selectcountries7_break1"></select>

                                    <select name="gmValue" id="gmValue7_break1" >
                                        <option value="10">10 gm</option>
                                        <option value="20">20 gm</option>
                                        <option value="30">30 gm</option>
                                        <option value="50">50 gm</option>
                                        <option value="100">100 gm</option>
                                        <option value="200">200 gm</option>
                                        <option value="300">300 gm</option>
                                        <option value="400">400 gm</option>
                                        <option value="500">500 gm</option>
                                        <option value="600">600 gm</option>
                                    </select>

                                    <button type="button" class="btn btn-success" onclick="getData7_break1()">أضف</button>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day7_break1">وجبة خفيفة
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day7_break1" name="day7_break1"
                                               value="{{$data->day7_break1}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>

                                <br><br><br>



                                <div class="form-group text-center">

                                    <select id="continents7_lunch">
                                        <option value = "0">all</option>
                                        <option value="1">carbs</option>
                                        <option value="2">Fats</option>
                                        <option value="3">proteins</option>


                                    </select>
                                    <select id="selectcountries7_lunch"></select>

                                    <select  id="gmValue7_lunch" >
                                        <option value="10">10 gm</option>
                                        <option value="20">20 gm</option>
                                        <option value="30">30 gm</option>
                                        <option value="50">50 gm</option>
                                        <option value="100">100 gm</option>
                                        <option value="200">200 gm</option>
                                        <option value="300">300 gm</option>
                                        <option value="400">400 gm</option>
                                        <option value="500">500 gm</option>
                                        <option value="600">600 gm</option>
                                    </select>

                                    <button type="button" class="btn btn-success" onclick="getData7_lunch()">أضف</button>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day7_lunch">الغداء
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day7_lunch" name="day7_lunch"
                                               value="{{$data->day7_lunch}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>


                                <br><br><br>



                                <div class="form-group text-center">

                                    <select id="continents7_break2">
                                        <option value = "0">all</option>
                                        <option value="1">carbs</option>
                                        <option value="2">Fats</option>
                                        <option value="3">proteins</option>


                                    </select>
                                    <select id="selectcountries7_break2"></select>

                                    <select name="gmValue" id="gmValue7_break2" >
                                        <option value="10">10 gm</option>
                                        <option value="20">20 gm</option>
                                        <option value="30">30 gm</option>
                                        <option value="50">50 gm</option>
                                        <option value="100">100 gm</option>
                                        <option value="200">200 gm</option>
                                        <option value="300">300 gm</option>
                                        <option value="400">400 gm</option>
                                        <option value="500">500 gm</option>
                                        <option value="600">600 gm</option>
                                    </select>

                                    <button type="button" class="btn btn-success" onclick="getData7_break2()">أضف</button>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day7_break2">وجبة خفيفة
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day7_break2" name="day7_break2"
                                               value="{{$data->day7_break2}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>


                                <br><br><br>



                                <div class="form-group text-center">

                                    <select id="continents7_dinner">
                                        <option value = "0">all</option>
                                        <option value="1">carbs</option>
                                        <option value="2">Fats</option>
                                        <option value="3">proteins</option>


                                    </select>
                                    <select id="selectcountries7_dinner"></select>

                                    <select name="gmValue" id="gmValue7_dinner" >
                                        <option value="10">10 gm</option>
                                        <option value="20">20 gm</option>
                                        <option value="30">30 gm</option>
                                        <option value="50">50 gm</option>
                                        <option value="100">100 gm</option>
                                        <option value="200">200 gm</option>
                                        <option value="300">300 gm</option>
                                        <option value="400">400 gm</option>
                                        <option value="500">500 gm</option>
                                        <option value="600">600 gm</option>
                                    </select>

                                    <button type="button" class="btn btn-success" onclick="getData7_dinner()">أضف</button>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day7_dinner">العشاء
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day7_dinner" name="day7_dinner"
                                               value="{{$data->day7_dinner}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>

                                <br><br><br>

                                <div class="form-group text-center">

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day7_notes">ملاحظات
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day7_notes" name="day7_notes"
                                               value="{{$data->day7_notes}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>






                                <br>
                                <br>
                                <br>

                                <div class="col-lg-12">

                                    <h2 class="text-center">مجموع السعرات الحرارية لليوم السابع</h2>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <input type="text" id="carbSum7" class="form-control"
                                               name="carbSum7"
                                               value="{{$data->carbSum7}}"
                                               placeholder="مجموع الكربهيدرات" readonly>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <input type="text" id="fatsSum7" class="form-control"
                                               name="fatsSum7"
                                               value="{{$data->fatsSum7}}"
                                               placeholder="مجموع الدهون" readonly>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <input type="text" id="proteinSum7" class="form-control"
                                               name="proteinSum7"
                                               value="{{$data->proteinSum7}}"
                                               placeholder="مجموع البروتينات" readonly>
                                    </div>
                                </div>





                            </div>
                        </div>




                        <input type="submit" name="submit" value="حفظ" class="btn btn-success btn-block">
                    </form>
                </div>
            </div>
        </div>
        <?php

        $data = \App\Food::all();
        $carbs=\App\Food::where('category_id',1)->get();
        $fats=\App\Food::where('category_id',2)->get();
        $proteins=\App\Food::where('category_id',3)->get();

        ?>
    </section>




    <script>
        CKEDITOR.replace('system_desc');
    </script>
    <script src="{{url('/')}}/js/typeahead.js"></script>



    <script>

        var pausecontent = new Array();

        <?php foreach ($data as $item) {

        ?>

        pausecontent.push('<?php echo $item->food_name; ?>');

        <?php }?>

        /*   $('#day1_breakfast').tagator({

               autocomplete: pausecontent,
               //showAllOptionsOnFocus: true,


           }); */

    </script>

    <script>


        var carb = new Array();

        <?php foreach ($data as $item) {

        ?>

        carb.push('<?php echo $item->food_name.' - '.$item->gm.' - '.$item->category_id; ?>');

            <?php }?>


        var carbs = new Array();

        <?php foreach ($carbs as $item) {

        ?>

        carbs.push('<?php echo $item->food_name.' - '.$item->gm.' - '.$item->category_id; ?>');

            <?php }?>


        var fats = new Array();

        <?php foreach ($fats as $item) {

        ?>

        fats.push('<?php echo $item->food_name.' - '.$item->gm.' - '.$item->category_id; ?>');

            <?php }?>


        var proteins = new Array();

        <?php foreach ($proteins as $item) {

        ?>

        proteins.push('<?php echo $item->food_name.' - '.$item->gm.' - '.$item->category_id; ?>');

        <?php }?>

    </script>



    {{-- day 1 breakfast start --}}
    <script src="{{url('/')}}/js/day1/day1_breakfast.js"></script>


    {{-- day 1 breakfast finish --}}

    {{-- day 1 lunch start --}}
    <script src="{{url('/')}}/js/day1/day1_launch.js"></script>

    {{-- day 1 lunch finish --}}



    {{-- day 1 dinner start --}}

    <script src="{{url('/')}}/js/day1/day1_dinner.js"></script>

    {{-- day 1 dinner finish --}}

    {{-- day 1 break1 start --}}

    <script src="{{url('/')}}/js/day1/day1_break1.js"></script>
    {{-- day 1 break1 finish --}}


    {{-- day 1 break2 start --}}

    <script src="{{url('/')}}/js/day1/day1_break2.js"></script>
    {{-- day 1 break2 finish --}}




    {{-- day 2 -- }}


    {{-- day 2 breakfast start --}}

    <script src="{{url('/')}}/js/day2/day2_breakfast.js"></script>
    {{-- day 2 breakfast start --}}

    {{-- day 2 lunch start --}}

    <script>

        function initSelectors(){
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continents2_lunch') );

            //countries
            MAIN.createRelatedSelector
            ( document.querySelector('#continents2_lunch')           // from select element
                ,document.querySelector('#selectcountries2_lunch')      // to select element
                ,{                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                ,function(a,b){return a>b ? 1 : a<b ? -1 : 0;}   // sort method
            );




        }

        //create MAIN namespace
        (function(ns){ // don't pollute the global namespace

            function create(from, to, obj, srt){
                if (!from) {
                    throw CreationError('create: parameter selector [from] missing');
                }
                if (!to) {
                    throw CreationError('create: parameter related selector [to] missing');
                }
                if (!obj) {
                    throw CreationError('create: related filter definition object [obj] missing');
                }

                //retrieve all options from obj and add it
                obj.all = (function(o){
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test (o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call( from
                    ,null
                    ,to
                    ,obj
                    ,srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn,obj){
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)){
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt){
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self,{optselects:obj,optselectsall:obj.all,relatedTo:relatedto,sorter:srt || false});
                    }

                    if (!self.relatedTo){
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        ,cselect = self.relatedTo
                        ,opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i=0;i<optsfilter.length;i+=1){
                        opts[i] = new Option(optsfilter[i],i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg){
                return {name:'CreationError',message:mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function(from,to,obj,srt) {
                    try {
                        if (arguments.length<1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null,from,to,obj,srt);
                    }
                    catch(e) { console.log('createRelatedSelector ->',e.name,'\n'
                        + e.message +
                        '\ncheck parameters'); }
                }
            };
        }('MAIN'));
        //initialize
        initSelectors();
    </script>

    {{-- day 2 lunch finish --}}



    {{-- day 2 dinner start --}}

    <script>

        function initSelectors(){
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continents2_dinner') );

            //countries
            MAIN.createRelatedSelector
            ( document.querySelector('#continents2_dinner')           // from select element
                ,document.querySelector('#selectcountries2_dinner')      // to select element
                ,{                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                ,function(a,b){return a>b ? 1 : a<b ? -1 : 0;}   // sort method
            );




        }

        //create MAIN namespace
        (function(ns){ // don't pollute the global namespace

            function create(from, to, obj, srt){
                if (!from) {
                    throw CreationError('create: parameter selector [from] missing');
                }
                if (!to) {
                    throw CreationError('create: parameter related selector [to] missing');
                }
                if (!obj) {
                    throw CreationError('create: related filter definition object [obj] missing');
                }

                //retrieve all options from obj and add it
                obj.all = (function(o){
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test (o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call( from
                    ,null
                    ,to
                    ,obj
                    ,srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn,obj){
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)){
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt){
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self,{optselects:obj,optselectsall:obj.all,relatedTo:relatedto,sorter:srt || false});
                    }

                    if (!self.relatedTo){
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        ,cselect = self.relatedTo
                        ,opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i=0;i<optsfilter.length;i+=1){
                        opts[i] = new Option(optsfilter[i],i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg){
                return {name:'CreationError',message:mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function(from,to,obj,srt) {
                    try {
                        if (arguments.length<1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null,from,to,obj,srt);
                    }
                    catch(e) { console.log('createRelatedSelector ->',e.name,'\n'
                        + e.message +
                        '\ncheck parameters'); }
                }
            };
        }('MAIN'));
        //initialize
        initSelectors();
    </script>

    {{-- day 2 dinner finish --}}

    {{-- day 2 break1 start --}}

    <script>

        function initSelectors(){
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continents2_break1') );

            //countries
            MAIN.createRelatedSelector
            ( document.querySelector('#continents2_break1')           // from select element
                ,document.querySelector('#selectcountries2_break1')      // to select element
                ,{                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                ,function(a,b){return a>b ? 1 : a<b ? -1 : 0;}   // sort method
            );




        }

        //create MAIN namespace
        (function(ns){ // don't pollute the global namespace

            function create(from, to, obj, srt){
                if (!from) {
                    throw CreationError('create: parameter selector [from] missing');
                }
                if (!to) {
                    throw CreationError('create: parameter related selector [to] missing');
                }
                if (!obj) {
                    throw CreationError('create: related filter definition object [obj] missing');
                }

                //retrieve all options from obj and add it
                obj.all = (function(o){
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test (o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call( from
                    ,null
                    ,to
                    ,obj
                    ,srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn,obj){
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)){
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt){
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self,{optselects:obj,optselectsall:obj.all,relatedTo:relatedto,sorter:srt || false});
                    }

                    if (!self.relatedTo){
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        ,cselect = self.relatedTo
                        ,opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i=0;i<optsfilter.length;i+=1){
                        opts[i] = new Option(optsfilter[i],i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg){
                return {name:'CreationError',message:mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function(from,to,obj,srt) {
                    try {
                        if (arguments.length<1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null,from,to,obj,srt);
                    }
                    catch(e) { console.log('createRelatedSelector ->',e.name,'\n'
                        + e.message +
                        '\ncheck parameters'); }
                }
            };
        }('MAIN'));
        //initialize
        initSelectors();
    </script>
    {{-- day 2 break1 finish --}}


    {{-- day 2 break2 start --}}

    <script>

        function initSelectors(){
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continents2_break2') );

            //countries
            MAIN.createRelatedSelector
            ( document.querySelector('#continents2_break2')           // from select element
                ,document.querySelector('#selectcountries2_break2')      // to select element
                ,{                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                ,function(a,b){return a>b ? 1 : a<b ? -1 : 0;}   // sort method
            );




        }

        //create MAIN namespace
        (function(ns){ // don't pollute the global namespace

            function create(from, to, obj, srt){
                if (!from) {
                    throw CreationError('create: parameter selector [from] missing');
                }
                if (!to) {
                    throw CreationError('create: parameter related selector [to] missing');
                }
                if (!obj) {
                    throw CreationError('create: related filter definition object [obj] missing');
                }

                //retrieve all options from obj and add it
                obj.all = (function(o){
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test (o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call( from
                    ,null
                    ,to
                    ,obj
                    ,srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn,obj){
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)){
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt){
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self,{optselects:obj,optselectsall:obj.all,relatedTo:relatedto,sorter:srt || false});
                    }

                    if (!self.relatedTo){
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        ,cselect = self.relatedTo
                        ,opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i=0;i<optsfilter.length;i+=1){
                        opts[i] = new Option(optsfilter[i],i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg){
                return {name:'CreationError',message:mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function(from,to,obj,srt) {
                    try {
                        if (arguments.length<1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null,from,to,obj,srt);
                    }
                    catch(e) { console.log('createRelatedSelector ->',e.name,'\n'
                        + e.message +
                        '\ncheck parameters'); }
                }
            };
        }('MAIN'));
        //initialize
        initSelectors();
    </script>
    {{-- day 2 break2 finish --}}



    {{-- day 3 -- }}


    {{-- day 3 breakfast start --}}
    <script>

        function initSelectors(){
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continent3') );

            //countries
            MAIN.createRelatedSelector
            ( document.querySelector('#continent3')           // from select element
                ,document.querySelector('#selectcountries3')      // to select element
                ,{                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                ,function(a,b){return a>b ? 1 : a<b ? -1 : 0;}   // sort method
            );




        }

        //create MAIN namespace
        (function(ns){ // don't pollute the global namespace

            function create(from, to, obj, srt){
                if (!from) {
                    throw CreationError('create: parameter selector [from] missing');
                }
                if (!to) {
                    throw CreationError('create: parameter related selector [to] missing');
                }
                if (!obj) {
                    throw CreationError('create: related filter definition object [obj] missing');
                }

                //retrieve all options from obj and add it
                obj.all = (function(o){
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test (o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call( from
                    ,null
                    ,to
                    ,obj
                    ,srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn,obj){
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)){
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt){
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self,{optselects:obj,optselectsall:obj.all,relatedTo:relatedto,sorter:srt || false});
                    }

                    if (!self.relatedTo){
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        ,cselect = self.relatedTo
                        ,opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i=0;i<optsfilter.length;i+=1){
                        opts[i] = new Option(optsfilter[i],i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg){
                return {name:'CreationError',message:mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function(from,to,obj,srt) {
                    try {
                        if (arguments.length<1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null,from,to,obj,srt);
                    }
                    catch(e) { console.log('createRelatedSelector ->',e.name,'\n'
                        + e.message +
                        '\ncheck parameters'); }
                }
            };
        }('MAIN'));
        //initialize
        initSelectors();
    </script>

    {{-- day 3 breakfast finish --}}

    {{-- day 3 lunch start --}}

    <script>

        function initSelectors(){
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continents3_lunch') );

            //countries
            MAIN.createRelatedSelector
            ( document.querySelector('#continents3_lunch')           // from select element
                ,document.querySelector('#selectcountries3_lunch')      // to select element
                ,{                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                ,function(a,b){return a>b ? 1 : a<b ? -1 : 0;}   // sort method
            );




        }

        //create MAIN namespace
        (function(ns){ // don't pollute the global namespace

            function create(from, to, obj, srt){
                if (!from) {
                    throw CreationError('create: parameter selector [from] missing');
                }
                if (!to) {
                    throw CreationError('create: parameter related selector [to] missing');
                }
                if (!obj) {
                    throw CreationError('create: related filter definition object [obj] missing');
                }

                //retrieve all options from obj and add it
                obj.all = (function(o){
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test (o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call( from
                    ,null
                    ,to
                    ,obj
                    ,srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn,obj){
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)){
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt){
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self,{optselects:obj,optselectsall:obj.all,relatedTo:relatedto,sorter:srt || false});
                    }

                    if (!self.relatedTo){
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        ,cselect = self.relatedTo
                        ,opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i=0;i<optsfilter.length;i+=1){
                        opts[i] = new Option(optsfilter[i],i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg){
                return {name:'CreationError',message:mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function(from,to,obj,srt) {
                    try {
                        if (arguments.length<1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null,from,to,obj,srt);
                    }
                    catch(e) { console.log('createRelatedSelector ->',e.name,'\n'
                        + e.message +
                        '\ncheck parameters'); }
                }
            };
        }('MAIN'));
        //initialize
        initSelectors();
    </script>

    {{-- day 3 lunch finish --}}



    {{-- day 3 dinner start --}}

    <script>

        function initSelectors(){
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continents3_dinner') );

            //countries
            MAIN.createRelatedSelector
            ( document.querySelector('#continents3_dinner')           // from select element
                ,document.querySelector('#selectcountries3_dinner')      // to select element
                ,{                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                ,function(a,b){return a>b ? 1 : a<b ? -1 : 0;}   // sort method
            );




        }

        //create MAIN namespace
        (function(ns){ // don't pollute the global namespace

            function create(from, to, obj, srt){
                if (!from) {
                    throw CreationError('create: parameter selector [from] missing');
                }
                if (!to) {
                    throw CreationError('create: parameter related selector [to] missing');
                }
                if (!obj) {
                    throw CreationError('create: related filter definition object [obj] missing');
                }

                //retrieve all options from obj and add it
                obj.all = (function(o){
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test (o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call( from
                    ,null
                    ,to
                    ,obj
                    ,srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn,obj){
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)){
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt){
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self,{optselects:obj,optselectsall:obj.all,relatedTo:relatedto,sorter:srt || false});
                    }

                    if (!self.relatedTo){
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        ,cselect = self.relatedTo
                        ,opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i=0;i<optsfilter.length;i+=1){
                        opts[i] = new Option(optsfilter[i],i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg){
                return {name:'CreationError',message:mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function(from,to,obj,srt) {
                    try {
                        if (arguments.length<1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null,from,to,obj,srt);
                    }
                    catch(e) { console.log('createRelatedSelector ->',e.name,'\n'
                        + e.message +
                        '\ncheck parameters'); }
                }
            };
        }('MAIN'));
        //initialize
        initSelectors();
    </script>

    {{-- day 3 dinner finish --}}

    {{-- day 3 break1 start --}}

    <script>

        function initSelectors(){
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continents3_break1') );

            //countries
            MAIN.createRelatedSelector
            ( document.querySelector('#continents3_break1')           // from select element
                ,document.querySelector('#selectcountries3_break1')      // to select element
                ,{                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                ,function(a,b){return a>b ? 1 : a<b ? -1 : 0;}   // sort method
            );




        }

        //create MAIN namespace
        (function(ns){ // don't pollute the global namespace

            function create(from, to, obj, srt){
                if (!from) {
                    throw CreationError('create: parameter selector [from] missing');
                }
                if (!to) {
                    throw CreationError('create: parameter related selector [to] missing');
                }
                if (!obj) {
                    throw CreationError('create: related filter definition object [obj] missing');
                }

                //retrieve all options from obj and add it
                obj.all = (function(o){
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test (o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call( from
                    ,null
                    ,to
                    ,obj
                    ,srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn,obj){
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)){
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt){
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self,{optselects:obj,optselectsall:obj.all,relatedTo:relatedto,sorter:srt || false});
                    }

                    if (!self.relatedTo){
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        ,cselect = self.relatedTo
                        ,opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i=0;i<optsfilter.length;i+=1){
                        opts[i] = new Option(optsfilter[i],i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg){
                return {name:'CreationError',message:mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function(from,to,obj,srt) {
                    try {
                        if (arguments.length<1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null,from,to,obj,srt);
                    }
                    catch(e) { console.log('createRelatedSelector ->',e.name,'\n'
                        + e.message +
                        '\ncheck parameters'); }
                }
            };
        }('MAIN'));
        //initialize
        initSelectors();
    </script>
    {{-- day 3 break1 finish --}}


    {{-- day 3 break2 start --}}

    <script>

        function initSelectors(){
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continents3_break2') );

            //countries
            MAIN.createRelatedSelector
            ( document.querySelector('#continents3_break2')           // from select element
                ,document.querySelector('#selectcountries3_break2')      // to select element
                ,{                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                ,function(a,b){return a>b ? 1 : a<b ? -1 : 0;}   // sort method
            );




        }

        //create MAIN namespace
        (function(ns){ // don't pollute the global namespace

            function create(from, to, obj, srt){
                if (!from) {
                    throw CreationError('create: parameter selector [from] missing');
                }
                if (!to) {
                    throw CreationError('create: parameter related selector [to] missing');
                }
                if (!obj) {
                    throw CreationError('create: related filter definition object [obj] missing');
                }

                //retrieve all options from obj and add it
                obj.all = (function(o){
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test (o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call( from
                    ,null
                    ,to
                    ,obj
                    ,srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn,obj){
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)){
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt){
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self,{optselects:obj,optselectsall:obj.all,relatedTo:relatedto,sorter:srt || false});
                    }

                    if (!self.relatedTo){
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        ,cselect = self.relatedTo
                        ,opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i=0;i<optsfilter.length;i+=1){
                        opts[i] = new Option(optsfilter[i],i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg){
                return {name:'CreationError',message:mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function(from,to,obj,srt) {
                    try {
                        if (arguments.length<1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null,from,to,obj,srt);
                    }
                    catch(e) { console.log('createRelatedSelector ->',e.name,'\n'
                        + e.message +
                        '\ncheck parameters'); }
                }
            };
        }('MAIN'));
        //initialize
        initSelectors();
    </script>
    {{-- day 3 break2 finish --}}


    {{-- functions that assign values to summation inputs --}}



    {{-- day 4 -- }}


   {{-- day 4 breakfast start --}}
    <script>

        function initSelectors(){
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continent4') );

            //countries
            MAIN.createRelatedSelector
            ( document.querySelector('#continent4')           // from select element
                ,document.querySelector('#selectcountries4')      // to select element
                ,{                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                ,function(a,b){return a>b ? 1 : a<b ? -1 : 0;}   // sort method
            );




        }

        //create MAIN namespace
        (function(ns){ // don't pollute the global namespace

            function create(from, to, obj, srt){
                if (!from) {
                    throw CreationError('create: parameter selector [from] missing');
                }
                if (!to) {
                    throw CreationError('create: parameter related selector [to] missing');
                }
                if (!obj) {
                    throw CreationError('create: related filter definition object [obj] missing');
                }

                //retrieve all options from obj and add it
                obj.all = (function(o){
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test (o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call( from
                    ,null
                    ,to
                    ,obj
                    ,srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn,obj){
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)){
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt){
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self,{optselects:obj,optselectsall:obj.all,relatedTo:relatedto,sorter:srt || false});
                    }

                    if (!self.relatedTo){
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        ,cselect = self.relatedTo
                        ,opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i=0;i<optsfilter.length;i+=1){
                        opts[i] = new Option(optsfilter[i],i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg){
                return {name:'CreationError',message:mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function(from,to,obj,srt) {
                    try {
                        if (arguments.length<1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null,from,to,obj,srt);
                    }
                    catch(e) { console.log('createRelatedSelector ->',e.name,'\n'
                        + e.message +
                        '\ncheck parameters'); }
                }
            };
        }('MAIN'));
        //initialize
        initSelectors();
    </script>

    {{-- day 4 breakfast finish --}}

    {{-- day 4 lunch start --}}

    <script>

        function initSelectors(){
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continents4_lunch') );

            //countries
            MAIN.createRelatedSelector
            ( document.querySelector('#continents4_lunch')           // from select element
                ,document.querySelector('#selectcountries4_lunch')      // to select element
                ,{                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                ,function(a,b){return a>b ? 1 : a<b ? -1 : 0;}   // sort method
            );




        }

        //create MAIN namespace
        (function(ns){ // don't pollute the global namespace

            function create(from, to, obj, srt){
                if (!from) {
                    throw CreationError('create: parameter selector [from] missing');
                }
                if (!to) {
                    throw CreationError('create: parameter related selector [to] missing');
                }
                if (!obj) {
                    throw CreationError('create: related filter definition object [obj] missing');
                }

                //retrieve all options from obj and add it
                obj.all = (function(o){
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test (o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call( from
                    ,null
                    ,to
                    ,obj
                    ,srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn,obj){
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)){
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt){
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self,{optselects:obj,optselectsall:obj.all,relatedTo:relatedto,sorter:srt || false});
                    }

                    if (!self.relatedTo){
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        ,cselect = self.relatedTo
                        ,opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i=0;i<optsfilter.length;i+=1){
                        opts[i] = new Option(optsfilter[i],i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg){
                return {name:'CreationError',message:mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function(from,to,obj,srt) {
                    try {
                        if (arguments.length<1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null,from,to,obj,srt);
                    }
                    catch(e) { console.log('createRelatedSelector ->',e.name,'\n'
                        + e.message +
                        '\ncheck parameters'); }
                }
            };
        }('MAIN'));
        //initialize
        initSelectors();
    </script>

    {{-- day 4 lunch finish --}}



    {{-- day 4 dinner start --}}

    <script>

        function initSelectors(){
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continents4_dinner') );

            //countries
            MAIN.createRelatedSelector
            ( document.querySelector('#continents4_dinner')           // from select element
                ,document.querySelector('#selectcountries4_dinner')      // to select element
                ,{                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                ,function(a,b){return a>b ? 1 : a<b ? -1 : 0;}   // sort method
            );




        }

        //create MAIN namespace
        (function(ns){ // don't pollute the global namespace

            function create(from, to, obj, srt){
                if (!from) {
                    throw CreationError('create: parameter selector [from] missing');
                }
                if (!to) {
                    throw CreationError('create: parameter related selector [to] missing');
                }
                if (!obj) {
                    throw CreationError('create: related filter definition object [obj] missing');
                }

                //retrieve all options from obj and add it
                obj.all = (function(o){
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test (o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call( from
                    ,null
                    ,to
                    ,obj
                    ,srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn,obj){
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)){
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt){
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self,{optselects:obj,optselectsall:obj.all,relatedTo:relatedto,sorter:srt || false});
                    }

                    if (!self.relatedTo){
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        ,cselect = self.relatedTo
                        ,opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i=0;i<optsfilter.length;i+=1){
                        opts[i] = new Option(optsfilter[i],i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg){
                return {name:'CreationError',message:mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function(from,to,obj,srt) {
                    try {
                        if (arguments.length<1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null,from,to,obj,srt);
                    }
                    catch(e) { console.log('createRelatedSelector ->',e.name,'\n'
                        + e.message +
                        '\ncheck parameters'); }
                }
            };
        }('MAIN'));
        //initialize
        initSelectors();
    </script>

    {{-- day 4 dinner finish --}}

    {{-- day 4 break1 start --}}

    <script>

        function initSelectors(){
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continents4_break1') );

            //countries
            MAIN.createRelatedSelector
            ( document.querySelector('#continents4_break1')           // from select element
                ,document.querySelector('#selectcountries4_break1')      // to select element
                ,{                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                ,function(a,b){return a>b ? 1 : a<b ? -1 : 0;}   // sort method
            );




        }

        //create MAIN namespace
        (function(ns){ // don't pollute the global namespace

            function create(from, to, obj, srt){
                if (!from) {
                    throw CreationError('create: parameter selector [from] missing');
                }
                if (!to) {
                    throw CreationError('create: parameter related selector [to] missing');
                }
                if (!obj) {
                    throw CreationError('create: related filter definition object [obj] missing');
                }

                //retrieve all options from obj and add it
                obj.all = (function(o){
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test (o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call( from
                    ,null
                    ,to
                    ,obj
                    ,srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn,obj){
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)){
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt){
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self,{optselects:obj,optselectsall:obj.all,relatedTo:relatedto,sorter:srt || false});
                    }

                    if (!self.relatedTo){
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        ,cselect = self.relatedTo
                        ,opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i=0;i<optsfilter.length;i+=1){
                        opts[i] = new Option(optsfilter[i],i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg){
                return {name:'CreationError',message:mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function(from,to,obj,srt) {
                    try {
                        if (arguments.length<1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null,from,to,obj,srt);
                    }
                    catch(e) { console.log('createRelatedSelector ->',e.name,'\n'
                        + e.message +
                        '\ncheck parameters'); }
                }
            };
        }('MAIN'));
        //initialize
        initSelectors();
    </script>
    {{-- day 4 break1 finish --}}


    {{-- day 4 break2 start --}}

    <script>

        function initSelectors(){
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continents4_break2') );

            //countries
            MAIN.createRelatedSelector
            ( document.querySelector('#continents4_break2')           // from select element
                ,document.querySelector('#selectcountries4_break2')      // to select element
                ,{                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                ,function(a,b){return a>b ? 1 : a<b ? -1 : 0;}   // sort method
            );




        }

        //create MAIN namespace
        (function(ns){ // don't pollute the global namespace

            function create(from, to, obj, srt){
                if (!from) {
                    throw CreationError('create: parameter selector [from] missing');
                }
                if (!to) {
                    throw CreationError('create: parameter related selector [to] missing');
                }
                if (!obj) {
                    throw CreationError('create: related filter definition object [obj] missing');
                }

                //retrieve all options from obj and add it
                obj.all = (function(o){
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test (o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call( from
                    ,null
                    ,to
                    ,obj
                    ,srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn,obj){
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)){
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt){
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self,{optselects:obj,optselectsall:obj.all,relatedTo:relatedto,sorter:srt || false});
                    }

                    if (!self.relatedTo){
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        ,cselect = self.relatedTo
                        ,opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i=0;i<optsfilter.length;i+=1){
                        opts[i] = new Option(optsfilter[i],i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg){
                return {name:'CreationError',message:mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function(from,to,obj,srt) {
                    try {
                        if (arguments.length<1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null,from,to,obj,srt);
                    }
                    catch(e) { console.log('createRelatedSelector ->',e.name,'\n'
                        + e.message +
                        '\ncheck parameters'); }
                }
            };
        }('MAIN'));
        //initialize
        initSelectors();
    </script>
    {{-- day 4 break2 finish --}}




    {{-- day 5 -- }}


   {{-- day 5 breakfast start --}}
    <script>

        function initSelectors(){
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continent5') );

            //countries
            MAIN.createRelatedSelector
            ( document.querySelector('#continent5')           // from select element
                ,document.querySelector('#selectcountries5')      // to select element
                ,{                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                ,function(a,b){return a>b ? 1 : a<b ? -1 : 0;}   // sort method
            );




        }

        //create MAIN namespace
        (function(ns){ // don't pollute the global namespace

            function create(from, to, obj, srt){
                if (!from) {
                    throw CreationError('create: parameter selector [from] missing');
                }
                if (!to) {
                    throw CreationError('create: parameter related selector [to] missing');
                }
                if (!obj) {
                    throw CreationError('create: related filter definition object [obj] missing');
                }

                //retrieve all options from obj and add it
                obj.all = (function(o){
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test (o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call( from
                    ,null
                    ,to
                    ,obj
                    ,srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn,obj){
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)){
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt){
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self,{optselects:obj,optselectsall:obj.all,relatedTo:relatedto,sorter:srt || false});
                    }

                    if (!self.relatedTo){
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        ,cselect = self.relatedTo
                        ,opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i=0;i<optsfilter.length;i+=1){
                        opts[i] = new Option(optsfilter[i],i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg){
                return {name:'CreationError',message:mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function(from,to,obj,srt) {
                    try {
                        if (arguments.length<1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null,from,to,obj,srt);
                    }
                    catch(e) { console.log('createRelatedSelector ->',e.name,'\n'
                        + e.message +
                        '\ncheck parameters'); }
                }
            };
        }('MAIN'));
        //initialize
        initSelectors();
    </script>

    {{-- day 5 breakfast finish --}}

    {{-- day 5 lunch start --}}

    <script>

        function initSelectors(){
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continents5_lunch') );

            //countries
            MAIN.createRelatedSelector
            ( document.querySelector('#continents5_lunch')           // from select element
                ,document.querySelector('#selectcountries5_lunch')      // to select element
                ,{                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                ,function(a,b){return a>b ? 1 : a<b ? -1 : 0;}   // sort method
            );




        }

        //create MAIN namespace
        (function(ns){ // don't pollute the global namespace

            function create(from, to, obj, srt){
                if (!from) {
                    throw CreationError('create: parameter selector [from] missing');
                }
                if (!to) {
                    throw CreationError('create: parameter related selector [to] missing');
                }
                if (!obj) {
                    throw CreationError('create: related filter definition object [obj] missing');
                }

                //retrieve all options from obj and add it
                obj.all = (function(o){
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test (o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call( from
                    ,null
                    ,to
                    ,obj
                    ,srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn,obj){
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)){
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt){
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self,{optselects:obj,optselectsall:obj.all,relatedTo:relatedto,sorter:srt || false});
                    }

                    if (!self.relatedTo){
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        ,cselect = self.relatedTo
                        ,opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i=0;i<optsfilter.length;i+=1){
                        opts[i] = new Option(optsfilter[i],i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg){
                return {name:'CreationError',message:mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function(from,to,obj,srt) {
                    try {
                        if (arguments.length<1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null,from,to,obj,srt);
                    }
                    catch(e) { console.log('createRelatedSelector ->',e.name,'\n'
                        + e.message +
                        '\ncheck parameters'); }
                }
            };
        }('MAIN'));
        //initialize
        initSelectors();
    </script>

    {{-- day 5 lunch finish --}}



    {{-- day 5 dinner start --}}

    <script>

        function initSelectors(){
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continents5_dinner') );

            //countries
            MAIN.createRelatedSelector
            ( document.querySelector('#continents5_dinner')           // from select element
                ,document.querySelector('#selectcountries5_dinner')      // to select element
                ,{                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                ,function(a,b){return a>b ? 1 : a<b ? -1 : 0;}   // sort method
            );




        }

        //create MAIN namespace
        (function(ns){ // don't pollute the global namespace

            function create(from, to, obj, srt){
                if (!from) {
                    throw CreationError('create: parameter selector [from] missing');
                }
                if (!to) {
                    throw CreationError('create: parameter related selector [to] missing');
                }
                if (!obj) {
                    throw CreationError('create: related filter definition object [obj] missing');
                }

                //retrieve all options from obj and add it
                obj.all = (function(o){
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test (o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call( from
                    ,null
                    ,to
                    ,obj
                    ,srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn,obj){
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)){
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt){
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self,{optselects:obj,optselectsall:obj.all,relatedTo:relatedto,sorter:srt || false});
                    }

                    if (!self.relatedTo){
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        ,cselect = self.relatedTo
                        ,opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i=0;i<optsfilter.length;i+=1){
                        opts[i] = new Option(optsfilter[i],i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg){
                return {name:'CreationError',message:mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function(from,to,obj,srt) {
                    try {
                        if (arguments.length<1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null,from,to,obj,srt);
                    }
                    catch(e) { console.log('createRelatedSelector ->',e.name,'\n'
                        + e.message +
                        '\ncheck parameters'); }
                }
            };
        }('MAIN'));
        //initialize
        initSelectors();
    </script>

    {{-- day 5 dinner finish --}}

    {{-- day 5 break1 start --}}

    <script>

        function initSelectors(){
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continents5_break1') );

            //countries
            MAIN.createRelatedSelector
            ( document.querySelector('#continents5_break1')           // from select element
                ,document.querySelector('#selectcountries5_break1')      // to select element
                ,{                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                ,function(a,b){return a>b ? 1 : a<b ? -1 : 0;}   // sort method
            );




        }

        //create MAIN namespace
        (function(ns){ // don't pollute the global namespace

            function create(from, to, obj, srt){
                if (!from) {
                    throw CreationError('create: parameter selector [from] missing');
                }
                if (!to) {
                    throw CreationError('create: parameter related selector [to] missing');
                }
                if (!obj) {
                    throw CreationError('create: related filter definition object [obj] missing');
                }

                //retrieve all options from obj and add it
                obj.all = (function(o){
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test (o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call( from
                    ,null
                    ,to
                    ,obj
                    ,srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn,obj){
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)){
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt){
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self,{optselects:obj,optselectsall:obj.all,relatedTo:relatedto,sorter:srt || false});
                    }

                    if (!self.relatedTo){
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        ,cselect = self.relatedTo
                        ,opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i=0;i<optsfilter.length;i+=1){
                        opts[i] = new Option(optsfilter[i],i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg){
                return {name:'CreationError',message:mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function(from,to,obj,srt) {
                    try {
                        if (arguments.length<1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null,from,to,obj,srt);
                    }
                    catch(e) { console.log('createRelatedSelector ->',e.name,'\n'
                        + e.message +
                        '\ncheck parameters'); }
                }
            };
        }('MAIN'));
        //initialize
        initSelectors();
    </script>
    {{-- day 5 break1 finish --}}


    {{-- day 5 break2 start --}}

    <script>

        function initSelectors(){
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continents5_break2') );

            //countries
            MAIN.createRelatedSelector
            ( document.querySelector('#continents5_break2')           // from select element
                ,document.querySelector('#selectcountries5_break2')      // to select element
                ,{                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                ,function(a,b){return a>b ? 1 : a<b ? -1 : 0;}   // sort method
            );




        }

        //create MAIN namespace
        (function(ns){ // don't pollute the global namespace

            function create(from, to, obj, srt){
                if (!from) {
                    throw CreationError('create: parameter selector [from] missing');
                }
                if (!to) {
                    throw CreationError('create: parameter related selector [to] missing');
                }
                if (!obj) {
                    throw CreationError('create: related filter definition object [obj] missing');
                }

                //retrieve all options from obj and add it
                obj.all = (function(o){
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test (o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call( from
                    ,null
                    ,to
                    ,obj
                    ,srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn,obj){
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)){
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt){
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self,{optselects:obj,optselectsall:obj.all,relatedTo:relatedto,sorter:srt || false});
                    }

                    if (!self.relatedTo){
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        ,cselect = self.relatedTo
                        ,opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i=0;i<optsfilter.length;i+=1){
                        opts[i] = new Option(optsfilter[i],i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg){
                return {name:'CreationError',message:mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function(from,to,obj,srt) {
                    try {
                        if (arguments.length<1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null,from,to,obj,srt);
                    }
                    catch(e) { console.log('createRelatedSelector ->',e.name,'\n'
                        + e.message +
                        '\ncheck parameters'); }
                }
            };
        }('MAIN'));
        //initialize
        initSelectors();
    </script>
    {{-- day 5 break2 finish --}}




    {{-- day 6-- }}


   {{-- day 6 breakfast start --}}
    <script>

        function initSelectors(){
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continent6') );

            //countries
            MAIN.createRelatedSelector
            ( document.querySelector('#continent6')           // from select element
                ,document.querySelector('#selectcountries6')      // to select element
                ,{                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                ,function(a,b){return a>b ? 1 : a<b ? -1 : 0;}   // sort method
            );




        }

        //create MAIN namespace
        (function(ns){ // don't pollute the global namespace

            function create(from, to, obj, srt){
                if (!from) {
                    throw CreationError('create: parameter selector [from] missing');
                }
                if (!to) {
                    throw CreationError('create: parameter related selector [to] missing');
                }
                if (!obj) {
                    throw CreationError('create: related filter definition object [obj] missing');
                }

                //retrieve all options from obj and add it
                obj.all = (function(o){
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test (o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call( from
                    ,null
                    ,to
                    ,obj
                    ,srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn,obj){
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)){
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt){
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self,{optselects:obj,optselectsall:obj.all,relatedTo:relatedto,sorter:srt || false});
                    }

                    if (!self.relatedTo){
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        ,cselect = self.relatedTo
                        ,opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i=0;i<optsfilter.length;i+=1){
                        opts[i] = new Option(optsfilter[i],i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg){
                return {name:'CreationError',message:mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function(from,to,obj,srt) {
                    try {
                        if (arguments.length<1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null,from,to,obj,srt);
                    }
                    catch(e) { console.log('createRelatedSelector ->',e.name,'\n'
                        + e.message +
                        '\ncheck parameters'); }
                }
            };
        }('MAIN'));
        //initialize
        initSelectors();
    </script>

    {{-- day 6 breakfast finish --}}

    {{-- day 6 lunch start --}}

    <script>

        function initSelectors(){
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continents6_lunch') );

            //countries
            MAIN.createRelatedSelector
            ( document.querySelector('#continents6_lunch')           // from select element
                ,document.querySelector('#selectcountries6_lunch')      // to select element
                ,{                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                ,function(a,b){return a>b ? 1 : a<b ? -1 : 0;}   // sort method
            );




        }

        //create MAIN namespace
        (function(ns){ // don't pollute the global namespace

            function create(from, to, obj, srt){
                if (!from) {
                    throw CreationError('create: parameter selector [from] missing');
                }
                if (!to) {
                    throw CreationError('create: parameter related selector [to] missing');
                }
                if (!obj) {
                    throw CreationError('create: related filter definition object [obj] missing');
                }

                //retrieve all options from obj and add it
                obj.all = (function(o){
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test (o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call( from
                    ,null
                    ,to
                    ,obj
                    ,srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn,obj){
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)){
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt){
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self,{optselects:obj,optselectsall:obj.all,relatedTo:relatedto,sorter:srt || false});
                    }

                    if (!self.relatedTo){
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        ,cselect = self.relatedTo
                        ,opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i=0;i<optsfilter.length;i+=1){
                        opts[i] = new Option(optsfilter[i],i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg){
                return {name:'CreationError',message:mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function(from,to,obj,srt) {
                    try {
                        if (arguments.length<1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null,from,to,obj,srt);
                    }
                    catch(e) { console.log('createRelatedSelector ->',e.name,'\n'
                        + e.message +
                        '\ncheck parameters'); }
                }
            };
        }('MAIN'));
        //initialize
        initSelectors();
    </script>

    {{-- day 6 lunch finish --}}



    {{-- day 6 dinner start --}}

    <script>

        function initSelectors(){
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continents6_dinner') );

            //countries
            MAIN.createRelatedSelector
            ( document.querySelector('#continents6_dinner')           // from select element
                ,document.querySelector('#selectcountries6_dinner')      // to select element
                ,{                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                ,function(a,b){return a>b ? 1 : a<b ? -1 : 0;}   // sort method
            );




        }

        //create MAIN namespace
        (function(ns){ // don't pollute the global namespace

            function create(from, to, obj, srt){
                if (!from) {
                    throw CreationError('create: parameter selector [from] missing');
                }
                if (!to) {
                    throw CreationError('create: parameter related selector [to] missing');
                }
                if (!obj) {
                    throw CreationError('create: related filter definition object [obj] missing');
                }

                //retrieve all options from obj and add it
                obj.all = (function(o){
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test (o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call( from
                    ,null
                    ,to
                    ,obj
                    ,srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn,obj){
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)){
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt){
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self,{optselects:obj,optselectsall:obj.all,relatedTo:relatedto,sorter:srt || false});
                    }

                    if (!self.relatedTo){
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        ,cselect = self.relatedTo
                        ,opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i=0;i<optsfilter.length;i+=1){
                        opts[i] = new Option(optsfilter[i],i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg){
                return {name:'CreationError',message:mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function(from,to,obj,srt) {
                    try {
                        if (arguments.length<1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null,from,to,obj,srt);
                    }
                    catch(e) { console.log('createRelatedSelector ->',e.name,'\n'
                        + e.message +
                        '\ncheck parameters'); }
                }
            };
        }('MAIN'));
        //initialize
        initSelectors();
    </script>

    {{-- day 6 dinner finish --}}

    {{-- day 6 break1 start --}}

    <script>

        function initSelectors(){
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continents6_break1') );

            //countries
            MAIN.createRelatedSelector
            ( document.querySelector('#continents6_break1')           // from select element
                ,document.querySelector('#selectcountries6_break1')      // to select element
                ,{                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                ,function(a,b){return a>b ? 1 : a<b ? -1 : 0;}   // sort method
            );




        }

        //create MAIN namespace
        (function(ns){ // don't pollute the global namespace

            function create(from, to, obj, srt){
                if (!from) {
                    throw CreationError('create: parameter selector [from] missing');
                }
                if (!to) {
                    throw CreationError('create: parameter related selector [to] missing');
                }
                if (!obj) {
                    throw CreationError('create: related filter definition object [obj] missing');
                }

                //retrieve all options from obj and add it
                obj.all = (function(o){
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test (o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call( from
                    ,null
                    ,to
                    ,obj
                    ,srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn,obj){
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)){
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt){
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self,{optselects:obj,optselectsall:obj.all,relatedTo:relatedto,sorter:srt || false});
                    }

                    if (!self.relatedTo){
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        ,cselect = self.relatedTo
                        ,opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i=0;i<optsfilter.length;i+=1){
                        opts[i] = new Option(optsfilter[i],i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg){
                return {name:'CreationError',message:mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function(from,to,obj,srt) {
                    try {
                        if (arguments.length<1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null,from,to,obj,srt);
                    }
                    catch(e) { console.log('createRelatedSelector ->',e.name,'\n'
                        + e.message +
                        '\ncheck parameters'); }
                }
            };
        }('MAIN'));
        //initialize
        initSelectors();
    </script>
    {{-- day 6 break1 finish --}}


    {{-- day 6 break2 start --}}

    <script>

        function initSelectors(){
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continents6_break2') );

            //countries
            MAIN.createRelatedSelector
            ( document.querySelector('#continents6_break2')           // from select element
                ,document.querySelector('#selectcountries6_break2')      // to select element
                ,{                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                ,function(a,b){return a>b ? 1 : a<b ? -1 : 0;}   // sort method
            );




        }

        //create MAIN namespace
        (function(ns){ // don't pollute the global namespace

            function create(from, to, obj, srt){
                if (!from) {
                    throw CreationError('create: parameter selector [from] missing');
                }
                if (!to) {
                    throw CreationError('create: parameter related selector [to] missing');
                }
                if (!obj) {
                    throw CreationError('create: related filter definition object [obj] missing');
                }

                //retrieve all options from obj and add it
                obj.all = (function(o){
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test (o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call( from
                    ,null
                    ,to
                    ,obj
                    ,srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn,obj){
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)){
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt){
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self,{optselects:obj,optselectsall:obj.all,relatedTo:relatedto,sorter:srt || false});
                    }

                    if (!self.relatedTo){
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        ,cselect = self.relatedTo
                        ,opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i=0;i<optsfilter.length;i+=1){
                        opts[i] = new Option(optsfilter[i],i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg){
                return {name:'CreationError',message:mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function(from,to,obj,srt) {
                    try {
                        if (arguments.length<1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null,from,to,obj,srt);
                    }
                    catch(e) { console.log('createRelatedSelector ->',e.name,'\n'
                        + e.message +
                        '\ncheck parameters'); }
                }
            };
        }('MAIN'));
        //initialize
        initSelectors();
    </script>
    {{-- day 6 break2 finish --}}





    {{-- day 7-- }}


 {{-- day 7 breakfast start --}}
    <script>

        function initSelectors(){
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continent7') );

            //countries
            MAIN.createRelatedSelector
            ( document.querySelector('#continent7')           // from select element
                ,document.querySelector('#selectcountries7')      // to select element
                ,{                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                ,function(a,b){return a>b ? 1 : a<b ? -1 : 0;}   // sort method
            );




        }

        //create MAIN namespace
        (function(ns){ // don't pollute the global namespace

            function create(from, to, obj, srt){
                if (!from) {
                    throw CreationError('create: parameter selector [from] missing');
                }
                if (!to) {
                    throw CreationError('create: parameter related selector [to] missing');
                }
                if (!obj) {
                    throw CreationError('create: related filter definition object [obj] missing');
                }

                //retrieve all options from obj and add it
                obj.all = (function(o){
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test (o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call( from
                    ,null
                    ,to
                    ,obj
                    ,srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn,obj){
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)){
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt){
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self,{optselects:obj,optselectsall:obj.all,relatedTo:relatedto,sorter:srt || false});
                    }

                    if (!self.relatedTo){
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        ,cselect = self.relatedTo
                        ,opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i=0;i<optsfilter.length;i+=1){
                        opts[i] = new Option(optsfilter[i],i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg){
                return {name:'CreationError',message:mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function(from,to,obj,srt) {
                    try {
                        if (arguments.length<1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null,from,to,obj,srt);
                    }
                    catch(e) { console.log('createRelatedSelector ->',e.name,'\n'
                        + e.message +
                        '\ncheck parameters'); }
                }
            };
        }('MAIN'));
        //initialize
        initSelectors();
    </script>

    {{-- day 7  breakfast finish --}}

    {{-- day 7 lunch start --}}

    <script>

        function initSelectors(){
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continents7_lunch') );

            //countries
            MAIN.createRelatedSelector
            ( document.querySelector('#continents7_lunch')           // from select element
                ,document.querySelector('#selectcountries7_lunch')      // to select element
                ,{                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                ,function(a,b){return a>b ? 1 : a<b ? -1 : 0;}   // sort method
            );




        }

        //create MAIN namespace
        (function(ns){ // don't pollute the global namespace

            function create(from, to, obj, srt){
                if (!from) {
                    throw CreationError('create: parameter selector [from] missing');
                }
                if (!to) {
                    throw CreationError('create: parameter related selector [to] missing');
                }
                if (!obj) {
                    throw CreationError('create: related filter definition object [obj] missing');
                }

                //retrieve all options from obj and add it
                obj.all = (function(o){
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test (o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call( from
                    ,null
                    ,to
                    ,obj
                    ,srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn,obj){
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)){
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt){
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self,{optselects:obj,optselectsall:obj.all,relatedTo:relatedto,sorter:srt || false});
                    }

                    if (!self.relatedTo){
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        ,cselect = self.relatedTo
                        ,opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i=0;i<optsfilter.length;i+=1){
                        opts[i] = new Option(optsfilter[i],i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg){
                return {name:'CreationError',message:mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function(from,to,obj,srt) {
                    try {
                        if (arguments.length<1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null,from,to,obj,srt);
                    }
                    catch(e) { console.log('createRelatedSelector ->',e.name,'\n'
                        + e.message +
                        '\ncheck parameters'); }
                }
            };
        }('MAIN'));
        //initialize
        initSelectors();
    </script>

    {{-- day 7 lunch finish --}}



    {{-- day 7 dinner start --}}

    <script>

        function initSelectors(){
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continents7_dinner') );

            //countries
            MAIN.createRelatedSelector
            ( document.querySelector('#continents7_dinner')           // from select element
                ,document.querySelector('#selectcountries7_dinner')      // to select element
                ,{                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                ,function(a,b){return a>b ? 1 : a<b ? -1 : 0;}   // sort method
            );




        }

        //create MAIN namespace
        (function(ns){ // don't pollute the global namespace

            function create(from, to, obj, srt){
                if (!from) {
                    throw CreationError('create: parameter selector [from] missing');
                }
                if (!to) {
                    throw CreationError('create: parameter related selector [to] missing');
                }
                if (!obj) {
                    throw CreationError('create: related filter definition object [obj] missing');
                }

                //retrieve all options from obj and add it
                obj.all = (function(o){
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test (o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call( from
                    ,null
                    ,to
                    ,obj
                    ,srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn,obj){
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)){
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt){
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self,{optselects:obj,optselectsall:obj.all,relatedTo:relatedto,sorter:srt || false});
                    }

                    if (!self.relatedTo){
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        ,cselect = self.relatedTo
                        ,opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i=0;i<optsfilter.length;i+=1){
                        opts[i] = new Option(optsfilter[i],i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg){
                return {name:'CreationError',message:mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function(from,to,obj,srt) {
                    try {
                        if (arguments.length<1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null,from,to,obj,srt);
                    }
                    catch(e) { console.log('createRelatedSelector ->',e.name,'\n'
                        + e.message +
                        '\ncheck parameters'); }
                }
            };
        }('MAIN'));
        //initialize
        initSelectors();
    </script>

    {{-- day 7 dinner finish --}}

    {{-- day 7 break1 start --}}

    <script>

        function initSelectors(){
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continents7_break1') );

            //countries
            MAIN.createRelatedSelector
            ( document.querySelector('#continents7_break1')           // from select element
                ,document.querySelector('#selectcountries7_break1')      // to select element
                ,{                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                ,function(a,b){return a>b ? 1 : a<b ? -1 : 0;}   // sort method
            );




        }

        //create MAIN namespace
        (function(ns){ // don't pollute the global namespace

            function create(from, to, obj, srt){
                if (!from) {
                    throw CreationError('create: parameter selector [from] missing');
                }
                if (!to) {
                    throw CreationError('create: parameter related selector [to] missing');
                }
                if (!obj) {
                    throw CreationError('create: related filter definition object [obj] missing');
                }

                //retrieve all options from obj and add it
                obj.all = (function(o){
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test (o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call( from
                    ,null
                    ,to
                    ,obj
                    ,srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn,obj){
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)){
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt){
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self,{optselects:obj,optselectsall:obj.all,relatedTo:relatedto,sorter:srt || false});
                    }

                    if (!self.relatedTo){
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        ,cselect = self.relatedTo
                        ,opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i=0;i<optsfilter.length;i+=1){
                        opts[i] = new Option(optsfilter[i],i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg){
                return {name:'CreationError',message:mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function(from,to,obj,srt) {
                    try {
                        if (arguments.length<1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null,from,to,obj,srt);
                    }
                    catch(e) { console.log('createRelatedSelector ->',e.name,'\n'
                        + e.message +
                        '\ncheck parameters'); }
                }
            };
        }('MAIN'));
        //initialize
        initSelectors();
    </script>
    {{-- day 7 break1 finish --}}


    {{-- day 7 break2 start --}}

    <script>

        function initSelectors(){
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continents7_break2') );

            //countries
            MAIN.createRelatedSelector
            ( document.querySelector('#continents7_break2')           // from select element
                ,document.querySelector('#selectcountries7_break2')      // to select element
                ,{                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                ,function(a,b){return a>b ? 1 : a<b ? -1 : 0;}   // sort method
            );




        }

        //create MAIN namespace
        (function(ns){ // don't pollute the global namespace

            function create(from, to, obj, srt){
                if (!from) {
                    throw CreationError('create: parameter selector [from] missing');
                }
                if (!to) {
                    throw CreationError('create: parameter related selector [to] missing');
                }
                if (!obj) {
                    throw CreationError('create: related filter definition object [obj] missing');
                }

                //retrieve all options from obj and add it
                obj.all = (function(o){
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test (o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call( from
                    ,null
                    ,to
                    ,obj
                    ,srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn,obj){
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)){
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt){
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self,{optselects:obj,optselectsall:obj.all,relatedTo:relatedto,sorter:srt || false});
                    }

                    if (!self.relatedTo){
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        ,cselect = self.relatedTo
                        ,opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i=0;i<optsfilter.length;i+=1){
                        opts[i] = new Option(optsfilter[i],i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg){
                return {name:'CreationError',message:mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function(from,to,obj,srt) {
                    try {
                        if (arguments.length<1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null,from,to,obj,srt);
                    }
                    catch(e) { console.log('createRelatedSelector ->',e.name,'\n'
                        + e.message +
                        '\ncheck parameters'); }
                }
            };
        }('MAIN'));
        //initialize
        initSelectors();
    </script>
    {{-- day 7 break2 finish --}}


    <script src="{{url('/')}}/js/form.js"></script>


@stop
