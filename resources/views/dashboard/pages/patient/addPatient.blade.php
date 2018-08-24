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
                <form   action="/patient"  method="post" class="form-horizontal form-label-left" >

                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">اسم المريض
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="name" required="required" name="name"
                                   class="form-control col-md-7 col-xs-12"
                                   value="{{old('name')}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">رقم المريض
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="phone" required="required" name="phone"
                                   class="form-control col-md-7 col-xs-12"
                                   value="{{old('phone')}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="register_date">تاريخ الكشف
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                            <input type="date" id="register_date" name="register_date" size="20"
                                   class="form-control col-md-7 col-xs-12"
                                   value="{{old('register_date')}}"
                            />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email"> البريد الالكتروني
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                            <input type="date" id="email" name="email"
                                   value="{{old('email')}}"
                                   size="20" class="form-control col-md-7 col-xs-12"/>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div id="gender" class="btn-group" data-toggle="buttons">
                                <label class="btn btn-default" data-toggle-class="btn-primary"
                                       data-toggle-passive-class="btn-default">
                                    <input type="radio" name="gender" value="male" > &nbsp; Male &nbsp;
                                </label>
                                <label class="btn btn-primary" data-toggle-class="btn-primary"
                                       data-toggle-passive-class="btn-default">
                                    <input type="radio" name="gender" value="female" > Female
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
                                    value="{{old('birthday')}}"
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
                                   value="{{old('height')}}"
                                   required="required" >
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="weight"> وزن المريض
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="weight"
                                   value="{{old('weight')}}"
                                   id="weight" class=" form-control col-md-7 col-xs-12" required="required" >
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="age">
                            السن <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="age" id="age"
                                   value="{{old('age')}}"
                                   class=" form-control col-md-7 col-xs-12" required="required" >
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="health_condition">  الحاله الصحية للمريض


                            <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea name="health_condition"  cols="30" rows="10" id="health_condition">
                                {{old('health_condition')}}
                            </textarea>
                        </div>
                    </div>



                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> نسبة الدهون في الجسم</label>
                        <div class="col-md-6 col-sm-6 col-xs-12"  id="body_fat" required="required" >
                            <select class="form-control" value="{{old('body_fat')}}" name="body_fat">
                                <option >اختر</option>
                                <option value="low">Low</option>
                                <option value="medium"> Medium</option>
                                <option value="High">High </option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> نشاط المريض</label>
                        <div class="col-md-6 col-sm-6 col-xs-12"  id="activity_level" required="required" >
                            <select class="form-control" name="activity_level">
                                <option >اختر</option>
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
                            <select class="form-control" name="food_type_diet">
                                <option >اختر</option>
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
                            <input type="text" value="البقوليات,اللحوم,الالبان" name="dont_eat" id="dont_eat" data-role="tagsinput">
                        </div>
                    </div>



                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="goal"> هدف المريض <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea name="goal"  cols="30" rows="10" id="goal"></textarea>
                        </div>
                    </div>




                            <input type="submit" name="submit" class="btn btn-success btn-block">

                </form>
            </div>
        </div>
    </section>

    <script>
        CKEDITOR.replace('health_condition');
        CKEDITOR.replace('goal');
    </script>



@stop



