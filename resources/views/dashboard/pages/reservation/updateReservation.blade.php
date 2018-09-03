@extends('dashboard.master')

@section('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <script type="text/javascript">
        var datefield=document.createElement("input")
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
                $('#reservation_date').datepicker();
            })
        }

    </script>

    <section class="category">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form   action="/reservation/{{$id}}"  method="post" class="form-horizontal form-label-left" >

                        <input type="hidden" name="_method" value="PUT">
                        @csrf

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="patient_name">اسم المريض
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="food_name" required="required" name="patient_name"
                                       class="form-control col-md-7 col-xs-12"
                                       value="{{$data->patient_name}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="food_name">الموبايل
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="food_name" required="required" name="patient_number"
                                       class="form-control col-md-7 col-xs-12"
                                       value="{{$data->patient_number}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="register_date">تاريخ الكشف
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <input type="date" id="reservation_date" name="reservation_date" size="20"
                                       class="form-control col-md-7 col-xs-12"
                                       value="{{$data->reservation_date}}"
                                />
                            </div>
                        </div>




                        <div class="form-group">
                            <input type="submit" name="submit" value="حفظ" class="btn btn-success btn-block">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>



@stop
