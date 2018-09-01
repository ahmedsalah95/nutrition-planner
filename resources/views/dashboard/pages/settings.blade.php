@extends('dashboard.master')
@section('content')

    <section class="home">
        <div class="container">
            <div class="col-lg-12">
                <div class="row tile_count">
                    <div class="col-md-4 col-sm-4 col-xs-12 tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> العدد الاجمالي للمرضي </span>
                        <div class="count">
                            <?php
                                $data = \App\Patient::all();
                                echo count($data);
                            ?>

                        </div>

                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i>المرضي الاناث  </span>
                        <div class="count">
                            <?php
                               $data = \App\Patient::where('gender','female')->get();
                            echo count($data);
                            ?>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i>المرضي الذكور  </span>
                        <div class="count">
                            <?php
                            $data = \App\Patient::where('gender','male')->get();
                            echo count($data);
                            ?>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


@stop