@extends('dashboard.master')

@section('content')

    <link rel="stylesheet" href="{{url('/')}}/vendors/fm.tagator.jquery.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script src="{{url('/')}}/vendors/fm.tagator.jquery.js"></script>
    <script src="//cdn.ckeditor.com/4.9.0/standard/ckeditor.js"></script>




    <section class="system">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form   action="/system"  method="post" class="form-horizontal form-label-left" >
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
                                           value="{{old('system_name')}}">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="system_desc"> وصف النظام


                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea name="system_desc"  cols="30" rows="10" id="system_desc" class="form-control">
                                {{old('system_desc')}}
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

                                    <select id="continents">
                                        <option value = "0">all</option>
                                        <option value="1">carbs</option>
                                        <option value="2">Fats</option>
                                        <option value="3">proteins</option>


                                    </select>
                                    <select id="selectcountries"></select>

                                    <select name="gmValue" id="gmValue" >
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

                                    <button type="button" class="btn btn-success" onclick="getData()">أضف</button>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day1_breakfast">الافطار
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day1_breakfast" name="day1_breakfast"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>


                                <br><br><br>



                                <div class="form-group text-center">

                                    <select id="continents1_break1">
                                        <option value = "0">all</option>
                                        <option value="1">carbs</option>
                                        <option value="2">Fats</option>
                                        <option value="3">proteins</option>


                                    </select>
                                    <select id="selectcountries1_break1"></select>

                                    <select name="gmValue" id="gmValue1_break1" >
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

                                    <button type="button" class="btn btn-success" onclick="getData1_break1()">أضف</button>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day1_break1">وجبة خفيفة
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day1_break1" name="day1_break1"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>

                                <br><br><br>



                                <div class="form-group text-center">

                                    <select id="continents1_lunch">
                                        <option value = "0">all</option>
                                        <option value="1">carbs</option>
                                        <option value="2">Fats</option>
                                        <option value="3">proteins</option>


                                    </select>
                                    <select id="selectcountries1_lunch"></select>

                                    <select name="gmValue" id="gmValue1_lunch" >
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

                                    <button type="button" class="btn btn-success" onclick="getData1_lunch()">أضف</button>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day1_lunch">الغداء
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day1_lunch" name="day1_lunch"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>


                                <br><br><br>



                                <div class="form-group text-center">

                                    <select id="continents1_break2">
                                        <option value = "0">all</option>
                                        <option value="1">carbs</option>
                                        <option value="2">Fats</option>
                                        <option value="3">proteins</option>


                                    </select>
                                    <select id="selectcountries1_break2"></select>

                                    <select name="gmValue" id="gmValue1_break2" >
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

                                    <button type="button" class="btn btn-success" onclick="getData1_break2()">أضف</button>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day1_break2">وجبة خفيفة
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day1_break2" name="day1_break2"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>


                                <br><br><br>



                                <div class="form-group text-center">

                                    <select id="continents1_dinner">
                                        <option value = "0">all</option>
                                        <option value="1">carbs</option>
                                        <option value="2">Fats</option>
                                        <option value="3">proteins</option>


                                    </select>
                                    <select id="selectcountries1_dinner"></select>

                                    <select name="gmValue" id="gmValue1_dinner" >
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

                                    <button type="button" class="btn btn-success" onclick="getData1_dinner()">أضف</button>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day1_dinner">العشاء
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day1_dinner" name="day1_dinner"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>

                                <br><br><br>

                                <div class="form-group text-center">

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day1_dinner">ملاحظات
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day1_notes" name="day1_notes"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>






                                <br>
                                <br>
                                <br>

                                <div class="col-lg-12">

                                    <h2 class="text-center">مجموع السعرات الحرارية لليوم الاول</h2>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <input type="text" id="carbSum" class="form-control"
                                               name="carbSum"
                                               placeholder="مجموع الكربهيدرات" readonly>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <input type="text" id="fatsSum" class="form-control"
                                               name="fatsSum"
                                               placeholder="مجموع الدهون" readonly>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
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

                                <div class="text-center">

                                    <h2 class="text-center">اليوم الثانى</h2>



                                </div>




                                <div class="form-group text-center">

                                    <select id="continent2">
                                        <option value = "0">all</option>
                                        <option value="1">carbs</option>
                                        <option value="2">Fats</option>
                                        <option value="3">proteins</option>


                                    </select>
                                    <select id="selectcountries2"></select>

                                    <select name="gmValue" id="gmValue2" >
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

                                    <button type="button" class="btn btn-success" onclick="getData2()">أضف</button>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day2_breakfast">الافطار
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day2_breakfast" name="day2_breakfast"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>


                                <br><br><br>



                                <div class="form-group text-center">

                                    <select id="continents2_break1">
                                        <option value = "0">all</option>
                                        <option value="1">carbs</option>
                                        <option value="2">Fats</option>
                                        <option value="3">proteins</option>


                                    </select>
                                    <select id="selectcountries2_break1"></select>

                                    <select name="gmValue" id="gmValue2_break1" >
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

                                    <button type="button" class="btn btn-success" onclick="getData2_break1()">أضف</button>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day2_break1">وجبة خفيفة
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day2_break1" name="day2_break1"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>




                                </div>

                                <br><br><br>



                                <div class="form-group text-center">

                                    <select id="continents2_lunch">
                                        <option value = "0">all</option>
                                        <option value="1">carbs</option>
                                        <option value="2">Fats</option>
                                        <option value="3">proteins</option>


                                    </select>
                                    <select id="selectcountries2_lunch"></select>

                                    <select name="gmValue" id="gmValue2_lunch" >
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

                                    <button type="button" class="btn btn-success" onclick="getData2_lunch()">أضف</button>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day2_lunch">الغداء
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day2_lunch" name="day2_lunch"
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
                                               placeholder="مجموع الكربهيدرات" readonly>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <input type="text" id="fatsSum2" class="form-control"
                                               name="fatsSum2"
                                               placeholder="مجموع الدهون" readonly>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <input type="text" id="proteinSum2" class="form-control"
                                               name="proteinSum2"
                                               placeholder="مجموع البروتينات" readonly>
                                    </div>
                                </div>





                            </div>
                        </div>


                        <button class="accordion" type="button">اليوم الثالث</button>
                        <div class="panel">
                            <div class="form-group third_day">

                                <div class="text-center">

                                    <h2 class="text-center">اليوم الثالث</h2>



                                </div>




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
                                               placeholder="مجموع الكربهيدرات" readonly>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <input type="text" id="fatsSum3" class="form-control"
                                               name="fatsSum3"
                                               placeholder="مجموع الدهون" readonly>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <input type="text" id="proteinSum3" class="form-control"
                                               name="proteinSum3"
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
    <script>

        function initSelectors(){
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continents') );

            //countries
            MAIN.createRelatedSelector
            ( document.querySelector('#continents')           // from select element
                ,document.querySelector('#selectcountries')      // to select element
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

    {{-- day 1 breakfast start --}}

    {{-- day 1 lunch start --}}

    <script>

        function initSelectors(){
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continents1_lunch') );

            //countries
            MAIN.createRelatedSelector
            ( document.querySelector('#continents1_lunch')           // from select element
                ,document.querySelector('#selectcountries1_lunch')      // to select element
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

    {{-- day 1 lunch finish --}}



    {{-- day 1 dinner start --}}

    <script>

        function initSelectors(){
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continents1_dinner') );

            //countries
            MAIN.createRelatedSelector
            ( document.querySelector('#continents1_dinner')           // from select element
                ,document.querySelector('#selectcountries1_dinner')      // to select element
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

    {{-- day 1 dinner finish --}}

    {{-- day 1 break1 start --}}

    <script>

        function initSelectors(){
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continents1_break1') );

            //countries
            MAIN.createRelatedSelector
            ( document.querySelector('#continents1_break1')           // from select element
                ,document.querySelector('#selectcountries1_break1')      // to select element
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
    {{-- day 1 break1 finish --}}


    {{-- day 1 break2 start --}}

    <script>

        function initSelectors(){
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continents1_break2') );

            //countries
            MAIN.createRelatedSelector
            ( document.querySelector('#continents1_break2')           // from select element
                ,document.querySelector('#selectcountries1_break2')      // to select element
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
    {{-- day 1 break2 finish --}}




    {{-- day 2 -- }}


    {{-- day 2 breakfast start --}}
    <script>

        function initSelectors(){
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continent2') );

            //countries
            MAIN.createRelatedSelector
            ( document.querySelector('#continent2')           // from select element
                ,document.querySelector('#selectcountries2')      // to select element
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
   {{-- <script>
        function getData() {

            var x =  $("#gmValue option:selected").val();
            var y = $("#selectcountries option:selected").text();
            var t = y.split(/[ ,]+/);

            if(t[4] ==1)
            {
              var value = parseFloat($('#carbSum').val()) ;

             if(value)
             {
                 value +=parseFloat(t[2]*x);
                 $('#carbSum').val(value);
             //    $('#day1_breakfast').focus();



                 var current =  $('#day1_breakfast').text();
                 var currentVal =$('#day1_breakfast').val();
                 $('#day1_breakfast').val(" ");
                 $('#day1_breakfast').text(" ");
                 $('#day1_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                 $('#day1_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

             }

             else
             {
                 $('#carbSum').val(parseFloat(t[2])*x);

                 var current =  $('#day1_breakfast').text();
                 var currentVal =$('#day1_breakfast').val();
                 $('#day1_breakfast').val(" ");
                 $('#day1_breakfast').text(" ");
                 $('#day1_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                 $('#day1_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);


             }

            }


            else if(t[4] ==2)
            {
                var value = parseFloat($('#fatsSum').val()) ;

                if(value)
                {
                    value +=parseFloat(t[2]*x);
                    $('#fatsSum').val(value);
                    var current =  $('#day1_breakfast').text();
                    var currentVal =$('#day1_breakfast').val();
                    $('#day1_breakfast').val(" ");
                    $('#day1_breakfast').text(" ");
                    $('#day1_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day1_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

                }else
                {
                    $('#fatsSum').val(parseFloat(t[2])*x);
                    var current =  $('#day1_breakfast').text();
                    var currentVal =$('#day1_breakfast').val();
                    $('#day1_breakfast').val(" ");
                    $('#day1_breakfast').text(" ");
                    $('#day1_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day1_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
                }

            }

            else
            {
                var value = parseFloat($('#proteinSum').val()) ;

                if(value)
                {
                    value +=parseFloat(t[2]*x);
                    $('#proteinSum').val(value);

                    var current =  $('#day1_breakfast').text();
                    var currentVal =$('#day1_breakfast').val();
                    $('#day1_breakfast').val(" ");
                    $('#day1_breakfast').text(" ");
                    $('#day1_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day1_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

                }else
                {
                    $('#proteinSum').val(parseFloat(t[2])*x);
                    var current =  $('#day1_breakfast').text();
                    var currentVal =$('#day1_breakfast').val();
                    $('#day1_breakfast').val(" ");
                    $('#day1_breakfast').text(" ");
                    $('#day1_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day1_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
                }
            }



        }

        function getData1_lunch() {

            var x =  $("#gmValue1_lunch option:selected").val();
            var y = $("#selectcountries1_lunch option:selected").text();
            var t = y.split(/[ ,]+/);

            if(t[4] ==1)
            {
                var value = parseFloat($('#carbSum').val()) ;

                if(value)
                {
                    value +=parseFloat(t[2]*x);
                    $('#carbSum').val(value);

                    var current =  $('#day1_lunch').text();
                    var currentVal =$('#day1_lunch').val();
                    $('#day1_lunch').val(" ");
                    $('#day1_lunch').text(" ");
                    $('#day1_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day1_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

                }else
                {
                    $('#carbSum').val(parseFloat(t[2])*x);

                    var current =  $('#day1_lunch').text();
                    var currentVal =$('#day1_lunch').val();
                    $('#day1_lunch').val(" ");
                    $('#day1_lunch').text(" ");
                    $('#day1_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day1_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

                }

            }else if(t[4] ==2)
            {
                var value = parseFloat($('#fatsSum').val()) ;

                if(value)
                {
                    value +=parseFloat(t[2]*x);
                    $('#fatsSum').val(value);
                    var current =  $('#day1_lunch').text();
                    var currentVal =$('#day1_lunch').val();
                    $('#day1_lunch').val(" ");
                    $('#day1_lunch').text(" ");
                    $('#day1_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day1_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

                }else
                {
                    $('#fatsSum').val(parseFloat(t[2])*x);
                    var current =  $('#day1_lunch').text();
                    var currentVal =$('#day1_lunch').val();
                    $('#day1_lunch').val(" ");
                    $('#day1_lunch').text(" ");
                    $('#day1_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day1_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
                }

            }else
            {
                var value = parseFloat($('#proteinSum').val()) ;

                if(value)
                {
                    value +=parseFloat(t[2]*x);
                    $('#proteinSum').val(value);
                    var current =  $('#day1_lunch').text();
                    var currentVal =$('#day1_lunch').val();
                    $('#day1_lunch').val(" ");
                    $('#day1_lunch').text(" ");
                    $('#day1_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day1_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

                }else
                {
                    $('#proteinSum').val(parseFloat(t[2])*x);
                    var current =  $('#day1_lunch').text();
                    var currentVal =$('#day1_lunch').val();
                    $('#day1_lunch').val(" ");
                    $('#day1_lunch').text(" ");
                    $('#day1_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day1_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
                }
            }



        }

        function getData1_dinner() {

            var x =  $("#gmValue1_dinner option:selected").val();
            var y = $("#selectcountries1_dinner option:selected").text();
            var t = y.split(/[ ,]+/);

            if(t[4] ==1)
            {
                var value = parseFloat($('#carbSum').val()) ;

                if(value)
                {
                    value +=parseFloat(t[2]*x);
                    $('#carbSum').val(value);

                    var current =  $('#day1_dinner').text();
                    var currentVal =$('#day1_dinner').val();
                    $('#day1_dinner').val(" ");
                    $('#day1_dinner').text(" ");
                    $('#day1_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day1_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

                }else
                {
                    $('#carbSum').val(parseFloat(t[2])*x);

                    var current =  $('#day1_dinner').text();
                    var currentVal =$('#day1_dinner').val();
                    $('#day1_dinner').val(" ");
                    $('#day1_dinner').text(" ");
                    $('#day1_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day1_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

                }

            }else if(t[4] ==2)
            {
                var value = parseFloat($('#fatsSum').val()) ;

                if(value)
                {
                    value +=parseFloat(t[2]*x);
                    $('#fatsSum').val(value);
                    var current =  $('#day1_dinner').text();
                    var currentVal =$('#day1_dinner').val();
                    $('#day1_dinner').val(" ");
                    $('#day1_dinner').text(" ");
                    $('#day1_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day1_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

                }else
                {
                    $('#fatsSum').val(parseFloat(t[2])*x);
                    var current =  $('#day1_dinner').text();
                    var currentVal =$('#day1_dinner').val();
                    $('#day1_dinner').val(" ");
                    $('#day1_dinner').text(" ");
                    $('#day1_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day1_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
                }

            }else
            {
                var value = parseFloat($('#proteinSum').val()) ;

                if(value)
                {
                    value +=parseFloat(t[2]*x);
                    $('#proteinSum').val(value);
                    var current =  $('#day1_dinner').text();
                    var currentVal =$('#day1_dinner').val();
                    $('#day1_dinner').val(" ");
                    $('#day1_dinner').text(" ");
                    $('#day1_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day1_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

                }else
                {
                    $('#proteinSum').val(parseFloat(t[2])*x);
                    var current =  $('#day1_dinner').text();
                    var currentVal =$('#day1_dinner').val();
                    $('#day1_dinner').val(" ");
                    $('#day1_dinner').text(" ");
                    $('#day1_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day1_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
                }
            }



        }

        function getData1_break1() {

            var x =  $("#gmValue1_break1 option:selected").val();
            var y = $("#selectcountries1_break1 option:selected").text();
            var t = y.split(/[ ,]+/);

            if(t[4] ==1)
            {
                var value = parseFloat($('#carbSum').val()) ;

                if(value)
                {
                    value +=parseFloat(t[2]*x);
                    $('#carbSum').val(value);

                    var current =  $('#day1_break1').text();
                    var currentVal =$('#day1_break1').val();
                    $('#day1_break1').val(" ");
                    $('#day1_break1').text(" ");
                    $('#day1_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day1_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

                }else
                {
                    $('#carbSum').val(parseFloat(t[2])*x);

                    var current =  $('#day1_break1').text();
                    var currentVal =$('#day1_break1').val();
                    $('#day1_break1').val(" ");
                    $('#day1_break1').text(" ");
                    $('#day1_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day1_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

                }

            }else if(t[4] ==2)
            {
                var value = parseFloat($('#fatsSum').val()) ;

                if(value)
                {
                    value +=parseFloat(t[2]*x);
                    $('#fatsSum').val(value);
                    var current =  $('#day1_break1').text();
                    var currentVal =$('#day1_break1').val();
                    $('#day1_break1').val(" ");
                    $('#day1_break1').text(" ");
                    $('#day1_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day1_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

                }else
                {
                    $('#fatsSum').val(parseFloat(t[2])*x);
                    var current =  $('#day1_break1').text();
                    var currentVal =$('#day1_break1').val();
                    $('#day1_break1').val(" ");
                    $('#day1_break1').text(" ");
                    $('#day1_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day1_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
                }

            }else
            {
                var value = parseFloat($('#proteinSum').val()) ;

                if(value)
                {
                    value +=parseFloat(t[2]*x);
                    $('#proteinSum').val(value);
                    var current =  $('#day1_break1').text();
                    var currentVal =$('#day1_break1').val();
                    $('#day1_break1').val(" ");
                    $('#day1_break1').text(" ");
                    $('#day1_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day1_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

                }else
                {
                    $('#proteinSum').val(parseFloat(t[2])*x);
                    var current =  $('#day1_break1').text();
                    var currentVal =$('#day1_break1').val();
                    $('#day1_break1').val(" ");
                    $('#day1_break1').text(" ");
                    $('#day1_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day1_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
                }
            }



        }

        function getData1_break2() {

            var x =  $("#gmValue1_break2 option:selected").val();
            var y = $("#selectcountries1_break2 option:selected").text();
            var t = y.split(/[ ,]+/);

            if(t[4] ==1)
            {
                var value = parseFloat($('#carbSum').val()) ;

                if(value)
                {
                    value +=parseFloat(t[2]*x);
                    $('#carbSum').val(value);

                    var current =  $('#day1_break2').text();
                    var currentVal =$('#day1_break2').val();
                    $('#day1_break2').val(" ");
                    $('#day1_break2').text(" ");
                    $('#day1_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day1_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

                }else
                {
                    $('#carbSum').val(parseFloat(t[2])*x);

                    var current =  $('#day1_break2').text();
                    var currentVal =$('#day1_break2').val();
                    $('#day1_break2').val(" ");
                    $('#day1_break2').text(" ");
                    $('#day1_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day1_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

                }

            }else if(t[4] ==2)
            {
                var value = parseFloat($('#fatsSum').val()) ;

                if(value)
                {
                    value +=parseFloat(t[2]*x);
                    $('#fatsSum').val(value);
                    var current =  $('#day1_break2').text();
                    var currentVal =$('#day1_break2').val();
                    $('#day1_break2').val(" ");
                    $('#day1_break2').text(" ");
                    $('#day1_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day1_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

                }else
                {
                    $('#fatsSum').val(parseFloat(t[2])*x);
                    var current =  $('#day1_break2').text();
                    var currentVal =$('#day1_break2').val();
                    $('#day1_break2').val(" ");
                    $('#day1_break2').text(" ");
                    $('#day1_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day1_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
                }

            }else
            {
                var value = parseFloat($('#proteinSum').val()) ;

                if(value)
                {
                    value +=parseFloat(t[2]*x);
                    $('#proteinSum').val(value);
                    var current =  $('#day1_break2').text();
                    var currentVal =$('#day1_break2').val();
                    $('#day1_break2').val(" ");
                    $('#day1_break2').text(" ");
                    $('#day1_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day1_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

                }else
                {
                    $('#proteinSum').val(parseFloat(t[2])*x);
                    var current =  $('#day1_break2').text();
                    var currentVal =$('#day1_break2').val();
                    $('#day1_break2').val(" ");
                    $('#day1_break2').text(" ");
                    $('#day1_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day1_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
                }
            }



        }


        // second day


        function getData2() {

            var x =  $("#gmValue2 option:selected").val();
            var y = $("#selectcountries2 option:selected").text();
            var t = y.split(/[ ,]+/);

            if(t[4] ==1)
            {
                var value = parseFloat($('#carbSum2').val()) ;

                if(value)
                {
                    value +=parseFloat(t[2]*x);
                    $('#carbSum2').val(value);
                    //    $('#day1_breakfast').focus();



                    var current =  $('#day2_breakfast').text();
                    var currentVal =$('#day2_breakfast').val();
                    $('#day2_breakfast').val(" ");
                    $('#day2_breakfast').text(" ");
                    $('#day2_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day2_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

                }

                else
                {
                    $('#carbSum2').val(parseFloat(t[2])*x);

                    var current =  $('#day2_breakfast').text();
                    var currentVal =$('#day2_breakfast').val();
                    $('#day2_breakfast').val(" ");
                    $('#day2_breakfast').text(" ");
                    $('#day2_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day2_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);


                }

            }


            else if(t[4] ==2)
            {
                var value = parseFloat($('#fatsSum2').val()) ;

                if(value)
                {
                    value +=parseFloat(t[2]*x);
                    $('#fatsSum2').val(value);
                    var current =  $('#day2_breakfast').text();
                    var currentVal =$('#day2_breakfast').val();
                    $('#day2_breakfast').val(" ");
                    $('#day2_breakfast').text(" ");
                    $('#day2_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day2_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

                }else
                {
                    $('#fatsSum2').val(parseFloat(t[2])*x);
                    var current =  $('#day1_breakfast').text();
                    var currentVal =$('#day1_breakfast').val();
                    $('#day2_breakfast').val(" ");
                    $('#day2_breakfast').text(" ");
                    $('#day2_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day2_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
                }

            }

            else
            {
                var value = parseFloat($('#proteinSum2').val()) ;

                if(value)
                {
                    value +=parseFloat(t[2]*x);
                    $('#proteinSum2').val(value);

                    var current =  $('#day2_breakfast').text();
                    var currentVal =$('#day2_breakfast').val();
                    $('#day2_breakfast').val(" ");
                    $('#day2_breakfast').text(" ");
                    $('#day2_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day2_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

                }else
                {
                    $('#proteinSum2').val(parseFloat(t[2])*x);
                    var current =  $('#day2_breakfast').text();
                    var currentVal =$('#day2_breakfast').val();
                    $('#day2_breakfast').val(" ");
                    $('#day2_breakfast').text(" ");
                    $('#day2_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day2_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
                }
            }



        }

        function getData2_lunch() {

            var x =  $("#gmValue2_lunch option:selected").val();
            var y = $("#selectcountries2_lunch option:selected").text();
            var t = y.split(/[ ,]+/);

            if(t[4] ==1)
            {
                var value = parseFloat($('#carbSum2').val()) ;

                if(value)
                {
                    value +=parseFloat(t[2]*x);
                    $('#carbSum').val(value);

                    var current =  $('#day2_lunch').text();
                    var currentVal =$('#day2_lunch').val();
                    $('#day2_lunch').val(" ");
                    $('#day2_lunch').text(" ");
                    $('#day2_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day2_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

                }else
                {
                    $('#carbSum2').val(parseFloat(t[2])*x);

                    var current =  $('#day2_lunch').text();
                    var currentVal =$('#day2_lunch').val();
                    $('#day2_lunch').val(" ");
                    $('#day2_lunch').text(" ");
                    $('#day2_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day2_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

                }

            }else if(t[4] ==2)
            {
                var value = parseFloat($('#fatsSum2').val()) ;

                if(value)
                {
                    value +=parseFloat(t[2]*x);
                    $('#fatsSum2').val(value);
                    var current =  $('#day2_lunch').text();
                    var currentVal =$('#day2_lunch').val();
                    $('#day2_lunch').val(" ");
                    $('#day2_lunch').text(" ");
                    $('#day2_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day2_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

                }else
                {
                    $('#fatsSum2').val(parseFloat(t[2])*x);
                    var current =  $('#day2_lunch').text();
                    var currentVal =$('#day2_lunch').val();
                    $('#day2_lunch').val(" ");
                    $('#day2_lunch').text(" ");
                    $('#day2_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day2_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
                }

            }else
            {
                var value = parseFloat($('#proteinSum2').val()) ;

                if(value)
                {
                    value +=parseFloat(t[2]*x);
                    $('#proteinSum2').val(value);
                    var current =  $('#day2_lunch').text();
                    var currentVal =$('#day2_lunch').val();
                    $('#day2_lunch').val(" ");
                    $('#day2_lunch').text(" ");
                    $('#day2_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day2_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

                }else
                {
                    $('#proteinSum2').val(parseFloat(t[2])*x);
                    var current =  $('#day2_lunch').text();
                    var currentVal =$('#day2_lunch').val();
                    $('#day2_lunch').val(" ");
                    $('#day2_lunch').text(" ");
                    $('#day2_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day2_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
                }
            }



        }

        function getData2_dinner() {

            var x =  $("#gmValue2_dinner option:selected").val();
            var y = $("#selectcountries2_dinner option:selected").text();
            var t = y.split(/[ ,]+/);

            if(t[4] ==1)
            {
                var value = parseFloat($('#carbSum2').val()) ;

                if(value)
                {
                    value +=parseFloat(t[2]*x);
                    $('#carbSum2').val(value);

                    var current =  $('#day2_dinner').text();
                    var currentVal =$('#day2_dinner').val();
                    $('#day2_dinner').val(" ");
                    $('#day2_dinner').text(" ");
                    $('#day2_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day2_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

                }else
                {
                    $('#carbSum2').val(parseFloat(t[2])*x);

                    var current =  $('#day2_dinner').text();
                    var currentVal =$('#day2_dinner').val();
                    $('#day2_dinner').val(" ");
                    $('#day2_dinner').text(" ");
                    $('#day2_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day2_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

                }

            }else if(t[4] ==2)
            {
                var value = parseFloat($('#fatsSum2').val()) ;

                if(value)
                {
                    value +=parseFloat(t[2]*x);
                    $('#fatsSum2').val(value);
                    var current =  $('#day2_dinner').text();
                    var currentVal =$('#day2_dinner').val();
                    $('#day2_dinner').val(" ");
                    $('#day2_dinner').text(" ");
                    $('#day2_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day2_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

                }else
                {
                    $('#fatsSum2').val(parseFloat(t[2])*x);
                    var current =  $('#day2_dinner').text();
                    var currentVal =$('#day2_dinner').val();
                    $('#day2_dinner').val(" ");
                    $('#day2_dinner').text(" ");
                    $('#day2_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day2_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
                }

            }else
            {
                var value = parseFloat($('#proteinSum2').val()) ;

                if(value)
                {
                    value +=parseFloat(t[2]*x);
                    $('#proteinSum2').val(value);
                    var current =  $('#day2_dinner').text();
                    var currentVal =$('#day2_dinner').val();
                    $('#day2_dinner').val(" ");
                    $('#day2_dinner').text(" ");
                    $('#day2_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day2_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

                }else
                {
                    $('#proteinSum2').val(parseFloat(t[2])*x);
                    var current =  $('#day2_dinner').text();
                    var currentVal =$('#day2_dinner').val();
                    $('#day2_dinner').val(" ");
                    $('#day2_dinner').text(" ");
                    $('#day2_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day2_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
                }
            }



        }

        function getData2_break1() {

            var x =  $("#gmValue2_break1 option:selected").val();
            var y = $("#selectcountries2_break1 option:selected").text();
            var t = y.split(/[ ,]+/);

            if(t[4] ==1)
            {
                var value = parseFloat($('#carbSum2').val()) ;

                if(value)
                {
                    value +=parseFloat(t[2]*x);
                    $('#carbSum2').val(value);

                    var current =  $('#day2_break1').text();
                    var currentVal =$('#day2_break1').val();
                    $('#day2_break1').val(" ");
                    $('#day2_break1').text(" ");
                    $('#day2_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day2_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

                }else
                {
                    $('#carbSum2').val(parseFloat(t[2])*x);

                    var current =  $('#day2_break1').text();
                    var currentVal =$('#day2_break1').val();
                    $('#day2_break1').val(" ");
                    $('#day2_break1').text(" ");
                    $('#day2_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day2_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

                }

            }else if(t[4] ==2)
            {
                var value = parseFloat($('#fatsSum').val()) ;

                if(value)
                {
                    value +=parseFloat(t[2]*x);
                    $('#fatsSum').val(value);
                    var current =  $('#day1_break1').text();
                    var currentVal =$('#day1_break1').val();
                    $('#day1_break1').val(" ");
                    $('#day1_break1').text(" ");
                    $('#day1_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day1_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

                }else
                {
                    $('#fatsSum2').val(parseFloat(t[2])*x);
                    var current =  $('#day2_break1').text();
                    var currentVal =$('#day2_break1').val();
                    $('#day2_break1').val(" ");
                    $('#day2_break1').text(" ");
                    $('#day2_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day2_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
                }

            }else
            {
                var value = parseFloat($('#proteinSum2').val()) ;

                if(value)
                {
                    value +=parseFloat(t[2]*x);
                    $('#proteinSum2').val(value);
                    var current =  $('#day2_break1').text();
                    var currentVal =$('#day2_break1').val();
                    $('#day2_break1').val(" ");
                    $('#day2_break1').text(" ");
                    $('#day2_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day2_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

                }else
                {
                    $('#proteinSum2').val(parseFloat(t[2])*x);
                    var current =  $('#day2_break1').text();
                    var currentVal =$('#day2_break1').val();
                    $('#day2_break1').val(" ");
                    $('#day2_break1').text(" ");
                    $('#day2_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day2_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
                }
            }



        }

        function getData2_break2() {

            var x =  $("#gmValue2_break2 option:selected").val();
            var y = $("#selectcountries2_break2 option:selected").text();
            var t = y.split(/[ ,]+/);

            if(t[4] ==1)
            {
                var value = parseFloat($('#carbSum2').val()) ;

                if(value)
                {
                    value +=parseFloat(t[2]*x);
                    $('#carbSum2').val(value);

                    var current =  $('#day2_break2').text();
                    var currentVal =$('#day2_break2').val();
                    $('#day2_break2').val(" ");
                    $('#day2_break2').text(" ");
                    $('#day2_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day2_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

                }else
                {
                    $('#carbSum2').val(parseFloat(t[2])*x);

                    var current =  $('#day2_break2').text();
                    var currentVal =$('#day2_break2').val();
                    $('#day2_break2').val(" ");
                    $('#day2_break2').text(" ");
                    $('#day2_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day2_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

                }

            }else if(t[4] ==2)
            {
                var value = parseFloat($('#fatsSum2').val()) ;

                if(value)
                {
                    value +=parseFloat(t[2]*x);
                    $('#fatsSum2').val(value);
                    var current =  $('#day2_break2').text();
                    var currentVal =$('#day2_break2').val();
                    $('#day2_break2').val(" ");
                    $('#day2_break2').text(" ");
                    $('#day2_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day2_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

                }else
                {
                    $('#fatsSum2').val(parseFloat(t[2])*x);
                    var current =  $('#day2_break2').text();
                    var currentVal =$('#day2_break2').val();
                    $('#day2_break2').val(" ");
                    $('#day2_break2').text(" ");
                    $('#day2_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day2_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
                }

            }else
            {
                var value = parseFloat($('#proteinSum2').val()) ;

                if(value)
                {
                    value +=parseFloat(t[2]*x);
                    $('#proteinSum2').val(value);
                    var current =  $('#day2_break2').text();
                    var currentVal =$('#day2_break2').val();
                    $('#day2_break2').val(" ");
                    $('#day2_break2').text(" ");
                    $('#day2_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day2_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

                }else
                {
                    $('#proteinSum2').val(parseFloat(t[2])*x);
                    var current =  $('#day2_break2').text();
                    var currentVal =$('#day2_break2').val();
                    $('#day2_break2').val(" ");
                    $('#day2_break2').text(" ");
                    $('#day2_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
                    $('#day2_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
                }
            }



        }

    </script>--}}

    <script src="{{url('/')}}/js/form.js"></script>


@stop
