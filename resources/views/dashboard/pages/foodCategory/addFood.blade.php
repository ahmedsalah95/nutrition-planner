@extends('dashboard.master')

@section('content')

    <script src="{{url('/')}}/js/jquery.js"></script>
    <script src="{{url('/')}}/ckeditor/ckeditor.js"></script>
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
                <form   action="/foodCategory"  method="post" class="form-horizontal form-label-left" >

                    @csrf

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">اسم التصنيف
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="name" required="required" name="name"
                                   class="form-control col-md-7 col-xs-12"
                                   value="{{old('name')}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">الوصف
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea name="description"  cols="30" rows="10" id="description">
                                {{old('description')}}
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
