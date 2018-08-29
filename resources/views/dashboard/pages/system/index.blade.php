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
                <a href="{{url('/')}}/system/create" class="btn btn-success btn-block">اضافة نظام جديد</a>
            </div>
        </div>
    </div>
    <br>
    <hr>
    <br>
    <br>
    <input class="form-control" id="myInput" type="text" placeholder="البحث بالاسم او الوصف">
    <br>
    <section class="indexPatient">
        <div class="container">
            <div class="row">

                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>اسم النظام</th>

                        <th> وصف النظام</th>

                        <th> مسح\تعديل </th>

                    </tr>
                    </thead>
                    <tbody id="myTable">
                    @if(isset($systems))
                        @foreach($systems as $system)
                            <tr>
                                <td>{{$system->system_name}}</td>
                                <td>{!! $system->system_desc !!}</td>

                                <td>
                                    <a href="/system/{{$system->id}}/edit" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                    <a href="#" onclick="event.preventDefault();
                                            document.getElementById('delete-form{{$system->id}}').submit();"
                                       style="font-size: 20px;margin-right: 5px;color: #D73925;">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    <form id="delete-form{{$system->id}}"
                                          action="{{url('/system/'.$system->id) }}"
                                          method="post"
                                          style="display: none;">
                                        @csrf
                                        <input type="hidden" name="_method" value="delete"/>


                                    </form>
                                    <a href="/system/{{$system->id}}" class="btn btn-success">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @endif

                    </tbody>

                </table>

                @if(isset($systems))
                    <center>{{$systems->links()}}</center>
                @endif
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