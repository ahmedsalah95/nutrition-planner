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
            <?php
            $allReservations = \App\Reservation::all();
            $current = strtotime(date("m/d/Y"));
            ?>
            <div class="col-lg-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2> كشوفات اليوم <small>  </small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>

                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>

                                <th>اسم المريض</th>
                                <th>رقم الموبايل</th>
                                <th> تاريخ الكشف</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                             $reservations =\App\Reservation::where('reservation_date',date("m/d/Y"))->get();


                            ?>
                            @foreach($reservations as $r)
                            <tr>
                                <th scope="row">{{$r->id}}</th>
                                <td>{{$r->patient_name}}</td>
                                <td>{{$r->patient_number}}</td>
                                <td>{{$r->reservation_date}}</td>

                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2> كشوفات الغد <small>  </small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>

                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>

                                <th>اسم المريض</th>
                                <th>رقم الموبايل</th>
                                <th> تاريخ الكشف</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $date1 = new DateTime("now");
                            $date2 = new DateTime("tomorrow");


                            $reservations =\App\Reservation::where('reservation_date',date("m/d/Y"))->get();


                            ?>
                            @foreach($reservations as $r)
                                <tr>
                                    <th scope="row">{{$r->id}}</th>
                                    <td>{{$r->patient_name}}</td>
                                    <td>{{$r->patient_number}}</td>
                                    <td>{{$r->reservation_date}}</td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>


@stop