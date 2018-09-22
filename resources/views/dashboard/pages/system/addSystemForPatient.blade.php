@extends('dashboard.master')

@section('content')

    <link rel="stylesheet" href="{{url('/')}}/vendors/fm.tagator.jquery.css">
    <script src="{{url('/')}}/js/jquery.js"></script>
    <script src="{{url('/')}}/vendors/fm.tagator.jquery.js"></script>

    <script src="{{url('/')}}/ckeditor/ckeditor.js"></script>




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
                    <form action="/saveSystemForPatient" method="post" class="form-horizontal form-label-left">
                        @csrf

                        <input type="hidden" value="{{$id}}" name="patientID">


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
                            <textarea name="system_desc" cols="30" rows="10" id="system_desc" class="form-control">
                                {{old('system_desc')}}
                            </textarea>
                                </div>
                            </div>
                        </div>


                        <button class="accordion" type="button"> السبت</button>
                        <div class="panel">
                            <br><br>
                            <div class="form-group first_day">

                                <div class="text-center">

                                    <h2 class="text-center">اليوم الاول</h2>


                                </div>


                                <br><br><br>


                                <div class="form-group text-center">

                                    <div class="col-lg-12">
                                        <div class="col-lg-2">
                                            <select id="continents" class="form-control">
                                                <option value="0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>


                                            </select>
                                        </div>
                                        <div class="col-lg-4">

                                            <select id="selectcountries" class="form-control"></select>
                                        </div>
                                        <div class="col-lg-3">
                                            <select name="gmValue" id="gmValue" class="form-control">

                                                <option value="0.25">1/4</option>
                                                <option value="0.5">1/2</option>
                                                @for($i=1;$i<=500;$i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor

                                            </select>
                                        </div>


                                        <div class="col-lg-3">
                                            <button type="button" class="btn btn-success"
                                                    onclick="getData('gmValue','selectcountries','carbSum','fatsSum','proteinSum','caloriesSum','day1_breakfast')">
                                                أضف
                                            </button>

                                            <button type="button" class="btn btn-warning"
                                                    onclick="deleteItem('gmValue','selectcountries','carbSum','fatsSum','proteinSum','caloriesSum','day1_breakfast')">
                                                حذف
                                            </button>
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


                                               value="{{old('day1_breakfast')}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>


                                <br><br><br>


                                <div class="form-group text-center">
                                    <div class="col-lg-12">
                                        <div class="col-lg-2">
                                            <select id="continents1_break1" class="form-control">
                                                <option value="0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>


                                            </select>
                                        </div>
                                        <div class="col-lg-4">
                                            <select id="selectcountries1_break1" class="form-control"></select>
                                        </div>
                                        <div class="col-lg-3">
                                            <select name="gmValue" id="gmValue1_break1" class="form-control">

                                                <option value="0.25">1/4</option>
                                                <option value="0.5">1/2</option>
                                                @for($i=1;$i<=500;$i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor

                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <button type="button" class="btn btn-success"
                                                    onclick="getData('gmValue1_break1','selectcountries1_break1','carbSum','fatsSum','proteinSum','caloriesSum','day1_break1')">
                                                أضف
                                            </button>
                                            <button type="button" class="btn btn-warning"
                                                    onclick="deleteItem('gmValue1_break1','selectcountries1_break1','carbSum','fatsSum','proteinSum','caloriesSum','day1_break1')">
                                                حذف
                                            </button>
                                        </div>
                                    </div>

                                    <br>

                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day1_break1">وجبة
                                        خفيفة
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day1_break1" name="day1_break1"

                                               value="{{old('day1_break1')}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>

                                <br><br><br>


                                <div class="form-group text-center">
                                    <div class="col-lg-12">
                                        <div class="col-lg-2"><select id="continents1_lunch" class="form-control">
                                                <option value="0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>


                                            </select></div>
                                        <div class="col-lg-4"><select id="selectcountries1_lunch"
                                                                      class="form-control"></select></div>
                                        <div class="col-lg-3"><select name="gmValue" id="gmValue1_lunch"
                                                                      class="form-control">

                                                <option value="0.25">1/4</option>
                                                <option value="0.5">1/2</option>
                                                @for($i=1;$i<=500;$i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor

                                            </select></div>
                                        <div class="col-lg-3">
                                            <button type="button" class="btn btn-success"
                                                    onclick="getData('gmValue1_lunch','selectcountries1_lunch','carbSum','fatsSum','proteinSum','caloriesSum','day1_lunch')">
                                                أضف
                                            </button>
                                            <button type="button" class="btn btn-warning"
                                                    onclick="deleteItem('gmValue1_lunch','selectcountries1_lunch','carbSum','fatsSum','proteinSum','caloriesSum','day1_lunch')">
                                                حذف
                                            </button>
                                        </div>
                                    </div>


                                    <br><br><br>


                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day1_lunch">الغداء
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day1_lunch" name="day1_lunch"

                                               value="{{old('day1_lunch')}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>
                                <br><br><br>


                                <div class="form-group text-center">
                                    <div class="col-lg-12">
                                        <div class="col-lg-2"><select id="continents1_break2" class="form-control">
                                                <option value="0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>


                                            </select></div>
                                        <div class="col-lg-4">
                                            <select id="selectcountries1_break2" class="form-control"></select>
                                        </div>
                                        <div class="col-lg-3">
                                            <select name="gmValue" id="gmValue1_break2" class="form-control">

                                                <option value="0.25">1/4</option>
                                                <option value="0.5">1/2</option>
                                                @for($i=1;$i<=500;$i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor

                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <button type="button" class="btn btn-success"
                                                    onclick="getData('gmValue1_break2','selectcountries1_break2','carbSum','fatsSum','proteinSum','caloriesSum','day1_break2')">
                                                أضف
                                            </button>
                                            <button type="button" class="btn btn-warning"
                                                    onclick="deleteItem('gmValue1_break2','selectcountries1_break2','carbSum','fatsSum','proteinSum','caloriesSum','day1_break2')">
                                                حذف
                                            </button>
                                        </div>
                                    </div>


                                    <br><br>


                                    <br>


                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day1_break2">وجبة
                                        خفيفة
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day1_break2" name="day1_break2"

                                               value="{{old('day1_break2')}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>


                                <br><br><br>


                                <div class="form-group text-center">
                                    <div class="col-lg-12">
                                        <div class="col-lg-2">
                                            <select id="continents1_dinner" class="form-control">
                                                <option value="0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>


                                            </select>
                                        </div>
                                        <div class="col-lg-4">
                                            <select id="selectcountries1_dinner" class="form-control"></select>
                                        </div>
                                        <div class="col-lg-3">
                                            <select name="gmValue" id="gmValue1_dinner" class="form-control">

                                                <option value="0.25">1/4</option>
                                                <option value="0.5">1/2</option>
                                                @for($i=1;$i<=500;$i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor

                                            </select>
                                        </div>
                                        <div class="col-lg-3">

                                            <button type="button" class="btn btn-success"
                                                    onclick="getData('gmValue1_dinner','selectcountries1_dinner','carbSum','fatsSum','proteinSum','caloriesSum','day1_dinner')">
                                                أضف
                                            </button>
                                            <button type="button" class="btn btn-warning"
                                                    onclick="deleteItem('gmValue1_dinner','selectcountries1_dinner','carbSum','fatsSum','proteinSum','caloriesSum','day1_dinner')">
                                                حذف
                                            </button>
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
                                               value="{{old('day1_dinner')}}"
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
                                               value="{{old('day1_notes')}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>

                                <br>
                                <br>


                                <div class="col-lg-12">

                                    <h2 class="text-center">مجموع السعرات الحرارية لليوم الاول</h2>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <label for="carbSum">carbs </label>
                                        <input type="text" id="carbSum" class="form-control"
                                               value="{{old('carbSum')}}"
                                               name="carbSum"

                                               placeholder="مجموع الكربهيدرات">
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <label for="fatsSum">fats </label>
                                        <input type="text" id="fatsSum" class="form-control"
                                               name="fatsSum"
                                               value="{{old('fatsSum')}}"

                                               placeholder="مجموع الدهون">
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <label for="proteinSum">protein </label>
                                        <input type="text" id="proteinSum" class="form-control"
                                               name="proteinSum"
                                               value="{{old('proteinSum')}}"
                                               placeholder="مجموع البروتينات">
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <label for="caloriesSum">total calories </label>
                                        <input type="text" id="caloriesSum" class="form-control"
                                               name="caloriesSum"
                                               value="{{old('caloriesSum')}}"
                                               placeholder="مجموع السعرات">
                                    </div>
                                </div>


                            </div>
                        </div>


                        <button class="accordion" type="button"> الاحد</button>
                        <div class="panel">


                            <br><br><br>
                            <div class="form-group sec_day">

                                <div class="form-group text-center">
                                    <div class="col-lg-12">
                                        <div class="col-lg-2">
                                            <select id="continent2" class="form-control">
                                                <option value="0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>


                                            </select>
                                        </div>
                                        <div class="col-lg-4">
                                            <select id="selectcountries2" class="form-control"></select>
                                        </div>
                                        <div class="col-lg-3">
                                            <select name="gmValue" id="gmValue2" class="form-control">

                                                <option value="0.25">1/4</option>
                                                <option value="0.5">1/2</option>
                                                @for($i=1;$i<=500;$i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor

                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <button type="button" class="btn btn-success"
                                                    onclick="getData('gmValue2','selectcountries2','carbSum2','fatsSum2','proteinSum2','caloriesSum2','day2_breakfast')">
                                                أضف
                                            </button>
                                            <button type="button" class="btn btn-warning"
                                                    onclick="deleteItem('gmValue2','selectcountries2','carbSum2','fatsSum2','proteinSum2','caloriesSum2','day2_breakfast')">
                                                حذف
                                            </button>
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
                                               value="{{old('day2_breakfast')}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>


                                <br><br><br>


                                <div class="form-group text-center">
                                    <div class="col-lg-12">
                                        <div class="col-lg-2">
                                            <select id="continents2_break1" class="form-control">
                                                <option value="0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>


                                            </select>
                                        </div>
                                        <div class="col-lg-4">
                                            <select id="selectcountries2_break1" class="form-control"></select>
                                        </div>
                                        <div class="col-lg-3">
                                            <select name="gmValue" id="gmValue2_break1" class="form-control">

                                                <option value="0.25">1/4</option>
                                                <option value="0.5">1/2</option>
                                                @for($i=1;$i<=500;$i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor

                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <button type="button" class="btn btn-success"
                                                    onclick="getData('gmValue2_break1','selectcountries2_break1','carbSum2','fatsSum2','proteinSum2','caloriesSum2','day2_break1')">
                                                أضف
                                            </button>
                                            <button type="button" class="btn btn-warning"
                                                    onclick="deleteItem('gmValue2_break1','selectcountries2_break1','carbSum2','fatsSum2','proteinSum2','caloriesSum2','day2_break1')">
                                                حذف
                                            </button>
                                        </div>
                                    </div>


                                    <br>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day2_break1">وجبة
                                        خفيفة
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day2_break1" name="day2_break1"
                                               value="{{old('day2_break1')}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>

                                <br><br><br>


                                <div class="form-group text-center">
                                    <div class="col-lg-12">
                                        <div class="col-lg-2"><select id="continents2_lunch" class="form-control">
                                                <option value="0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>


                                            </select></div>
                                        <div class="col-lg-4"><select id="selectcountries2_lunch"
                                                                      class="form-control"></select></div>
                                        <div class="col-lg-3"><select name="gmValue" id="gmValue2_lunch"
                                                                      class="form-control">

                                                <option value="0.25">1/4</option>
                                                <option value="0.5">1/2</option>
                                                @for($i=1;$i<=500;$i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor

                                            </select></div>
                                        <div class="col-lg-3">
                                            <button type="button" class="btn btn-success"
                                                    onclick="getData('gmValue2_lunch','selectcountries2_lunch','carbSum2','fatsSum2','proteinSum2','caloriesSum2','day2_lunch')">
                                                أضف
                                            </button>
                                            <button type="button" class="btn btn-warning"
                                                    onclick="deleteItem('gmValue2_lunch','selectcountries2_lunch','carbSum2','fatsSum2','proteinSum2','caloriesSum2','day2_lunch')">
                                                حذف
                                            </button>
                                        </div>
                                    </div>


                                    <br>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day2_lunch">الغداء
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day2_lunch" name="day2_lunch"
                                               value="{{old('day2_lunch')}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>


                                <br><br><br>


                                <div class="form-group text-center">
                                    <div class="col-lg-12">
                                        <div class="col-lg-2"><select id="continents2_break2" class="form-control">
                                                <option value="0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>


                                            </select></div>
                                        <div class="col-lg-4"><select id="selectcountries2_break2"
                                                                      class="form-control"></select></div>
                                        <div class="col-lg-3"><select name="gmValue" id="gmValue2_break2"
                                                                      class="form-control">

                                                <option value="0.25">1/4</option>
                                                <option value="0.5">1/2</option>
                                                @for($i=1;$i<=500;$i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor

                                            </select></div>
                                        <div class="col-lg-3">
                                            <button type="button" class="btn btn-success"
                                                    onclick="getData('gmValue2_break2','selectcountries2_break2','carbSum2','fatsSum2','proteinSum2','caloriesSum2','day2_break2')">
                                                أضف
                                            </button>
                                            <button type="button" class="btn btn-warning"
                                                    onclick="deleteItem('gmValue2_break2','selectcountries2_break2','carbSum2','fatsSum2','proteinSum2','caloriesSum2','day2_break2')">
                                                حذف
                                            </button>
                                        </div>
                                    </div>


                                    <br>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day2_break2">وجبة
                                        خفيفة
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day2_break2" name="day2_break2"
                                               value="{{old('day2_break2')}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>


                                <br><br><br>


                                <div class="form-group text-center">
                                    <div class="col-lg-12">
                                        <div class="col-lg-2"><select id="continents2_dinner" class="form-control">
                                                <option value="0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>


                                            </select></div>
                                        <div class="col-lg-4"><select id="selectcountries2_dinner"
                                                                      class="form-control"></select></div>
                                        <div class="col-lg-3"><select name="gmValue" id="gmValue2_dinner"
                                                                      class="form-control">

                                                <option value="0.25">1/4</option>
                                                <option value="0.5">1/2</option>
                                                @for($i=1;$i<=500;$i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor

                                            </select></div>
                                        <div class="col-lg-3">
                                            <button type="button" class="btn btn-success"
                                                    onclick="getData('gmValue2_dinner','selectcountries2_dinner','carbSum2','fatsSum2','proteinSum2','caloriesSum2','day2_dinner')">
                                                أضف
                                            </button>
                                            <button type="button" class="btn btn-warning"
                                                    onclick="deleteItem('gmValue2_dinner','selectcountries2_dinner','carbSum2','fatsSum2','proteinSum2','caloriesSum2','day2_dinner')">
                                                حذف
                                            </button>
                                        </div>
                                    </div>


                                    <br>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day2_dinner">العشاء
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day2_dinner" name="day2_dinner"
                                               value="{{old('day2_dinner')}}"
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
                                               value="{{old('day2_notes')}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>


                                <br>
                                <br>
                                <br>

                                <div class="col-lg-12">

                                    <h2 class="text-center">مجموع السعرات الحرارية لليوم الثانى</h2>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <label for="carbSum">carbs </label>
                                        <input type="text" id="carbSum2" class="form-control"
                                               value="{{old('carbSum2')}}"
                                               name="carbSum2"

                                               placeholder="مجموع الكربهيدرات">
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <label for="carbSum">fats </label>
                                        <input type="text" id="fatsSum2" class="form-control"
                                               value="{{old('fatsSum2')}}"
                                               name="fatsSum2"

                                               placeholder="مجموع الدهون">
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <label for="carbSum">protein </label>
                                        <input type="text" id="proteinSum2" class="form-control"
                                               value="{{old('proteinSum2')}}"
                                               name="proteinSum2"

                                               placeholder="مجموع البروتينات">
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <label for="caloriesSum2">total calories </label>
                                        <input type="text" id="caloriesSum2" class="form-control"
                                               name="caloriesSum2"
                                               value="{{old('caloriesSum2')}}"
                                               placeholder="مجموع السعرات">
                                    </div>
                                </div>


                            </div>
                        </div>


                        <button class="accordion" type="button"> الاتنين</button>

                        <div class="panel">

                            <br><br><br>
                            <div class="form-group third_day">

                                <div class="form-group text-center">
                                    <div class="col-lg-12">
                                        <div class="col-lg-2"><select id="continent3" class="form-control">
                                                <option value="0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>


                                            </select></div>
                                        <div class="col-lg-4"><select id="selectcountries3"
                                                                      class="form-control"></select></div>
                                        <div class="col-lg-3"><select name="gmValue" id="gmValue3" class="form-control">

                                                <option value="0.25">1/4</option>
                                                <option value="0.5">1/2</option>
                                                @for($i=1;$i<=500;$i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor

                                            </select></div>
                                        <div class="col-lg-3">
                                            <button type="button" class="btn btn-success"
                                                    onclick="getData('gmValue3','selectcountries3','carbSum3','fatsSum3','proteinSum3','caloriesSum3','day3_breakfast')">
                                                أضف
                                            </button>
                                            <button type="button" class="btn btn-warning"
                                                    onclick="deleteItem('gmValue3','selectcountries3','carbSum3','fatsSum3','proteinSum3','caloriesSum3','day3_breakfast')">
                                                حذف
                                            </button>
                                        </div>
                                    </div>


                                    <br>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day3_breakfast">الافطار
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day3_breakfast" name="day3_breakfast"
                                               value="{{old('day3_breakfast')}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>


                                <br><br><br>


                                <div class="form-group text-center">
                                    <div class="col-lg-12">
                                        <div class="col-lg-2">
                                            <select id="continents3_break1" class="form-control">
                                                <option value="0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4"><select id="selectcountries3_break1"
                                                                      class="form-control"></select></div>
                                        <div class="col-lg-3"><select name="gmValue" id="gmValue3_break1"
                                                                      class="form-control">

                                                <option value="0.25">1/4</option>
                                                <option value="0.5">1/2</option>
                                                @for($i=1;$i<=500;$i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor

                                            </select></div>
                                        <div class="col-lg-3">
                                            <button type="button" class="btn btn-success"
                                                    onclick="getData('gmValue3_break1','selectcountries3_break1','carbSum3','fatsSum3','proteinSum3','caloriesSum3','day3_break1')">
                                                أضف
                                            </button>
                                            <button type="button" class="btn btn-warning"
                                                    onclick="deleteItem('gmValue3_break1','selectcountries3_break1','carbSum3','fatsSum3','proteinSum3','caloriesSum3','day3_break1')">
                                                حذف
                                            </button>
                                        </div>
                                    </div>


                                    <br>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day3_break1">وجبة
                                        خفيفة
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day3_break1" name="day3_break1"
                                               value="{{old('day3_break1')}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>

                                <br><br><br>


                                <div class="form-group text-center">
                                    <div class="col-lg-12">
                                        <div class="col-lg-2"><select id="continents3_lunch" class="form-control">
                                                <option value="0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>


                                            </select></div>
                                        <div class="col-lg-4"><select id="selectcountries3_lunch"
                                                                      class="form-control"></select></div>
                                        <div class="col-lg-3"><select id="gmValue3_lunch" class="form-control">

                                                <option value="0.25">1/4</option>
                                                <option value="0.5">1/2</option>
                                                @for($i=1;$i<=500;$i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor

                                            </select></div>
                                        <div class="col-lg-3">
                                            <button type="button" class="btn btn-success"
                                                    onclick="getData('gmValue3_lunch','selectcountries3_lunch','carbSum3','fatsSum3','proteinSum3','caloriesSum3','day3_lunch')">
                                                أضف
                                            </button>
                                            <button type="button" class="btn btn-warning"
                                                    onclick="deleteItem('gmValue3_lunch','selectcountries3_lunch','carbSum3','fatsSum3','proteinSum3','caloriesSum3','day3_lunch')">
                                                حذف
                                            </button>
                                        </div>
                                    </div>


                                    <br>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day3_lunch">الغداء
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day3_lunch" name="day3_lunch"
                                               value="{{old('day3_lunch')}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>


                                <br><br><br>


                                <br>
                                <div class="form-group text-center">
                                    <div class="col-lg-12">
                                        <div class="col-lg-2"><select id="continents3_break2" class="form-control">
                                                <option value="0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>


                                            </select></div>
                                        <div class="col-lg-4"><select id="selectcountries3_break2"
                                                                      class="form-control"></select></div>
                                        <div class="col-lg-3"><select name="gmValue" id="gmValue3_break2"
                                                                      class="form-control">

                                                <option value="0.25">1/4</option>
                                                <option value="0.5">1/2</option>
                                                @for($i=1;$i<=500;$i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor

                                            </select></div>
                                        <div class="col-lg-3">
                                            <button type="button" class="btn btn-success"
                                                    onclick="getData('gmValue3_break2','selectcountries3_break2','carbSum3','fatsSum3','proteinSum3','caloriesSum3','day3_break2')">
                                                أضف
                                            </button>
                                            <button type="button" class="btn btn-warning"
                                                    onclick="deleteItem('gmValue3_break2','selectcountries3_break2','carbSum3','fatsSum3','proteinSum3','caloriesSum3','day3_break2')">
                                                حذف
                                            </button>
                                        </div>
                                    </div>


                                    <br>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day3_break2">وجبة
                                        خفيفة
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day3_break2" name="day3_break2"
                                               value="{{old('day3_break2')}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>


                                <br><br><br>


                                <div class="form-group text-center">
                                    <div class="col-lg-12">
                                        <div class="col-lg-2"><select id="continents3_dinner" class="form-control">
                                                <option value="0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>


                                            </select></div>
                                        <div class="col-lg-4"><select id="selectcountries3_dinner"
                                                                      class="form-control"></select></div>
                                        <div class="col-lg-3"><select name="gmValue" id="gmValue3_dinner"
                                                                      class="form-control">

                                                <option value="0.25">1/4</option>
                                                <option value="0.5">1/2</option>
                                                @for($i=1;$i<=500;$i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor

                                            </select></div>
                                        <div class="col-lg-3">
                                            <button type="button" class="btn btn-success"
                                                    onclick="getData('gmValue3_dinner','selectcountries3_dinner','carbSum3','fatsSum3','proteinSum3','caloriesSum3','day3_dinner')">
                                                أضف
                                            </button>
                                            <button type="button" class="btn btn-warning"
                                                    onclick="deleteItem('gmValue3_dinner','selectcountries3_dinner','carbSum3','fatsSum3','proteinSum3','caloriesSum3','day3_dinner')">
                                                حذف
                                            </button>
                                        </div>

                                    </div>


                                    <br>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day3_dinner">العشاء
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day3_dinner" name="day3_dinner"
                                               value="{{old('day3_dinner')}}"
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
                                               value="{{old('day3_notes')}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>


                                <br>
                                <br>
                                <br>

                                <div class="col-lg-12">

                                    <h2 class="text-center">مجموع السعرات الحرارية لليوم الثالث</h2>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <label for="carbSum">carbs </label>
                                        <input type="text" id="carbSum3" class="form-control"
                                               name="carbSum3"
                                               value="{{old('carbSum3')}}"
                                               placeholder="مجموع الكربهيدرات">
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <label for="carbSum">fats </label>
                                        <input type="text" id="fatsSum3" class="form-control"
                                               name="fatsSum3"
                                               value="{{old('fatsSum3')}}"
                                               placeholder="مجموع الدهون">
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <label for="carbSum">protein </label>
                                        <input type="text" id="proteinSum3" class="form-control"
                                               name="proteinSum3"
                                               value="{{old('proteinSum3')}}"
                                               placeholder="مجموع البروتينات">
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <label for="proteinSum">total calories </label>
                                        <input type="text" id="caloriesSum3" class="form-control"
                                               name="caloriesSum3"
                                               value="{{old('caloriesSum3')}}"
                                               placeholder="مجموع السعرات">
                                    </div>
                                </div>


                            </div>
                        </div>


                        <button class="accordion" type="button"> الثلاثاء</button>
                        <div class="panel">
                            <div class="form-group forth_day">

                                <br><br><br>

                                <div class="form-group text-center">
                                    <div class="col-lg-12">
                                        <div class="col-lg-2"><select id="continent4" class="form-control">
                                                <option value="0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>


                                            </select></div>
                                        <div class="col-lg-4"><select id="selectcountries4"
                                                                      class="form-control"></select></div>
                                        <div class="col-lg-3"><select name="gmValue" id="gmValue4" class="form-control">

                                                <option value="0.25">1/4</option>
                                                <option value="0.5">1/2</option>
                                                @for($i=1;$i<=500;$i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor

                                            </select></div>
                                        <div class="col-lg-3">
                                            <button type="button" class="btn btn-success"
                                                    onclick="getData('gmValue4','selectcountries4','carbSum4','fatsSum4','proteinSum4','caloriesSum4','day4_breakfast')">
                                                أضف
                                            </button>
                                            <button type="button" class="btn btn-warning"
                                                    onclick="deleteItem('gmValue4','selectcountries4','carbSum4','fatsSum4','proteinSum4','caloriesSum4','day4_breakfast')">
                                                حذف
                                            </button>
                                        </div>
                                    </div>


                                    <br>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day4_breakfast">الافطار
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day4_breakfast" name="day4_breakfast"
                                               value="{{old('day4_breakfast')}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>


                                <br><br><br>


                                <div class="form-group text-center">
                                    <div class="col-lg-12">
                                        <div class="col-lg-2"><select id="continents4_break1" class="form-control">
                                                <option value="0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>


                                            </select></div>
                                        <div class="col-lg-4"><select id="selectcountries4_break1"
                                                                      class="form-control"></select></div>
                                        <div class="col-lg-3"><select name="gmValue" id="gmValue4_break1"
                                                                      class="form-control">

                                                <option value="0.25">1/4</option>
                                                <option value="0.5">1/2</option>
                                                @for($i=1;$i<=500;$i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor

                                            </select></div>
                                        <div class="col-lg-3">
                                            <button type="button" class="btn btn-success"
                                                    onclick="getData('gmValue4_break1','selectcountries4_break1','carbSum4','fatsSum4','proteinSum4','caloriesSum4','day4_break1')">
                                                أضف
                                            </button>
                                            <button type="button" class="btn btn-warning"
                                                    onclick="deleteItem('gmValue4_break1','selectcountries4_break1','carbSum4','fatsSum4','proteinSum4','caloriesSum4','day4_break1')">
                                                حذف
                                            </button>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day4_break1">وجبة
                                        خفيفة
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day4_break1" name="day4_break1"
                                               value="{{old('day4_break1')}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>

                                <br><br><br>


                                <div class="form-group text-center">
                                    <div class="col-lg-12">
                                        <div class="col-lg-2"><select id="continents4_lunch" class="form-control">
                                                <option value="0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>
                                            </select></div>
                                        <div class="col-lg-4"><select id="selectcountries4_lunch"
                                                                      class="form-control"></select></div>
                                        <div class="col-lg-3">
                                            <select id="gmValue4_lunch" class="form-control">

                                                <option value="0.25">1/4</option>
                                                <option value="0.5">1/2</option>
                                                @for($i=1;$i<=500;$i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor

                                            </select></div>
                                        <div class="col-lg-3">
                                            <button type="button" class="btn btn-success"
                                                    onclick="getData('gmValue4_lunch','selectcountries4_lunch','carbSum4','fatsSum4','proteinSum4','caloriesSum4','day4_lunch')">
                                                أضف
                                            </button>
                                            <button type="button" class="btn btn-warning"
                                                    onclick="deleteItem('gmValue4_lunch','selectcountries4_lunch','carbSum4','fatsSum4','proteinSum4','caloriesSum4','day4_lunch')">
                                                حذف
                                            </button>
                                        </div>
                                    </div>


                                    <br>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day4_lunch">الغداء
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day4_lunch" name="day4_lunch"
                                               value="{{old('day4_lunch')}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>


                                <br><br><br>


                                <div class="form-group text-center">
                                    <div class="col-lg-12">
                                        <div class="col-lg-2"><select id="continents4_break2" class="form-control">
                                                <option value="0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>


                                            </select></div>
                                        <div class="col-lg-4"><select id="selectcountries4_break2"
                                                                      class="form-control"></select></div>
                                        <div class="col-lg-3"><select name="gmValue" id="gmValue4_break2"
                                                                      class="form-control">

                                                <option value="0.25">1/4</option>
                                                <option value="0.5">1/2</option>
                                                @for($i=1;$i<=500;$i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor

                                            </select></div>
                                        <div class="col-lg-3">
                                            <button type="button" class="btn btn-success"
                                                    onclick="getData('gmValue4_break2','selectcountries4_break2','carbSum4','fatsSum4','proteinSum4','caloriesSum4','day4_break2')">
                                                أضف
                                            </button>
                                            <button type="button" class="btn btn-warning"
                                                    onclick="deleteItem('gmValue4_break2','selectcountries4_break2','carbSum4','fatsSum4','proteinSum4','caloriesSum4','day4_break2')">
                                                حذف
                                            </button>
                                        </div>
                                    </div>


                                    <br>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day4_break2">وجبة
                                        خفيفة
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day4_break2" name="day4_break2"
                                               value="{{old('day4_break2')}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>


                                <br><br><br>


                                <div class="form-group text-center">
                                    <div class="col-lg-12">
                                        <div class="col-lg-2"><select id="continents4_dinner" class="form-control">
                                                <option value="0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>


                                            </select></div>
                                        <div class="col-lg-4"><select id="selectcountries4_dinner"
                                                                      class="form-control"></select></div>
                                        <div class="col-lg-3"><select name="gmValue" id="gmValue4_dinner"
                                                                      class="form-control">

                                                <option value="0.25">1/4</option>
                                                <option value="0.5">1/2</option>
                                                @for($i=1;$i<=500;$i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor

                                            </select></div>
                                        <div class="col-lg-3">
                                            <button type="button" class="btn btn-success"
                                                    onclick="getData('gmValue4_dinner','selectcountries4_dinner','carbSum4','fatsSum4','proteinSum4','caloriesSum4','day4_dinner')">
                                                أضف
                                            </button>
                                            <button type="button" class="btn btn-warning"
                                                    onclick="deleteItem('gmValue4_dinner','selectcountries4_dinner','carbSum4','fatsSum4','proteinSum4','caloriesSum4','day4_dinner')">
                                                حذف
                                            </button>
                                        </div>
                                    </div>


                                    <br>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day4_dinner">العشاء
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day4_dinner" name="day4_dinner"
                                               value="{{old('day4_dinner')}}"
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
                                               value="{{old('day4_notes')}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>


                                <br>
                                <br>
                                <br>

                                <div class="col-lg-12">

                                    <h2 class="text-center">مجموع السعرات الحرارية لليوم الرابع</h2>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <label for="carbSum">carbs </label>
                                        <input type="text" id="carbSum4" class="form-control"
                                               value="{{old('carbSum4')}}"
                                               name="carbSum4"

                                               placeholder="مجموع الكربهيدرات">
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <label for="carbSum">fats </label>
                                        <input type="text" id="fatsSum4" class="form-control"
                                               value="{{old('fatsSum4')}}"
                                               name="fatsSum4"

                                               placeholder="مجموع الدهون">
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <label for="carbSum">proteins </label>
                                        <input type="text" id="proteinSum4" class="form-control"
                                               value="{{old('proteinSum4')}}"
                                               name="proteinSum4"

                                               placeholder="مجموع البروتينات">
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <label for="caloriesSum4">total calories </label>
                                        <input type="text" id="caloriesSum4" class="form-control"
                                               name="caloriesSum4"
                                               value="{{old('caloriesSum4')}}"
                                               placeholder="مجموع السعرات">
                                    </div>
                                </div>


                            </div>
                        </div>


                        <button class="accordion" type="button"> الاربعاء</button>
                        <div class="panel">
                            <div class="form-group fifth_day">


                                <br><br><br>
                                <div class="form-group text-center">
                                    <div class="col-lg-12">
                                        <div class="col-lg-2"><select id="continent5" class="form-control">
                                                <option value="0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>


                                            </select></div>
                                        <div class="col-lg-4"><select id="selectcountries5"
                                                                      class="form-control"></select></div>
                                        <div class="col-lg-3"><select name="gmValue" id="gmValue5" class="form-control">

                                                <option value="0.25">1/4</option>
                                                <option value="0.5">1/2</option>
                                                @for($i=1;$i<=500;$i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor

                                            </select></div>
                                        <div class="col-lg-3">
                                            <button type="button" class="btn btn-success"
                                                    onclick="getData('gmValue5','selectcountries5','carbSum5','fatsSum5','proteinSum5','caloriesSum5','day5_breakfast')">
                                                أضف
                                            </button>
                                            <button type="button" class="btn btn-warning"
                                                    onclick="deleteItem('gmValue5','selectcountries5','carbSum5','fatsSum5','proteinSum5','caloriesSum5','day5_breakfast')">
                                                حذف
                                            </button>
                                        </div>
                                    </div>

                                    <br>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day5_breakfast">الافطار
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day5_breakfast" name="day5_breakfast"
                                               value="{{old('day5_breakfast')}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>


                                <br><br><br>


                                <div class="form-group text-center">
                                    <div class="col-lg-12">
                                        <div class="col-lg-2"><select id="continents5_break1" class="form-control">
                                                <option value="0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>


                                            </select></div>
                                        <div class="col-lg-4"><select id="selectcountries5_break1"
                                                                      class="form-control"></select></div>
                                        <div class="col-lg-3"><select name="gmValue" id="gmValue5_break1"
                                                                      class="form-control">

                                                <option value="0.25">1/4</option>
                                                <option value="0.5">1/2</option>
                                                @for($i=1;$i<=500;$i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor

                                            </select></div>
                                        <div class="col-lg-3">
                                            <button type="button" class="btn btn-success"
                                                    onclick="getData('gmValue5_break1','selectcountries5_break1','carbSum5','fatsSum5','proteinSum5','caloriesSum5','day5_break1')">
                                                أضف
                                            </button>
                                            <button type="button" class="btn btn-warning"
                                                    onclick="deleteItem('gmValue5_break1','selectcountries5_break1','carbSum5','fatsSum5','proteinSum5','caloriesSum5','day5_break1')">
                                                حذف
                                            </button>
                                        </div>
                                    </div>


                                    <br>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day5_break1">وجبة
                                        خفيفة
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day5_break1" name="day5_break1"
                                               value="{{old('day5_break1')}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>

                                <br><br><br>


                                <div class="form-group text-center">
                                    <div class="col-lg-12">
                                        <div class="col-lg-2">
                                            <select id="continents5_lunch" class="form-control">
                                                <option value="0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>


                                            </select>
                                        </div>
                                        <div class="col-lg-4"><select id="selectcountries5_lunch"
                                                                      class="form-control"></select></div>
                                        <div class="col-lg-3"><select id="gmValue5_lunch" class="form-control">

                                                <option value="0.25">1/4</option>
                                                <option value="0.5">1/2</option>
                                                @for($i=1;$i<=500;$i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor

                                            </select></div>
                                        <div class="col-lg-3">
                                            <button type="button" class="btn btn-success"
                                                    onclick="getData('gmValue5_lunch','selectcountries5_lunch','carbSum5','fatsSum5','proteinSum5','caloriesSum5','day5_lunch')">
                                                أضف
                                            </button>
                                            <button type="button" class="btn btn-warning"
                                                    onclick="deleteItem('gmValue5_lunch','selectcountries5_lunch','carbSum5','fatsSum5','proteinSum5','caloriesSum5','day5_lunch')">
                                                حذف
                                            </button>
                                        </div>
                                    </div>


                                    <br>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day5_lunch">الغداء
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day5_lunch" name="day5_lunch"
                                               value="{{old('day5_lunch')}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>


                                <br><br><br>


                                <div class="form-group text-center">
                                    <div class="col-lg-12">
                                        <div class="col-lg-2"><select id="continents5_break2" class="form-control">
                                                <option value="0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>


                                            </select></div>
                                        <div class="col-lg-4"><select id="selectcountries5_break2"
                                                                      class="form-control"></select></div>
                                        <div class="col-lg-3"><select name="gmValue" id="gmValue5_break2"
                                                                      class="form-control">

                                                <option value="0.25">1/4</option>
                                                <option value="0.5">1/2</option>
                                                @for($i=1;$i<=500;$i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor

                                            </select></div>
                                        <div class="col-lg-3">
                                            <button type="button" class="btn btn-success"
                                                    onclick="getData('gmValue5_break2','selectcountries5_break2','carbSum5','fatsSum5','proteinSum5','caloriesSum5','day5_break2')">
                                                أضف
                                            </button>
                                            <button type="button" class="btn btn-warning"
                                                    onclick="deleteItem('gmValue5_break2','selectcountries5_break2','carbSum5','fatsSum5','proteinSum5','caloriesSum5','day5_break2')">
                                                حذف
                                            </button>
                                        </div>
                                    </div>

                                    <br>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day5_break2">وجبة
                                        خفيفة
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day5_break2" name="day5_break2"
                                               value="{{old('day5_break2')}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>


                                <br><br><br>


                                <div class="form-group text-center">
                                    <div class="col-lg-12">
                                        <div class="col-lg-2"><select id="continents5_dinner" class="form-control">
                                                <option value="0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>


                                            </select></div>
                                        <div class="col-lg-4"><select id="selectcountries5_dinner"
                                                                      class="form-control"></select></div>
                                        <div class="col-lg-3"><select name="gmValue" id="gmValue5_dinner"
                                                                      class="form-control" class="form-control">

                                                <option value="0.25">1/4</option>
                                                <option value="0.5">1/2</option>
                                                @for($i=1;$i<=500;$i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor

                                            </select></div>
                                        <div class="col-lg-3">
                                            <button type="button" class="btn btn-success"
                                                    onclick="getData('gmValue5_dinner','selectcountries5_dinner','carbSum5','fatsSum5','proteinSum5','caloriesSum5','day5_dinner')">
                                                أضف
                                            </button>
                                            <button type="button" class="btn btn-warning"
                                                    onclick="deleteItem('gmValue5_dinner','selectcountries5_dinner','carbSum5','fatsSum5','proteinSum5','caloriesSum5','day5_dinner')">
                                                حذف
                                            </button>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day5_dinner">العشاء
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day5_dinner" name="day5_dinner"
                                               value="{{old('day5_dinner')}}"
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
                                               value="{{old('day5_notes')}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>


                                <br>
                                <br>
                                <br>

                                <div class="col-lg-12">

                                    <h2 class="text-center">مجموع السعرات الحرارية لليوم الخامس</h2>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <label for="carbSum">carbs </label>
                                        <input type="text" id="carbSum5" class="form-control"
                                               value="{{old('carbSum5')}}"
                                               name="carbSum5"

                                               placeholder="مجموع الكربهيدرات">
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <label for="carbSum">fats </label>
                                        <input type="text" id="fatsSum5" class="form-control"
                                               value="{{old('fatsSum5')}}"
                                               name="fatsSum5"

                                               placeholder="مجموع الدهون">
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <label for="carbSum">protein </label>
                                        <input type="text" id="proteinSum5" class="form-control"
                                               value="{{old('proteinSum5')}}"
                                               name="proteinSum5"

                                               placeholder="مجموع البروتينات">
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <label for="caloriesSum5">total calories </label>
                                        <input type="text" id="caloriesSum5" class="form-control"
                                               name="caloriesSum5"
                                               value="{{old('caloriesSum5')}}"
                                               placeholder="مجموع السعرات">
                                    </div>


                                </div>


                            </div>
                        </div>


                        <button class="accordion" type="button"> الخميس</button>
                        <div class="panel">
                            <div class="form-group sixth_day">


                                <br><br><br>
                                <div class="form-group text-center">
                                    <div class="col-lg-12">
                                        <div class="col-lg-2"><select id="continent6" class="form-control">
                                                <option value="0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>


                                            </select></div>
                                        <div class="col-lg-4"><select id="selectcountries6"
                                                                      class="form-control"></select></div>
                                        <div class="col-lg-3"><select name="gmValue" id="gmValue6" class="form-control">

                                                <option value="0.25">1/4</option>
                                                <option value="0.5">1/2</option>
                                                @for($i=1;$i<=500;$i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor

                                            </select></div>
                                        <div class="col-lg-3">
                                            <button type="button" class="btn btn-success"
                                                    onclick="getData('gmValue6','selectcountries6','carbSum6','fatsSum6','proteinSum6','caloriesSum6','day6_breakfast')">
                                                أضف
                                            </button>
                                            <button type="button" class="btn btn-warning"
                                                    onclick="deleteItem('gmValue6','selectcountries6','carbSum6','fatsSum6','proteinSum6','caloriesSum6','day6_breakfast')">
                                                حذف
                                            </button>
                                        </div>
                                    </div>


                                    <br>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day6_breakfast">الافطار
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day6_breakfast" name="day6_breakfast"
                                               value="{{old('day6_breakfast')}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>


                                <br><br><br>


                                <div class="form-group text-center">
                                    <div class="col-lg-12">
                                        <div class="col-lg-2"><select id="continents6_break1" class="form-control">
                                                <option value="0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>


                                            </select></div>
                                        <div class="col-lg-4"><select id="selectcountries6_break1"
                                                                      class="form-control"></select></div>
                                        <div class="col-lg-3"><select name="gmValue" id="gmValue6_break1"
                                                                      class="form-control">

                                                <option value="0.25">1/4</option>
                                                <option value="0.5">1/2</option>
                                                @for($i=1;$i<=500;$i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor

                                            </select></div>
                                        <div class="col-lg-3">
                                            <button type="button" class="btn btn-success"
                                                    onclick="getData('gmValue6_break1','selectcountries6_break1','carbSum6','fatsSum6','proteinSum6','caloriesSum6','day6_break1')">
                                                أضف
                                            </button>
                                            <button type="button" class="btn btn-warning"
                                                    onclick="deleteItem('gmValue6_break1','selectcountries6_break1','carbSum6','fatsSum6','proteinSum6','caloriesSum6','day6_break1')">
                                                حذف
                                            </button>
                                        </div>
                                    </div>


                                    <br>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day6_break1">وجبة
                                        خفيفة
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day6_break1" name="day6_break1"
                                               value="{{old('day6_break1')}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>

                                <br><br><br>


                                <div class="form-group text-center">

                                    <div class="col-lg-12">
                                        <div class="col-lg-2">
                                            <select id="continents6_lunch" class="form-control">
                                                <option value="0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>


                                            </select>
                                        </div>
                                        <div class="col-lg-4"><select id="selectcountries6_lunch"
                                                                      class="form-control"></select></div>
                                        <div class="col-lg-3"><select id="gmValue6_lunch" class="form-control">

                                                <option value="0.25">1/4</option>
                                                <option value="0.5">1/2</option>
                                                @for($i=1;$i<=500;$i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor

                                            </select></div>
                                        <div class="col-lg-3">
                                            <button type="button" class="btn btn-success"
                                                    onclick="getData('gmValue6_lunch','selectcountries6_lunch','carbSum6','fatsSum6','proteinSum6','caloriesSum6','day6_lunch')">
                                                أضف
                                            </button>
                                            <button type="button" class="btn btn-warning"
                                                    onclick="deleteItem('gmValue6_lunch','selectcountries6_lunch','carbSum6','fatsSum6','proteinSum6','caloriesSum6','day6_lunch')">
                                                حذف
                                            </button>
                                        </div>
                                    </div>

                                    <br>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day6_lunch">الغداء
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day6_lunch" name="day6_lunch"
                                               value="{{old('day6_lunch')}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>


                                <br><br><br>


                                <div class="form-group text-center">
                                    <div class="col-lg-12">
                                        <div class="col-lg-2"><select id="continents6_break2" class="form-control">
                                                <option value="0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>


                                            </select></div>
                                        <div class="col-lg-4"><select id="selectcountries6_break2"
                                                                      class="form-control"></select></div>
                                        <div class="col-lg-3"><select name="gmValue" id="gmValue6_break2"
                                                                      class="form-control">

                                                <option value="0.25">1/4</option>
                                                <option value="0.5">1/2</option>
                                                @for($i=1;$i<=500;$i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor

                                            </select></div>
                                        <div class="col-lg-3">
                                            <button type="button" class="btn btn-success"
                                                    onclick="getData('gmValue6_break2','selectcountries6_break2','carbSum6','fatsSum6','proteinSum6','caloriesSum6','day6_break2')">
                                                أضف
                                            </button>
                                            <button type="button" class="btn btn-warning"
                                                    onclick="deleteItem('gmValue6_break2','selectcountries6_break2','carbSum6','fatsSum6','proteinSum6','caloriesSum6','day6_break2')">
                                                حذف
                                            </button>
                                        </div>
                                    </div>

                                    <br>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day6_break2">وجبة
                                        خفيفة
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day6_break2" name="day6_break2"
                                               value="{{old('day6_break2')}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>


                                <br><br><br>


                                <div class="form-group text-center">
                                    <div class="col-lg-12">
                                        <div class="col-lg-2">
                                            <select id="continents6_dinner" class="form-control">
                                                <option value="0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4">
                                            <select id="selectcountries6_dinner" class="form-control"></select>
                                        </div>
                                        <div class="col-lg-3"><select name="gmValue" id="gmValue6_dinner"
                                                                      class="form-control">

                                                <option value="0.25">1/4</option>
                                                <option value="0.5">1/2</option>
                                                @for($i=1;$i<=500;$i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor

                                            </select></div>
                                        <div class="col-lg-3">
                                            <button type="button" class="btn btn-success"
                                                    onclick="getData('gmValue6_dinner','selectcountries6_dinner','carbSum6','fatsSum6','proteinSum6','caloriesSum6','day6_dinner')">
                                                أضف
                                            </button>
                                            <button type="button" class="btn btn-warning"
                                                    onclick="deleteItem('gmValue6_dinner','selectcountries6_dinner','carbSum6','fatsSum6','proteinSum6','caloriesSum6','day6_dinner')">
                                                حذف
                                            </button>
                                        </div>
                                    </div>


                                    <br>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day6_dinner">العشاء
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day6_dinner" name="day6_dinner"
                                               value="{{old('day6_dinner')}}"
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
                                               value="{{old('day6_notes')}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>


                                <br>
                                <br>
                                <br>

                                <div class="col-lg-12">

                                    <h2 class="text-center">مجموع السعرات الحرارية لليوم السادس</h2>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <label for="carbSum">carbs </label>
                                        <input type="text" id="carbSum6" class="form-control"
                                               value="{{old('carbSum6')}}"
                                               name="carbSum6"

                                               placeholder="مجموع الكربهيدرات">
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <label for="carbSum">fats </label>
                                        <input type="text" id="fatsSum6" class="form-control"
                                               value="{{old('fatsSum6')}}"
                                               name="fatsSum6"

                                               placeholder="مجموع الدهون">
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <label for="carbSum">proteins </label>
                                        <input type="text" id="proteinSum6" class="form-control"
                                               value="{{old('proteinSum6')}}"
                                               name="proteinSum6"

                                               placeholder="مجموع البروتينات">
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <label for="caloriesSum6">total calories </label>
                                        <input type="text" id="caloriesSum6" class="form-control"
                                               name="caloriesSum6"
                                               value="{{old('caloriesSum6')}}"
                                               placeholder="مجموع السعرات">
                                    </div>
                                </div>


                            </div>
                        </div>


                        <button class="accordion" type="button"> الجمعه</button>
                        <div class="panel">
                            <div class="form-group seventh_day">


                                <br><br><br>
                                <div class="form-group text-center">
                                    <div class="col-lg-12">
                                        <div class="col-lg-2"><select id="continent7" class="form-control">
                                                <option value="0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>


                                            </select></div>
                                        <div class="col-lg-4"><select id="selectcountries7"
                                                                      class="form-control"></select></div>
                                        <div class="col-lg-3"><select name="gmValue" id="gmValue7" class="form-control">

                                                <option value="0.25">1/4</option>
                                                <option value="0.5">1/2</option>
                                                @for($i=1;$i<=500;$i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor

                                            </select></div>
                                        <div class="col-lg-3">
                                            <button type="button" class="btn btn-success"
                                                    onclick="getData('gmValue7','selectcountries7','carbSum7','fatsSum7','proteinSum7','caloriesSum7','day7_breakfast')">
                                                أضف
                                            </button>
                                            <button type="button" class="btn btn-warning"
                                                    onclick="deleteItem('gmValue7','selectcountries7','carbSum7','fatsSum7','proteinSum7','caloriesSum7','day7_breakfast')">
                                                حذف
                                            </button>
                                        </div>
                                    </div>


                                    <br>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day7_breakfast">الافطار
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day7_breakfast" name="day7_breakfast"
                                               value="{{old('day7_breakfast')}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>


                                <br><br><br>


                                <div class="form-group text-center">
                                    <div class="col-lg-12">
                                        <div class="col-lg-2"><select id="continents7_break1" class="form-control">
                                                <option value="0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>


                                            </select></div>
                                        <div class="col-lg-4"><select id="selectcountries7_break1"
                                                                      class="form-control"></select></div>
                                        <div class="col-lg-3"><select name="gmValue" id="gmValue7_break1"
                                                                      class="form-control">

                                                <option value="0.25">1/4</option>
                                                <option value="0.5">1/2</option>
                                                @for($i=1;$i<=500;$i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor

                                            </select></div>
                                        <div class="col-lg-3">
                                            <button type="button" class="btn btn-success"
                                                    onclick="getData('gmValue7_break1','selectcountries7_break1','carbSum7','fatsSum7','proteinSum7','caloriesSum7','day7_break1')">
                                                أضف
                                            </button>
                                            <button type="button" class="btn btn-warning"
                                                    onclick="deleteItem('gmValue7_break1','selectcountries7_break1','carbSum7','fatsSum7','proteinSum7','caloriesSum7','day7_break1')">
                                                حذف
                                            </button>
                                        </div>
                                    </div>


                                    <br>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day7_break1">وجبة
                                        خفيفة
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day7_break1" name="day7_break1"
                                               value="{{old('day7_break1')}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>

                                <br><br><br>


                                <div class="form-group text-center">
                                    <div class="col-lg-12">
                                        <div class="col-lg-2">
                                            <select id="continents7_lunch" class="form-control">
                                                <option value="0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>


                                            </select>
                                        </div>
                                        <div class="col-lg-4"><select id="selectcountries7_lunch"
                                                                      class="form-control"></select></div>
                                        <div class="col-lg-3"><select id="gmValue7_lunch" class="form-control">

                                                <option value="0.25">1/4</option>
                                                <option value="0.5">1/2</option>
                                                @for($i=1;$i<=500;$i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor

                                            </select></div>
                                        <div class="col-lg-3">
                                            <button type="button" class="btn btn-success"
                                                    onclick="getData('gmValue7_lunch','selectcountries7_lunch','carbSum7','fatsSum7','proteinSum7','caloriesSum7','day7_lunch')">
                                                أضف
                                            </button>
                                            <button type="button" class="btn btn-warning"
                                                    onclick="deleteItem('gmValue7_lunch','selectcountries7_lunch','carbSum7','fatsSum7','proteinSum7','caloriesSum7','day7_lunch')">
                                                حذف
                                            </button>
                                        </div>
                                    </div>


                                    <br>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day7_lunch">الغداء
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day7_lunch" name="day7_lunch"
                                               value="{{old('day7_lunch')}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>


                                <br><br><br>


                                <div class="form-group text-center">
                                    <div class="col-lg-12">
                                        <div class="col-lg-2"><select id="continents7_break2" class="form-control">
                                                <option value="0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>


                                            </select></div>
                                        <div class="col-lg-4"><select id="selectcountries7_break2"
                                                                      class="form-control"></select></div>
                                        <div class="col-lg-3"><select name="gmValue" id="gmValue7_break2"
                                                                      class="form-control">

                                                <option value="0.25">1/4</option>
                                                <option value="0.5">1/2</option>
                                                @for($i=1;$i<=500;$i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor

                                            </select></div>
                                        <div class="col-lg-3">
                                            <button type="button" class="btn btn-success"
                                                    onclick="getData('gmValue7_break2','selectcountries7_break2','carbSum7','fatsSum7','proteinSum7','caloriesSum7','day7_break2')">
                                                أضف
                                            </button>
                                            <button type="button" class="btn btn-warning"
                                                    onclick="deleteItem('gmValue7_break2','selectcountries7_break2','carbSum7','fatsSum7','proteinSum7','caloriesSum7','day7_break2')">
                                                حذف
                                            </button>
                                        </div>
                                    </div>


                                    <br>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day7_break2">وجبة
                                        خفيفة
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day7_break2" name="day7_break2"
                                               value="{{old('day7_break2')}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>


                                <br><br><br>


                                <div class="form-group text-center">
                                    <div class="col-lg-12">
                                        <div class="col-lg-2"><select id="continents7_dinner" class="form-control">
                                                <option value="0">all</option>
                                                <option value="1">carbs</option>
                                                <option value="2">Fats</option>
                                                <option value="3">proteins</option>


                                            </select></div>
                                        <div class="col-lg-4"><select id="selectcountries7_dinner"
                                                                      class="form-control"></select></div>
                                        <div class="col-lg-3"><select name="gmValue" id="gmValue7_dinner"
                                                                      class="form-control">

                                                <option value="0.25">1/4</option>
                                                <option value="0.5">1/2</option>
                                                @for($i=1;$i<=500;$i++)
                                                    <option value="{{$i}}">{{$i}}</option>
                                                @endfor

                                            </select></div>
                                        <div class="col-lg-3">
                                            <button type="button" class="btn btn-success"
                                                    onclick="getData('gmValue7_dinner','selectcountries7_dinner','carbSum7','fatsSum7','proteinSum7','caloriesSum7','day7_dinner')">
                                                أضف
                                            </button>
                                            <button type="button" class="btn btn-warning"
                                                    onclick="deleteItem('gmValue7_dinner','selectcountries7_dinner','carbSum7','fatsSum7','proteinSum7','caloriesSum7','day7_dinner')">
                                                حذف
                                            </button>
                                        </div>
                                    </div>


                                    <br>
                                    <br>
                                    <br>

                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day7_dinner">العشاء
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="day7_dinner" name="day7_dinner"
                                               value="{{old('day7_dinner')}}"
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
                                               value="{{old('day7_notes')}}"
                                               class="form-control col-md-7 col-xs-12">
                                    </div>


                                </div>


                                <br>
                                <br>
                                <br>

                                <div class="col-lg-12">

                                    <h2 class="text-center">مجموع السعرات الحرارية لليوم السابع</h2>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <label for="carbSum">carbs </label>
                                        <input type="text" id="carbSum7" class="form-control"
                                               value="{{old('carbSum7')}}"
                                               name="carbSum7"

                                               placeholder="مجموع الكربهيدرات">
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <label for="carbSum">fats </label>
                                        <input type="text" id="fatsSum7" class="form-control"
                                               value="{{old('fatsSum7')}}"
                                               name="fatsSum7"

                                               placeholder="مجموع الدهون">
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <label for="carbSum">proteins </label>
                                        <input type="text" id="proteinSum7" class="form-control"
                                               value="{{old('proteinSum7')}}"
                                               name="proteinSum7"

                                               placeholder="مجموع البروتينات">
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-12">
                                        <label for="caloriesSum7">total calories </label>
                                        <input type="text" id="caloriesSum7" class="form-control"
                                               name="caloriesSum7"
                                               value="{{old('caloriesSum7')}}"
                                               placeholder="مجموع السعرات">
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
        $carbs = \App\Food::where('category_id', 1)->get();
        $fats = \App\Food::where('category_id', 2)->get();
        $proteins = \App\Food::where('category_id', 3)->get();

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


    </script>




    <script>


        var carb = new Array();

        <?php foreach ($data as $item) {

        ?>


        carb.push('<?php echo $item->food_name . ' - ' . $item->unit . ' - ' . $item->carb_calories
            . ' - ' . $item->fats_calories . ' - ' . $item->proteins_calories .' - '.$item->calories  ; ?>');

            <?php }?>


        var carbs = new Array();

        <?php foreach ($carbs as $item) {

        ?>

        carbs.push('<?php echo $item->food_name . ' - ' . $item->unit . ' - ' . $item->carb_calories
            . ' - ' . $item->fats_calories . ' - ' . $item->proteins_calories .' - '.$item->calories  ; ?>');
            <?php }?>


        var fats = new Array();

        <?php foreach ($fats as $item) {

        ?>

        fats.push('<?php echo $item->food_name . ' - ' . $item->unit . ' - ' . $item->carb_calories
            . ' - ' . $item->fats_calories . ' - ' . $item->proteins_calories .' - '.$item->calories  ; ?>');

            <?php }?>


        var proteins = new Array();

        <?php foreach ($proteins as $item) {

        ?>

        proteins.push('<?php echo $item->food_name . ' - ' . $item->unit . ' - ' . $item->carb_calories
            . ' - ' . $item->fats_calories . ' - ' . $item->proteins_calories .' - '.$item->calories  ; ?>');

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

    <script src="{{url('/')}}/js/day2/day2_lunch.js"></script>

    {{-- day 2 lunch finish --}}



    {{-- day 2 dinner start --}}

    <script src="{{url('/')}}/js/day2/day2_dinner.js"></script>

    {{-- day 2 dinner finish --}}

    {{-- day 2 break1 start --}}

    <script src="{{url('/')}}/js/day2/day2_break1.js"></script>
    {{-- day 2 break1 finish --}}


    {{-- day 2 break2 start --}}

    <script src="{{url('/')}}/js/day2/day2_break2.js"></script>
    {{-- day 2 break2 finish --}}



    {{-- day 3 -- }}


    {{-- day 3 breakfast start --}}

    <script src="{{url('/')}}/js/day3/day3_breakfast1.js"></script>
    {{-- day 3 breakfast finish --}}

    {{-- day 3 lunch start --}}

    <script src="{{url('/')}}/js/day3/day3_lunch.js"></script>

    {{-- day 3 lunch finish --}}



    {{-- day 3 dinner start --}}

    <script src="{{url('/')}}/js/day3/day3_dinner.js"></script>

    {{-- day 3 dinner finish --}}

    {{-- day 3 break1 start --}}
    <script src="{{url('/')}}/js/day3/day3_break1.js"></script>

    {{-- day 3 break1 finish --}}


    {{-- day 3 break2 start --}}

    <script src="{{url('/')}}/js/day3/day3_break2.js"></script>
    {{-- day 3 break2 finish --}}


    {{-- functions that assign values to summation inputs --}}



    {{-- day 4 -- }}


   {{-- day 4 breakfast start --}}
    <script src="{{url('/')}}/js/day4/day4_breakfast.js"></script>

    {{-- day 4 breakfast finish --}}

    {{-- day 4 lunch start --}}

    <script src="{{url('/')}}/js/day4/day4_lunch.js"></script>

    {{-- day 4 lunch finish --}}



    {{-- day 4 dinner start --}}

    <script src="{{url('/')}}/js/day4/day4_dinner.js"></script>

    {{-- day 4 dinner finish --}}

    {{-- day 4 break1 start --}}
    <script src="{{url('/')}}/js/day4/day4_break1.js"></script>

    {{-- day 4 break1 finish --}}


    {{-- day 4 break2 start --}}
    <script src="{{url('/')}}/js/day4/day4_break2.js"></script>

    {{-- day 4 break2 finish --}}




    {{-- day 5 -- }}


   {{-- day 5 breakfast start --}}

    <script src="{{url('/')}}/js/day5/day5_breakfast.js"></script>
    {{-- day 5 breakfast finish --}}

    {{-- day 5 lunch start --}}


    <script src="{{url('/')}}/js/day5/day5_lunch.js"></script>
    {{-- day 5 lunch finish --}}



    {{-- day 5 dinner start --}}

    <script>

        function initSelectors() {
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continents5_dinner'));

            //countries
            MAIN.createRelatedSelector
            (document.querySelector('#continents5_dinner')           // from select element
                , document.querySelector('#selectcountries5_dinner')      // to select element
                , {                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                , function (a, b) {
                    return a > b ? 1 : a < b ? -1 : 0;
                }   // sort method
            );


        }

        //create MAIN namespace
        (function (ns) { // don't pollute the global namespace

            function create(from, to, obj, srt) {
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
                obj.all = (function (o) {
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test(o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call(from
                    , null
                    , to
                    , obj
                    , srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn, obj) {
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)) {
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt) {
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self, {
                            optselects: obj,
                            optselectsall: obj.all,
                            relatedTo: relatedto,
                            sorter: srt || false
                        });
                    }

                    if (!self.relatedTo) {
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        , cselect = self.relatedTo
                        , opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i = 0; i < optsfilter.length; i += 1) {
                        opts[i] = new Option(optsfilter[i], i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg) {
                return {name: 'CreationError', message: mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function (from, to, obj, srt) {
                    try {
                        if (arguments.length < 1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null, from, to, obj, srt);
                    }
                    catch (e) {
                        console.log('createRelatedSelector ->', e.name, '\n'
                            + e.message +
                            '\ncheck parameters');
                    }
                }
            };
        }('MAIN'));
        //initialize
        initSelectors();
    </script>

    {{-- day 5 dinner finish --}}

    {{-- day 5 break1 start --}}

    <script>

        function initSelectors() {
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continents5_break1'));

            //countries
            MAIN.createRelatedSelector
            (document.querySelector('#continents5_break1')           // from select element
                , document.querySelector('#selectcountries5_break1')      // to select element
                , {                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                , function (a, b) {
                    return a > b ? 1 : a < b ? -1 : 0;
                }   // sort method
            );


        }

        //create MAIN namespace
        (function (ns) { // don't pollute the global namespace

            function create(from, to, obj, srt) {
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
                obj.all = (function (o) {
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test(o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call(from
                    , null
                    , to
                    , obj
                    , srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn, obj) {
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)) {
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt) {
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self, {
                            optselects: obj,
                            optselectsall: obj.all,
                            relatedTo: relatedto,
                            sorter: srt || false
                        });
                    }

                    if (!self.relatedTo) {
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        , cselect = self.relatedTo
                        , opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i = 0; i < optsfilter.length; i += 1) {
                        opts[i] = new Option(optsfilter[i], i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg) {
                return {name: 'CreationError', message: mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function (from, to, obj, srt) {
                    try {
                        if (arguments.length < 1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null, from, to, obj, srt);
                    }
                    catch (e) {
                        console.log('createRelatedSelector ->', e.name, '\n'
                            + e.message +
                            '\ncheck parameters');
                    }
                }
            };
        }('MAIN'));
        //initialize
        initSelectors();
    </script>
    {{-- day 5 break1 finish --}}


    {{-- day 5 break2 start --}}

    <script>

        function initSelectors() {
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continents5_break2'));

            //countries
            MAIN.createRelatedSelector
            (document.querySelector('#continents5_break2')           // from select element
                , document.querySelector('#selectcountries5_break2')      // to select element
                , {                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                , function (a, b) {
                    return a > b ? 1 : a < b ? -1 : 0;
                }   // sort method
            );


        }

        //create MAIN namespace
        (function (ns) { // don't pollute the global namespace

            function create(from, to, obj, srt) {
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
                obj.all = (function (o) {
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test(o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call(from
                    , null
                    , to
                    , obj
                    , srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn, obj) {
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)) {
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt) {
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self, {
                            optselects: obj,
                            optselectsall: obj.all,
                            relatedTo: relatedto,
                            sorter: srt || false
                        });
                    }

                    if (!self.relatedTo) {
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        , cselect = self.relatedTo
                        , opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i = 0; i < optsfilter.length; i += 1) {
                        opts[i] = new Option(optsfilter[i], i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg) {
                return {name: 'CreationError', message: mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function (from, to, obj, srt) {
                    try {
                        if (arguments.length < 1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null, from, to, obj, srt);
                    }
                    catch (e) {
                        console.log('createRelatedSelector ->', e.name, '\n'
                            + e.message +
                            '\ncheck parameters');
                    }
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

        function initSelectors() {
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continent6'));

            //countries
            MAIN.createRelatedSelector
            (document.querySelector('#continent6')           // from select element
                , document.querySelector('#selectcountries6')      // to select element
                , {                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                , function (a, b) {
                    return a > b ? 1 : a < b ? -1 : 0;
                }   // sort method
            );


        }

        //create MAIN namespace
        (function (ns) { // don't pollute the global namespace

            function create(from, to, obj, srt) {
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
                obj.all = (function (o) {
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test(o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call(from
                    , null
                    , to
                    , obj
                    , srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn, obj) {
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)) {
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt) {
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self, {
                            optselects: obj,
                            optselectsall: obj.all,
                            relatedTo: relatedto,
                            sorter: srt || false
                        });
                    }

                    if (!self.relatedTo) {
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        , cselect = self.relatedTo
                        , opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i = 0; i < optsfilter.length; i += 1) {
                        opts[i] = new Option(optsfilter[i], i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg) {
                return {name: 'CreationError', message: mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function (from, to, obj, srt) {
                    try {
                        if (arguments.length < 1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null, from, to, obj, srt);
                    }
                    catch (e) {
                        console.log('createRelatedSelector ->', e.name, '\n'
                            + e.message +
                            '\ncheck parameters');
                    }
                }
            };
        }('MAIN'));
        //initialize
        initSelectors();
    </script>

    {{-- day 6 breakfast finish --}}

    {{-- day 6 lunch start --}}

    <script>

        function initSelectors() {
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continents6_lunch'));

            //countries
            MAIN.createRelatedSelector
            (document.querySelector('#continents6_lunch')           // from select element
                , document.querySelector('#selectcountries6_lunch')      // to select element
                , {                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                , function (a, b) {
                    return a > b ? 1 : a < b ? -1 : 0;
                }   // sort method
            );


        }

        //create MAIN namespace
        (function (ns) { // don't pollute the global namespace

            function create(from, to, obj, srt) {
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
                obj.all = (function (o) {
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test(o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call(from
                    , null
                    , to
                    , obj
                    , srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn, obj) {
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)) {
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt) {
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self, {
                            optselects: obj,
                            optselectsall: obj.all,
                            relatedTo: relatedto,
                            sorter: srt || false
                        });
                    }

                    if (!self.relatedTo) {
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        , cselect = self.relatedTo
                        , opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i = 0; i < optsfilter.length; i += 1) {
                        opts[i] = new Option(optsfilter[i], i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg) {
                return {name: 'CreationError', message: mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function (from, to, obj, srt) {
                    try {
                        if (arguments.length < 1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null, from, to, obj, srt);
                    }
                    catch (e) {
                        console.log('createRelatedSelector ->', e.name, '\n'
                            + e.message +
                            '\ncheck parameters');
                    }
                }
            };
        }('MAIN'));
        //initialize
        initSelectors();
    </script>

    {{-- day 6 lunch finish --}}



    {{-- day 6 dinner start --}}

    <script>

        function initSelectors() {
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continents6_dinner'));

            //countries
            MAIN.createRelatedSelector
            (document.querySelector('#continents6_dinner')           // from select element
                , document.querySelector('#selectcountries6_dinner')      // to select element
                , {                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                , function (a, b) {
                    return a > b ? 1 : a < b ? -1 : 0;
                }   // sort method
            );


        }

        //create MAIN namespace
        (function (ns) { // don't pollute the global namespace

            function create(from, to, obj, srt) {
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
                obj.all = (function (o) {
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test(o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call(from
                    , null
                    , to
                    , obj
                    , srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn, obj) {
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)) {
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt) {
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self, {
                            optselects: obj,
                            optselectsall: obj.all,
                            relatedTo: relatedto,
                            sorter: srt || false
                        });
                    }

                    if (!self.relatedTo) {
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        , cselect = self.relatedTo
                        , opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i = 0; i < optsfilter.length; i += 1) {
                        opts[i] = new Option(optsfilter[i], i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg) {
                return {name: 'CreationError', message: mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function (from, to, obj, srt) {
                    try {
                        if (arguments.length < 1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null, from, to, obj, srt);
                    }
                    catch (e) {
                        console.log('createRelatedSelector ->', e.name, '\n'
                            + e.message +
                            '\ncheck parameters');
                    }
                }
            };
        }('MAIN'));
        //initialize
        initSelectors();
    </script>

    {{-- day 6 dinner finish --}}

    {{-- day 6 break1 start --}}

    <script>

        function initSelectors() {
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continents6_break1'));

            //countries
            MAIN.createRelatedSelector
            (document.querySelector('#continents6_break1')           // from select element
                , document.querySelector('#selectcountries6_break1')      // to select element
                , {                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                , function (a, b) {
                    return a > b ? 1 : a < b ? -1 : 0;
                }   // sort method
            );


        }

        //create MAIN namespace
        (function (ns) { // don't pollute the global namespace

            function create(from, to, obj, srt) {
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
                obj.all = (function (o) {
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test(o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call(from
                    , null
                    , to
                    , obj
                    , srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn, obj) {
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)) {
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt) {
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self, {
                            optselects: obj,
                            optselectsall: obj.all,
                            relatedTo: relatedto,
                            sorter: srt || false
                        });
                    }

                    if (!self.relatedTo) {
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        , cselect = self.relatedTo
                        , opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i = 0; i < optsfilter.length; i += 1) {
                        opts[i] = new Option(optsfilter[i], i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg) {
                return {name: 'CreationError', message: mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function (from, to, obj, srt) {
                    try {
                        if (arguments.length < 1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null, from, to, obj, srt);
                    }
                    catch (e) {
                        console.log('createRelatedSelector ->', e.name, '\n'
                            + e.message +
                            '\ncheck parameters');
                    }
                }
            };
        }('MAIN'));
        //initialize
        initSelectors();
    </script>
    {{-- day 6 break1 finish --}}


    {{-- day 6 break2 start --}}

    <script>

        function initSelectors() {
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continents6_break2'));

            //countries
            MAIN.createRelatedSelector
            (document.querySelector('#continents6_break2')           // from select element
                , document.querySelector('#selectcountries6_break2')      // to select element
                , {                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                , function (a, b) {
                    return a > b ? 1 : a < b ? -1 : 0;
                }   // sort method
            );


        }

        //create MAIN namespace
        (function (ns) { // don't pollute the global namespace

            function create(from, to, obj, srt) {
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
                obj.all = (function (o) {
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test(o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call(from
                    , null
                    , to
                    , obj
                    , srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn, obj) {
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)) {
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt) {
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self, {
                            optselects: obj,
                            optselectsall: obj.all,
                            relatedTo: relatedto,
                            sorter: srt || false
                        });
                    }

                    if (!self.relatedTo) {
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        , cselect = self.relatedTo
                        , opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i = 0; i < optsfilter.length; i += 1) {
                        opts[i] = new Option(optsfilter[i], i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg) {
                return {name: 'CreationError', message: mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function (from, to, obj, srt) {
                    try {
                        if (arguments.length < 1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null, from, to, obj, srt);
                    }
                    catch (e) {
                        console.log('createRelatedSelector ->', e.name, '\n'
                            + e.message +
                            '\ncheck parameters');
                    }
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

        function initSelectors() {
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continent7'));

            //countries
            MAIN.createRelatedSelector
            (document.querySelector('#continent7')           // from select element
                , document.querySelector('#selectcountries7')      // to select element
                , {                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                , function (a, b) {
                    return a > b ? 1 : a < b ? -1 : 0;
                }   // sort method
            );


        }

        //create MAIN namespace
        (function (ns) { // don't pollute the global namespace

            function create(from, to, obj, srt) {
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
                obj.all = (function (o) {
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test(o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call(from
                    , null
                    , to
                    , obj
                    , srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn, obj) {
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)) {
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt) {
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self, {
                            optselects: obj,
                            optselectsall: obj.all,
                            relatedTo: relatedto,
                            sorter: srt || false
                        });
                    }

                    if (!self.relatedTo) {
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        , cselect = self.relatedTo
                        , opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i = 0; i < optsfilter.length; i += 1) {
                        opts[i] = new Option(optsfilter[i], i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg) {
                return {name: 'CreationError', message: mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function (from, to, obj, srt) {
                    try {
                        if (arguments.length < 1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null, from, to, obj, srt);
                    }
                    catch (e) {
                        console.log('createRelatedSelector ->', e.name, '\n'
                            + e.message +
                            '\ncheck parameters');
                    }
                }
            };
        }('MAIN'));
        //initialize
        initSelectors();
    </script>

    {{-- day 7  breakfast finish --}}

    {{-- day 7 lunch start --}}

    <script>

        function initSelectors() {
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continents7_lunch'));

            //countries
            MAIN.createRelatedSelector
            (document.querySelector('#continents7_lunch')           // from select element
                , document.querySelector('#selectcountries7_lunch')      // to select element
                , {                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                , function (a, b) {
                    return a > b ? 1 : a < b ? -1 : 0;
                }   // sort method
            );


        }

        //create MAIN namespace
        (function (ns) { // don't pollute the global namespace

            function create(from, to, obj, srt) {
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
                obj.all = (function (o) {
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test(o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call(from
                    , null
                    , to
                    , obj
                    , srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn, obj) {
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)) {
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt) {
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self, {
                            optselects: obj,
                            optselectsall: obj.all,
                            relatedTo: relatedto,
                            sorter: srt || false
                        });
                    }

                    if (!self.relatedTo) {
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        , cselect = self.relatedTo
                        , opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i = 0; i < optsfilter.length; i += 1) {
                        opts[i] = new Option(optsfilter[i], i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg) {
                return {name: 'CreationError', message: mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function (from, to, obj, srt) {
                    try {
                        if (arguments.length < 1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null, from, to, obj, srt);
                    }
                    catch (e) {
                        console.log('createRelatedSelector ->', e.name, '\n'
                            + e.message +
                            '\ncheck parameters');
                    }
                }
            };
        }('MAIN'));
        //initialize
        initSelectors();
    </script>

    {{-- day 7 lunch finish --}}



    {{-- day 7 dinner start --}}

    <script>

        function initSelectors() {
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continents7_dinner'));

            //countries
            MAIN.createRelatedSelector
            (document.querySelector('#continents7_dinner')           // from select element
                , document.querySelector('#selectcountries7_dinner')      // to select element
                , {                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                , function (a, b) {
                    return a > b ? 1 : a < b ? -1 : 0;
                }   // sort method
            );


        }

        //create MAIN namespace
        (function (ns) { // don't pollute the global namespace

            function create(from, to, obj, srt) {
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
                obj.all = (function (o) {
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test(o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call(from
                    , null
                    , to
                    , obj
                    , srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn, obj) {
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)) {
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt) {
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self, {
                            optselects: obj,
                            optselectsall: obj.all,
                            relatedTo: relatedto,
                            sorter: srt || false
                        });
                    }

                    if (!self.relatedTo) {
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        , cselect = self.relatedTo
                        , opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i = 0; i < optsfilter.length; i += 1) {
                        opts[i] = new Option(optsfilter[i], i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg) {
                return {name: 'CreationError', message: mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function (from, to, obj, srt) {
                    try {
                        if (arguments.length < 1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null, from, to, obj, srt);
                    }
                    catch (e) {
                        console.log('createRelatedSelector ->', e.name, '\n'
                            + e.message +
                            '\ncheck parameters');
                    }
                }
            };
        }('MAIN'));
        //initialize
        initSelectors();
    </script>

    {{-- day 7 dinner finish --}}

    {{-- day 7 break1 start --}}

    <script>

        function initSelectors() {
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continents7_break1'));

            //countries
            MAIN.createRelatedSelector
            (document.querySelector('#continents7_break1')           // from select element
                , document.querySelector('#selectcountries7_break1')      // to select element
                , {                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                , function (a, b) {
                    return a > b ? 1 : a < b ? -1 : 0;
                }   // sort method
            );


        }

        //create MAIN namespace
        (function (ns) { // don't pollute the global namespace

            function create(from, to, obj, srt) {
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
                obj.all = (function (o) {
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test(o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call(from
                    , null
                    , to
                    , obj
                    , srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn, obj) {
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)) {
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt) {
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self, {
                            optselects: obj,
                            optselectsall: obj.all,
                            relatedTo: relatedto,
                            sorter: srt || false
                        });
                    }

                    if (!self.relatedTo) {
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        , cselect = self.relatedTo
                        , opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i = 0; i < optsfilter.length; i += 1) {
                        opts[i] = new Option(optsfilter[i], i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg) {
                return {name: 'CreationError', message: mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function (from, to, obj, srt) {
                    try {
                        if (arguments.length < 1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null, from, to, obj, srt);
                    }
                    catch (e) {
                        console.log('createRelatedSelector ->', e.name, '\n'
                            + e.message +
                            '\ncheck parameters');
                    }
                }
            };
        }('MAIN'));
        //initialize
        initSelectors();
    </script>
    {{-- day 7 break1 finish --}}


    {{-- day 7 break2 start --}}

    <script>

        function initSelectors() {
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continents7_break2'));

            //countries
            MAIN.createRelatedSelector
            (document.querySelector('#continents7_break2')           // from select element
                , document.querySelector('#selectcountries7_break2')      // to select element
                , {                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                , function (a, b) {
                    return a > b ? 1 : a < b ? -1 : 0;
                }   // sort method
            );


        }

        //create MAIN namespace
        (function (ns) { // don't pollute the global namespace

            function create(from, to, obj, srt) {
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
                obj.all = (function (o) {
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test(o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call(from
                    , null
                    , to
                    , obj
                    , srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn, obj) {
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)) {
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt) {
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self, {
                            optselects: obj,
                            optselectsall: obj.all,
                            relatedTo: relatedto,
                            sorter: srt || false
                        });
                    }

                    if (!self.relatedTo) {
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        , cselect = self.relatedTo
                        , opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i = 0; i < optsfilter.length; i += 1) {
                        opts[i] = new Option(optsfilter[i], i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg) {
                return {name: 'CreationError', message: mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function (from, to, obj, srt) {
                    try {
                        if (arguments.length < 1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null, from, to, obj, srt);
                    }
                    catch (e) {
                        console.log('createRelatedSelector ->', e.name, '\n'
                            + e.message +
                            '\ncheck parameters');
                    }
                }
            };
        }('MAIN'));
        //initialize
        initSelectors();
    </script>
    {{-- day 7 break2 finish --}}




    <script>
        function getData(drop1, drop2, carb, fats, proteins,calories, meal) {


            var x = $("#" + drop1 + " option:selected").val();
            var y = $("#" + drop2 + " option:selected").text();
            var t = y.split(/[ ,]+/);

            var carbValue = parseFloat($('#' + carb).val());
            var fatsValue = parseFloat($('#' + fats).val());
            var proteinsValue = parseFloat($('#' + proteins).val());
            var totalValue = parseFloat($('#' + calories).val());
            if (carbValue || fatsValue || proteinsValue || totalValue) {
                carbValue += x * t[4];
                fatsValue += x * t[6];
                proteinsValue += x * t[8];
                totalValue += x * t[10];
                $('#' + carb).val(carbValue);
                $('#' + fats).val(fatsValue);
                $('#' + proteins).val(proteinsValue);
                $('#' + calories).val(totalValue);
                var current = $('#' + meal).text();
                var currentVal = $('#' + meal).val();
                $('#' + meal).val(" ");
                $('#' + meal).text(" ");
                $('#' + meal).val(currentVal + ' - ' + t[0] + ' ' + x + ' ' + t[2]);

            }

            else {

                $('#' + carb).val(t[4] * x);
                $('#' + fats).val(t[6] * x);
                $('#' + proteins).val(t[8] * x);
                $('#' + calories).val(t[10] * x);

                var current = $('#' + meal).text();
                var currentVal = $('#' + meal).val();
                $('#' + meal).val(" ");
                $('#' + meal).text(" ");
                $('#' + meal).val(currentVal + ' - ' + t[0] + ' ' + x + ' ' + t[2]);


            }


        }
    </script>



    <script>
        function removefunc(array, search_term) {

            for (var i = array.length - 1; i >= 0; i--) {
                var arrayValue = array[i].trim();
                if (arrayValue === search_term) {

                    array.splice(i, 1);
                    break;       //<-- Uncomment  if only the first term has to be removed
                }
            }


        }

        function deleteItem(drop1, drop2, carb, fats, proteins,calories, meal) {
            var x = $("#" + drop1 + " option:selected").val();
            var y = $("#" + drop2 + " option:selected").text();
            var inputData = $('#' + meal).val();
            var array = inputData.split("-");

            var t = y.split(/[ ,]+/);
            var carbValue = parseFloat($('#' + carb).val());
            var fatsValue = parseFloat($('#' + fats).val());
            var proteinsValue = parseFloat($('#' + proteins).val());
            var totalValue = parseFloat($('#' + calories).val());
            if (carbValue || fatsValue || proteinsValue || totalValue) {
                carbValue -= parseFloat(x * t[4]);
                fatsValue -= parseFloat(x * t[6]);
                proteinsValue -= parseFloat(x * t[8]);
                totalValue -= parseFloat(x * t[10]);
                $('#' + carb).val(carbValue);
                $('#' + fats).val(fatsValue);
                $('#' + proteins).val(proteinsValue);
                $('#' + calories).val(totalValue);

                var remove = t[0] + ' ' + x + ' ' + t[2];

                var result = "-";
                removefunc(array, remove);


                for (var i = 1; i < array.length; i++) {
                    result += array[i];
                    result += " - ";
                }

                $('#' + meal).val(" ");
                $('#' + meal).val(result);


            }


        }
    </script>




@stop