@extends('dashboard.master')

@section('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <section class="category">
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
                    <form   action="{{url('/')}}/food"  method="post" class="form-horizontal form-label-left" >

                        @csrf

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="food_name">اسم الطعام
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="food_name" required="required" name="food_name"
                                       class="form-control col-md-7 col-xs-12"
                                       value="{{old('food_name')}}">
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="category_id">
                                التصنيف
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="category_id" id="category_id">

                                    @if ($categories->count())

                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" >{{ $category->name }}</option>


                                        @endforeach
                                    @endif

                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="calories">وحده القياس / المكيال
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="unit" required="required" name="unit"
                                       class="form-control col-md-7 col-xs-12"
                                       value="{{old('unit')}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="calories">السعرات الحرارية في كل مكيال
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="calories" required="required" name="calories"
                                       class="form-control col-md-7 col-xs-12"
                                       value="{{old('calories')}}">
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="carb_calories">الكايبوهيدرات في كل مكيال
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="carb_calories" required="required" name="carb_calories"
                                       class="form-control col-md-7 col-xs-12"
                                       value="{{old('carb_calories')}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="proteins_calories">البروتينات في كل مكيال
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="proteins_calories" required="required" name="proteins_calories"
                                       class="form-control col-md-7 col-xs-12"
                                       value="{{old('proteins_calories')}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="calories">الدهون في كل مكيال
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="fats_calories" required="required" name="fats_calories"
                                       class="form-control col-md-7 col-xs-12"
                                       value="{{old('fats_calories')}}">
                            </div>
                        </div>









                        <div class="form-group">
                            <input type="submit" name="submit" value="حفظ" class="btn btn-success btn-block">
                        </div>

                    </form>
                </div>


                <div class="col-lg-12" >
                    <div class="col-lg-12">
                        <h5 class="text-center">اذا اردت حساب عدد السعرات الحرارية في الغرام الواحد رجاء استخدم الاداه التاليه </h5>
                    </div>
                    <center>
                        <button class="btn btn-warning" id="calculator">احسب</button>
                    </center>

                    <div class="row" id="calculatorShow" style="display: none">
                        <br><br><br><br>
                        <div class="text-center">
                            <label for="value">عدد السعرات في كل ١٠٠ غرام</label>
                            <input type="number" onblur="calc();" class="form-control col-md-7 col-xs-12"

                                   id="value" placeholder="عدد السعرات الحرارية في كل ١٠٠ غرام ">
                            <br>
                            <label for="writeValue">عدد السعرات في الغرام الواحد</label>

                            <input type="text" id="writeValue"
                                   class="form-control col-md-7 col-xs-12"
                                   placeholder="عدد السعرات في الغرام الواحد">

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        function calc()
        {
           var v = $('#value').val();

            $('#writeValue').val(parseFloat(v/100));
        }

        // for opening the calculator


            $('#calculator').on('click',function(){

                $('#calculatorShow').toggle();
            });



    </script>
@stop
