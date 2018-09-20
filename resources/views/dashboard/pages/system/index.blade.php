@extends('dashboard.master')

@section('content')


    <script src="{{url('/')}}/js/jquery.js"></script>





    @if($errors->all())
        <div style="color: #a94442; background-color: #f2dede; border-color: #ebccd1;" class="alert ">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <style>
        .t .pagination>.active>a,.t .pagination>.active>a:focus,.t .pagination>.active>a:hover,.t .pagination>.active>span,.t .pagination>.active>span:focus, .pagination>.active>span:hover {
            z-index: 3;
            color: #fff;
            cursor: default;
            background-color: #cd3266;
            border-color: #cd3266;
        }
        .pagination>li>a:focus, .pagination>li>a:hover, .pagination>li>span:focus, .pagination>li>span:hover {
            z-index: 2;
            color: #e698b2;
            background-color: #eee;
            border-color: #ddd;
        }

        .pagination>li>a, .pagination>li>span {
            position: relative;
            float: left;
            padding: 6px 12px;
            margin-left: -1px;
            line-height: 1.42857143;
            color: #e698b2;
            text-decoration: none;
            background-color: #fff;
            border: 1px solid #ddd;
        }
    </style>

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
                    <center class="t">{{$systems->links()}}</center>
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