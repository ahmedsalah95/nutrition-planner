@extends('dashboard.master')

@section('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="//cdn.ckeditor.com/4.9.0/standard/ckeditor.js"></script>
    <script type="text/javascript">
        var datefield=document.createElement("input")
        datefield.setAttribute("type", "date")
        if (datefield.type!="date"){ //if browser doesn't support input type="date", load files for jQuery UI Date Picker
            document.write('<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />\n')
            document.write('<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"><\/script>\n')
            document.write('<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"><\/script>\n')
        }

        var datefield2=document.createElement("input")
        datefield.setAttribute("type", "date")
        if (datefield.type!="date"){ //if browser doesn't support input type="date", load files for jQuery UI Date Picker
            document.write('<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />\n')
            document.write('<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"><\/script>\n')
            document.write('<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"><\/script>\n')
        }
    </script>

    <script>
        if (datefield.type!="date"){ //if browser doesn't support input type="date", initialize date picker widget:
            jQuery(function($){ //on document.ready
                $('#register_date').datepicker();
            })
        }
        if (datefield.type!="date"){ //if browser doesn't support input type="date", initialize date picker widget:
            jQuery(function($){ //on document.ready
                $('#birthday').datepicker();
            })
        }
    </script>


    <section class="patients">
        <div class="container">
            <div class="row">
                @if($errors->all())
                    <div style="color: #a94442; background-color: #f2dede; border-color: #ebccd1;" class="alert ">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        <div class="container">
            <div class="row">
                <form   action="/patient/{{$id}}"  method="post" class="form-horizontal form-label-left" >

                    <input type="hidden" name="_method" value="PUT">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">اسم المريض
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="name" required="required" name="name"
                                   class="form-control col-md-7 col-xs-12"
                                   value="{{$patient->name}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">رقم الهاتف
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="phone" required="required" name="phone"
                                   class="form-control col-md-7 col-xs-12"
                                   value="{{$patient->phone}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="register_date">تاريخ الكشف
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                            <input type="date" id="register_date" name="register_date" size="20"
                                   class="form-control col-md-7 col-xs-12"
                                   value="{{$patient->register_date}}"
                            />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email"> البريد الالكتروني
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                            <input type="date" id="email" name="email"
                                   value="{{$patient->email}}"
                                   size="20" class="form-control col-md-7 col-xs-12"/>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">الجنس</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div id="gender" class="btn-group" data-toggle="buttons" name="gender" >
                                <label class="btn btn-default" data-toggle-class="btn-primary"
                                       data-toggle-passive-class="btn-default">
                                    <input type="radio" name="gender" value="ذكر" > &nbsp; ذكر &nbsp;
                                </label>
                                <label class="btn btn-primary" data-toggle-class="btn-primary"
                                       data-toggle-passive-class="btn-default">
                                    <input type="radio" name="gender" value="انثي" > أنثى
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="birthday">تاريخ ميلاد المريض
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="date" name="birthday" id="birthday"
                                   class="date-picker form-control col-md-7 col-xs-12"
                                   required="required"
                                   value="{{$patient->birthday}}"
                            >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="height">
                            طول المريض <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="height" id="height"
                                   class=" form-control col-md-7 col-xs-12"
                                   value="{{$patient->height}}"
                                   required="required" >
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="weight"> وزن المريض
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="weight"
                                   value="{{$patient->height}}"
                                   id="weight" class=" form-control col-md-7 col-xs-12" required="required" >
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="age">
                            العمر <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="age" id="age"
                                   value="{{$patient->age}}"
                                   class=" form-control col-md-7 col-xs-12" required="required" >
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="health_condition">  الحاله الصحية للمريض


                            <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea name="health_condition"  cols="30" rows="10" id="health_condition">
                              {{$patient->health_condition}}
                            </textarea>
                        </div>
                    </div>



                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> نسبة الدهون في الجسم</label>
                        <div class="col-md-6 col-sm-6 col-xs-12"  id="body_fat" required="required" >
                            <select class="form-control" name="body_fat">
                                <option value="{{$patient->body_fat}}" >{{$patient->body_fat}} </option>
                                <option value="منخفض">منخفض</option>
                                <option value="متوسط"> متوسط</option>
                                <option value="مرتفع">مرتفع </option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> نشاط المريض</label>
                        <div class="col-md-6 col-sm-6 col-xs-12"  id="activity_level" required="required" >
                            <select class="form-control" name="activity_level" value="{{$patient->activity_level}}">
                                <option value="{{$patient->activity_level}}" >{{$patient->activity_level}} </option>
                                <option value="low">قليل</option>
                                <option value="medium"> متوسط</option>
                                <option value="High">مرتفع </option>
                                <option value="Vhigh">مرتفع  جدا</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">  انواع الطعام المفضلة للمريض</label>
                        <div class="col-md-6 col-sm-6 col-xs-12"  id="food_type_diet" required="required" >
                            <select class="form-control" value="{{$patient->food_type_diet}}" name="food_type_diet">
                                <option value="{{$patient->food_type_diet}}" >{{$patient->food_type_diet}} </option>
                                <option value="anything">anything</option>
                                <option value="paleo">paleo</option>
                                <option value="vegetarian">vegetarian</option>
                                <option value="vegan">vegan</option>
                                <option value="ketogenic">ketogenic</option>
                                <option value="mediterranean">mediterranean</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dont_eat">  نوع طعام لا يفضله المريض <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" value="البقوليات,اللحوم,الالبان"
                                   value="{{$patient->dont_eat}}"
                                   name="dont_eat" id="dont_eat" data-role="tagsinput">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dont_eat"> اطعمة تسبب الحساسية للمريض <span class="required">*</span>
                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">

                            <input type="text" value="{{$patient->sensitivity}}" name="sensitivity" id="sensitivity" data-role="tagsinput" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="blood"> ادوية مميعه للدم <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" value="{{$patient->blood}}" name="blood" id="blood" data-role="tagsinput" class="form-control col-md-7 col-xs-12"

                            >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sleeping_hours">عدد ساعات النوم
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="sleeping_hours"
                                   value="{{$patient->sleeping_hours}}"
                                   id="sleeping_hours" class=" form-control col-md-7 col-xs-12" required="required" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="water">كمية الماء المستهلك يوميا
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="water"
                                   value="{{$patient->sleeping_hours}}"
                                   id="water" class=" form-control col-md-7 col-xs-12" required="required" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="diet">هل قمت بعمل روجيم من قبل؟
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="diet"
                                   value="{{$patient->diet}}"
                                   id="diet" class=" form-control col-md-7 col-xs-12" required="required" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="diet_name">ما اسم النظام الذي اتبعته؟
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="diet_name"
                                   value="{{$patient->diet_name}}"
                                   id="diet_name" class=" form-control col-md-7 col-xs-12" required="required" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="diet_result">كم خسرت من الوزن؟
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="diet_result"
                                   value="{{$patient->diet_result}}"
                                   id="diet_result" class=" form-control col-md-7 col-xs-12" required="required" >
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="goal"> هدف المريض <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea name="goal"  cols="30" rows="10" id="goal">
                                {{$patient->goal}}
                            </textarea>
                        </div>
                    </div>




                    <input type="submit" name="submit" value="تعديل" class="btn btn-success btn-block">

                </form>
            </div>
        </div>
    </section>

    <script>
        CKEDITOR.replace('health_condition');
        CKEDITOR.replace('goal');
    </script>



@stop



