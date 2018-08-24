@extends('dashboard.master')

@section('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



    <section class="showPatient">
        <div class="container">
            <div class="row">




                        <div class="col-lg-4 col-md-4 col-sm-12">

                            <h2 class="text-center"> عن المريض</h2>
                            <table class="table table-hover">
                                <thead>

                                </thead>
                                <tbody>
                                <tr>
                                    <td>الاسم</td>
                                    <td>{{$patient->name}}</td>

                                </tr>
                                <tr>
                                    <td>رقم الهاتف</td>
                                    <td>{{$patient->phone}}</td>

                                </tr>

                                <tr>
                                    <td>البريد الاكترونى</td>
                                    <td>{{$patient->email}}</td>

                                </tr>

                                <tr>
                                    <td> تاريخ الكشف</td>
                                    <td>{{$patient->register_date}}</td>

                                </tr>

                                <tr>
                                    <td> تاريخ الميلاد</td>
                                    <td>{{$patient->birthday}}</td>

                                </tr>
                                <tr>
                                    <td>الجنس</td>
                                    <td>{{$patient->gender}}</td>

                                </tr>

                                <tr>
                                    <td>الوزن</td>
                                    <td>{{$patient->weight}}</td>

                                </tr>


                                <tr>
                                    <td>الطول</td>
                                    <td>{{$patient->height}}</td>

                                </tr>
                                <tr>
                                    <td>العمر</td>
                                    <td>{{$patient->age}}</td>

                                </tr>

                                <tr>
                                    <td>الحاله الصحية</td>
                                    <td>{!! $patient->health_condition  !!}</td>

                                </tr>

                                <tr>
                                    <td>نسبة الدهون </td>
                                    <td>{{$patient->body_fat}}</td>

                                </tr>

                                <tr>
                                    <td>الهدف  </td>
                                    <td>{!! $patient->goal !!}</td>

                                </tr>

                                <tr>
                                    <td>معدل النشاط  </td>
                                    <td>{{$patient->activity_level}}</td>

                                </tr>

                                <tr>
                                    <td>الطعام المفضل  </td>
                                    <td>{{$patient->food_type_diet}}</td>

                                </tr>

                                <tr>
                                    <td>المريض لا يأكل  </td>
                                    <td>{{$patient->dont_eat}}</td>

                                </tr>

                                </tbody>
                            </table>
                        </div>

                        <div class="col-lg-1 col-md-1 col-sm-12"></div>
                        <div class="col-lg-7 col-md-7 col-sm-12" style="background: lavender">
                            <h2 class="text-center">ملاحظات </h2>


                            <form action="/notes/save/{{$patient->id}}" method="post">
                                @csrf


                                    <div class="tab-unit">
                                        <div class="removable" >
                                            <div class="col-lg-10 col-md-10 col-sm-10">
                                                <div class="form-group">

                                                <textarea type="text" name="notes[]" class="form-control"

                                                          id="notes"  ></textarea>
                                                </div>
                                            </div>


                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                <label for="price_of_visitor" style="    visibility: hidden;"> .</label>
                                                <div class=" btn btn-danger form-control removeBt"
                                                     onclick="del(this)">حذف</div>
                                            </div>

                                        </div>


                                    </div>
                                    <hr>
                                    <button type="button" class="btn btn-warning btn-block appendText">
                                        اضف ملاحظة</button>

                                <input type="submit" name="submit" value="حفظ" class="btn btn-success btn-block">
                            </form>


                        </div>




            </div>
            <br>
            <hr>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12" >
                    <h1 class="text-center">الملاحظات</h1>

                    @if(isset($notes))

                        @foreach($notes as $note)

                            <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top: 30px">
                                <h5 class="pull-left"> وقت الملاحظة {{$note->created_at}}</h5>
                                <a href="/noteDeletion/{{$note->id}}/{{$patient->id}}" class="btn btn-danger pull-right">احذف</a>
                                <textarea name="" id="" cols="30" rows="10" readonly class="form-control">
                                    {{$note->note}}
                                </textarea>

                            </div>


                            <br>
                            <br>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>

    </section>

    <script>
        var row = '   <div class="removable" >\n' +
            '                                        <div class="col-lg-10 col-md-10 col-sm-10">\n' +
            '                                            <div class="form-group">\n' +
            '\n' +
            '                                                <textarea type="text" name="notes[]" class="form-control"\n' +
            '\n' +
            '                                                          id="notes"  ></textarea>\n' +
            '                                            </div>\n' +
            '                                        </div>\n' +
            '\n' +
            '\n' +
            '                                        <div class="col-lg-2 col-md-2 col-sm-2">\n' +
            '                                            <label for="price_of_visitor" style="    visibility: hidden;"> .</label>\n' +
            '                                            <div class=" btn btn-danger form-control removeBt"\n' +
            '                                                 onclick="del(this)">حذف</div>\n' +
            '                                        </div>\n' +
            '\n' +
            '                                    </div>';
    </script>
    <script>
        $('.appendText').on('click',function(){

            $('.tab-unit').append(row);


        });


        function del(e)
        {
            var x =$(e).parents('.removable');
            x.remove();
        }
    </script>

@stop