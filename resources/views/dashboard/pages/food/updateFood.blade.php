@extends('dashboard.master')

@section('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="//cdn.ckeditor.com/4.9.0/standard/ckeditor.js"></script>
    <section class="category">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form   action="/food/{{$id}}"  method="post" class="form-horizontal form-label-left" >
                        <input type="hidden" name="_method" value="PUT">
                        @csrf

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="food_name">اسم الطعام
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="food_name" required="required" name="food_name"
                                       class="form-control col-md-7 col-xs-12"
                                       value="{{$food->food_name}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="calories">عدد السعرات الحرارية لكل ١٠٠ جرام
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="calories" required="required" name="calories"
                                       class="form-control col-md-7 col-xs-12"
                                       value="{{$food->calories}}">
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
                            <input type="submit" name="submit" value="حفظ" class="btn btn-success btn-block">
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>

        CKEDITOR.replace('description');
    </script>

@stop
