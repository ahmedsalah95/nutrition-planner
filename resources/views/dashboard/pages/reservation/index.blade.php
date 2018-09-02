@extends('dashboard.master')

@section('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    @if($errors->all())
        <div style="color: #a94442; background-color: #f2dede; border-color: #ebccd1;" class="alert ">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif



    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <a href="{{url('/')}}/reservation/create" class="btn btn-success btn-block">اضافة موعد جديد</a>
            </div>
        </div>
    </div>
    <br>
    <hr>
    <br>
    <br>
    <input class="form-control" id="myInput" type="text" placeholder="البحث بالاسم او رقم الهاتف">
    <br>
    <section class="indexPatient">
        <div class="container">
            <div class="row">

                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>الاسم</th>

                        <th>رقم الهاتف</th>
                        <th>تاريخ الكشف</th>
                        <th> مسح\تعديل </th>
                    </tr>
                    </thead>
                    <tbody id="myTable">
                    @foreach($patients as $patient)
                        <tr>
                            <td>{{$patient->patient_name}}</td>
                            <td>{{$patient->patient_number}}</td>
                            <td>{{$patient->reservation_date}}</td>
                            <td>

                                <a href="/reservation/{{$patient->id}}/edit" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                <a href="#" onclick="event.preventDefault();
                                        document.getElementById('delete-form{{$patient->id}}').submit();"
                                   style="font-size: 20px;margin-right: 5px;color: #D73925;">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                <form id="delete-form{{$patient->id}}"
                                      action="{{url('/patient/'.$patient->id) }}"
                                      method="post"
                                      style="display: none;">
                                    @csrf
                                    <input type="hidden" name="_method" value="delete"/>

                                </form>
                            </td>
                        </tr>
                    @endforeach


                    </tbody>

                </table>

                <center>{{$patients->links()}}</center>
            </div>
        </div>


    </section>



    <script>
        $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
@stop