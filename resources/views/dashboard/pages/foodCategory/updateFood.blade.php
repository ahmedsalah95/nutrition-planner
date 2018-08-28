@extends('dashboard.master')

@section('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="//cdn.ckeditor.com/4.9.0/standard/ckeditor.js"></script>
    <section class="category">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form   action="/foodCategory/{{$id}}"  method="post" class="form-horizontal form-label-left" >
                        <input type="hidden" name="_method" value="PUT">
                        @csrf

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">اسم التصنيف
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="name" required="required" name="name"
                                       class="form-control col-md-7 col-xs-12"
                                       value="{{$data->name}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">الوصف
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea name="description"  cols="30" rows="10" id="description">
                                {{$data->description}}
                            </textarea>
                            </div>
                        </div>

                        <input type="submit" name="submit" value="حفظ" class="btn btn-success btn-block">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>

        CKEDITOR.replace('description');
    </script>

@stop
