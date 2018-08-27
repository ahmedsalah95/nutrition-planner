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
                    <form   action="/system"  method="post" class="form-horizontal form-label-left" >
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

                          <div class="text-center">



                              <select id="continents">
                                  <option value = "0">all</option>
                                  <option value="1">carbs</option>
                                  <option value="2">Fats</option>
                                  <option value="3">proteins</option>


                              </select>
                              <select id="selectcountries"></select>

                              <select name="gmValue" id="gmValue" >
                                  <option value="10">10 gm</option>
                                  <option value="20">20 gm</option>
                                  <option value="30">30 gm</option>
                                  <option value="50">50 gm</option>
                                  <option value="100">100 gm</option>
                                  <option value="200">200 gm</option>
                                  <option value="300">300 gm</option>
                                  <option value="400">400 gm</option>
                                  <option value="500">500 gm</option>
                                  <option value="600">600 gm</option>
                              </select>

                              <button type="button" class="btn btn-success" onclick="getData()">أضف</button>

                          </div>

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
                              <br>
                              <br>
                              <br>

                              <div class="col-lg-12">
                                  <div class="col-lg-4 col-md-4 col-sm-12">
                                      <input type="text" id="carbSum" class="form-control"
                                             placeholder="مجموع الكربهيدرات">
                                  </div>
                                  <div class="col-lg-4 col-md-4 col-sm-12">
                                      <input type="text" id="fatsSum" class="form-control"
                                             placeholder="مجموع الدهون">
                                  </div>
                                  <div class="col-lg-4 col-md-4 col-sm-12">
                                      <input type="text" id="proteinSum" class="form-control"
                                             placeholder="مجموع البروتينات">
                                  </div>
                              </div>

                          </div>



                      </div>

                        <input type="submit" name="submit" value="حفظ" class="btn btn-success btn-block">
                    </form>
                </div>
            </div>
        </div>
        <?php

            $data = \App\Food::all();
            $carbs=\App\Food::where('category_id',1)->get();
            $fats=\App\Food::where('category_id',2)->get();
            $proteins=\App\Food::where('category_id',3)->get();

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

    <script>


        var carb = new Array();

        <?php foreach ($data as $item) {

        ?>

        carb.push('<?php echo $item->food_name.' - '.$item->gm.' - '.$item->category_id; ?>');

        <?php }?>


        var carbs = new Array();

        <?php foreach ($carbs as $item) {

        ?>

        carbs.push('<?php echo $item->food_name.' - '.$item->gm.' - '.$item->category_id; ?>');

        <?php }?>


        var fats = new Array();

        <?php foreach ($fats as $item) {

        ?>

        fats.push('<?php echo $item->food_name.' - '.$item->gm.' - '.$item->category_id; ?>');

        <?php }?>


        var proteins = new Array();

        <?php foreach ($proteins as $item) {

        ?>

        proteins.push('<?php echo $item->food_name.' - '.$item->gm.' - '.$item->category_id; ?>');

        <?php }?>

    </script>

    <script>

        function initSelectors(){
            // next 2 statements should generate error message, see console
            MAIN.createRelatedSelector();
            MAIN.createRelatedSelector(document.querySelector('#continents') );

            //countries
            MAIN.createRelatedSelector
            ( document.querySelector('#continents')           // from select element
                ,document.querySelector('#selectcountries')      // to select element
                ,{                                               // values object


                    carbs: carbs,
                    Fats: fats,
                    proteins: proteins
                }
                ,function(a,b){return a>b ? 1 : a<b ? -1 : 0;}   // sort method
            );




        }

        //create MAIN namespace
        (function(ns){ // don't pollute the global namespace

            function create(from, to, obj, srt){
                if (!from) {
                    throw CreationError('create: parameter selector [from] missing');
                }
                if (!to) {
                    throw CreationError('create: parameter related selector [to] missing');
                }
                if (!obj) {
                    throw CreationError('create: related filter definition object [obj] missing');
                }

                //retrieve all options from obj and add it
                obj.all = (function(o){
                    var a = [];
                    for (var l in o) {
                        a = /array/i.test (o[l].constructor) ? a.concat(o[l]) : a;
                    }
                    return a.sort(srt);
                }(obj));
                // initialize and populate to-selector with all
                populator.call( from
                    ,null
                    ,to
                    ,obj
                    ,srt
                );

                // assign handler
                from.onchange = populator;

                function initStatics(fn,obj){
                    for (var l in obj) {
                        if (obj.hasOwnProperty(l)){
                            fn[l] = obj[l];
                        }
                    }
                    fn.initialized = true;
                }

                function populator(e, relatedto, obj, srt){
                    // set pseudo statics
                    var self = populator;
                    if (!self.initialized) {
                        initStatics(self,{optselects:obj,optselectsall:obj.all,relatedTo:relatedto,sorter:srt || false});
                    }

                    if (!self.relatedTo){
                        throw 'not related to a selector';
                    }
                    // populate to-selector from filter/all
                    var optsfilter = this.selectedIndex < 1
                        ? self.optselectsall
                        : self.optselects[this.options[this.selectedIndex].firstChild.nodeValue]
                        ,cselect = self.relatedTo
                        ,opts = cselect.options;
                    if (self.sorter) optsfilter.sort(self.sorter);
                    opts.length = 0;
                    for (var i=0;i<optsfilter.length;i+=1){
                        opts[i] = new Option(optsfilter[i],i);
                    }
                }
            }

            // custom Error
            function CreationError(mssg){
                return {name:'CreationError',message:mssg};
            }

            // return the create method with some error handling
            window[ns] = {
                createRelatedSelector: function(from,to,obj,srt) {
                    try {
                        if (arguments.length<1) {
                            throw CreationError('no parameters');
                        }
                        create.call(null,from,to,obj,srt);
                    }
                    catch(e) { console.log('createRelatedSelector ->',e.name,'\n'
                        + e.message +
                        '\ncheck parameters'); }
                }
            };
        }('MAIN'));
        //initialize
        initSelectors();
    </script>
    <script>
        function getData() {

            var x =  $("#gmValue option:selected").val();
            var y = $("#selectcountries option:selected").text();
            var t = y.split(/[ ,]+/);

            if(t[4] ==1)
            {
              var value = parseFloat($('#carbSum').val()) ;

             if(value)
             {
                 value +=parseFloat(t[2]*x);
                 $('#carbSum').val(value);

             }else
             {
                 $('#carbSum').val(parseFloat(t[2])*x);
             }

            }else if(t[4] ==2)
            {
                var value = parseFloat($('#fatsSum').val()) ;

                if(value)
                {
                    value +=parseFloat(t[2]*x);
                    $('#fatsSum').val(value);

                }else
                {
                    $('#fatsSum').val(parseFloat(t[2])*x);
                }

            }else
            {
                var value = parseFloat($('#proteinSum').val()) ;

                if(value)
                {
                    value +=parseFloat(t[2]*x);
                    $('#proteinSum').val(value);

                }else
                {
                    $('#proteinSum').val(parseFloat(t[2])*x);
                }
            }



        }

    </script>



@stop