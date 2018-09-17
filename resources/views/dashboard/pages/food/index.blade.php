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
                <a href="{{url('/')}}/food/create" class="btn btn-success btn-block">اضافة نوع طعام جديد</a>
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
                        <th>الاسم</th>


                        <th>القسم</th>
                        <th> مسح\تعديل </th>

                    </tr>
                    </thead>
                    <tbody id="myTable">
                    @if(isset($foods))
                        @foreach($foods as $food)
                            <tr>
                                <td>{{$food->food_name}}</td>

                                <td>

                                    <?php

                                      $cat =  \App\Foodcategory::where('id',$food->category_id)->first();


                                    ?>
                                    @if(isset($cat))
                                    {{


                                $cat->name}}
                                @endif
                                </td>

                                <td>

                                    <a href="/food/{{$food->id}}/edit" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                    <a href="#" onclick="event.preventDefault();
                                            document.getElementById('delete-form{{$food->id}}').submit();"
                                       style="font-size: 20px;margin-right: 5px;color: #D73925;">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    <form id="delete-form{{$food->id}}"
                                          action="{{url('/food/'.$food->id) }}"
                                          method="post"
                                          style="display: none;">
                                        @csrf
                                        <input type="hidden" name="_method" value="delete"/>

                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif

                    </tbody>

                </table>

                @if(isset($foods))
                    <center class="t">{{$foods->links()}}</center>
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