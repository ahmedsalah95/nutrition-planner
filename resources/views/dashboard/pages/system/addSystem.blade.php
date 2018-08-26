@extends('dashboard.master')

@section('content')

    <link rel="stylesheet" href="{{url('/')}}/vendors/fm.tagator.jquery.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script src="{{url('/')}}/vendors/fm.tagator.jquery.js"></script>
    <script src="//cdn.ckeditor.com/4.9.0/standard/ckeditor.js"></script>



    <section class="system">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form   action="/patient"  method="post" class="form-horizontal form-label-left" >
                        @csrf

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="system_name">اسم النظام
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="system_name" required="required" name="system_name"
                                       class="form-control col-md-7 col-xs-12"
                                       value="{{old('system_name')}}">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="system_desc"> وصف النظام


                                <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea name="system_desc"  cols="30" rows="10" id="system_desc" class="form-control">
                                {{old('system_desc')}}
                            </textarea>
                            </div>
                        </div>

                        <hr>
                      <div class="form-group">

                          <h2 class="text-center">اليوم الاول</h2>


                          <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day1_breakfast">الافطار
                                  <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="example" name="example"
                                         class="form-control col-md-7 col-xs-12"

                                  >
                              </div>


                          </div>











                      </div>


                    </form>
                </div>
            </div>
        </div>
        <?php

            $data = \App\Food::all();
      //  $items = array();
        /*    foreach ($data as $d)
                {


                    array_push($items,$d->food_name);
                }

                print_r($items);

 */
        ?>
    </section>

    <script>
        CKEDITOR.replace('system_desc');
    </script>
    <script src="{{url('/')}}/js/typeahead.js"></script>



    <script>

        var pausecontent = new Array();

        <?php foreach ($data as $item) {

            ?>

        pausecontent.push('<?php echo $item->food_name; ?>');

        <?php }?>

        $('#example').tagator({

            autocomplete: pausecontent,
            showAllOptionsOnFocus: true,


        });

    </script>



@stop