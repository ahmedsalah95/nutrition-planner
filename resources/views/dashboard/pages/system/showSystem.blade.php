@extends('dashboard.master')
<script src="{{url('/')}}/js/jquery.js"></script>
@section('content')


    <div id="printTable">
        <table class="table table-striped" border="1">
            <thead class="thead-dark">

            <tr>

                <th scope="col">السعرات الحرارية/كيبوهيدرات / الدهون / بروتينات</th>
                <th scope="col">ملاحظات</th>
                <th scope="col">عشاء</th>
                <th scope="col">وجبة خفيفة</th>
                <th scope="col">غداء</th>
                <th scope="col">وجبة خفيفة</th>
                <th scope="col">الافطار</th>
                <th scope="col">الايام</th>

            </tr>
            </thead>
            <tbody>
            <tr>

                <td align="left"><br><br>{!! $data->carbSum !!} , {!! $data->fatsSum  !!}, {!! $data->proteinSum !!}
                    ,{{$data->caloriesSum}}</td>

                <td align="right"><br><br>{{ $data->day1_notes }}</td>
                <td align="right">{!! str_replace('_','  ', $data->day1_dinner )    !!}</td>
                <td align="right">{!! str_replace('_','  ', $data->day1_break2 )  !!}</td>
                <td align="right">{!! str_replace('_','  ', $data->day1_lunch )  !!}</td>
                <td align="right">{!!str_replace('_','  ', $data->day1_break1 ) !!}</td>
                <td align="right">{!!  str_replace('_',' ', $data->day1_breakfast)  !!}</td>
                <th scope="row">السبت</th>
            </tr>

            <tr>

                <td align="left"><br><br>{!! $data->carbSum2 !!} , {!! $data->fatsSum2  !!}, {!! $data->proteinSum2 !!}
                    ,{{$data->caloriesSum2}}</td>
                <td align="right"><br><br>{{ $data->day2_notes }}</td>
                <td align="right">{!! str_replace('_','  ', $data->day2_dinner )    !!}</td>
                <td align="right">{!! str_replace('_','  ', $data->day2_break2 )  !!}</td>
                <td align="right">{!! str_replace('_','  ', $data->day2_lunch )  !!}</td>
                <td align="right">{!!str_replace('_','  ', $data->day2_break1 ) !!}</td>
                <td align="right">{!!  str_replace('_','  ', $data->day2_breakfast)  !!}</td>
                <th scope="row">الاحد</th>
            </tr>

            <tr>

                <td align="left"><br><br>{!! $data->carbSum3 !!} , {!! $data->fatsSum3  !!}, {!! $data->proteinSum3 !!}
                    ,{{$data->caloriesSum3}}</td>
                <td align="right"><br><br>{{ $data->day3_notes }}</td>
                <td align="right">{!! str_replace('_','  ', $data->day3_dinner )    !!}</td>
                <td align="right">{!! str_replace('_','  ', $data->day3_break2 )  !!}</td>
                <td align="right">{!! str_replace('_','  ', $data->day3_lunch )  !!}</td>
                <td align="right">{!!str_replace('_','  ', $data->day3_break1 ) !!}</td>
                <td align="right">{!!  str_replace('_','  ', $data->day3_breakfast)  !!}</td>
                <th scope="row">الاثنين</th>
            </tr>

            <tr>

                <td align="left"><br><br>{!! $data->carbSum4 !!} , {!! $data->fatsSum4  !!}, {!! $data->proteinSum4 !!}
                    ,{{$data->caloriesSum4}}</td>
                <td align="right"><br><br>{{ $data->day4_notes }}</td>
                <td align="right">{!! str_replace('_','  ', $data->day4_dinner )    !!}</td>
                <td align="right">{!! str_replace('_','  ', $data->day4_break2 )  !!}</td>
                <td align="right">{!! str_replace('_','  ', $data->day4_lunch )  !!}</td>
                <td align="right">{!!str_replace('_','  ', $data->day4_break1 ) !!}</td>
                <td align="right">{!!  str_replace('_','  ', $data->day4_breakfast)  !!}</td>
                <th scope="row">الثلاثاء</th>
            </tr>
            <tr>
                <td align="left"><br><br>{!! $data->carbSum5 !!} , {!! $data->fatsSum5  !!}, {!! $data->proteinSum5 !!}
                    ,{{$data->caloriesSum5}}</td>
                <td align="right"><br><br>{{ $data->day5_notes }}</td>
                <td align="right">{!! str_replace('_','  ', $data->day5_dinner )    !!}</td>
                <td align="right">{!! str_replace('_','  ', $data->day5_break2 )  !!}</td>
                <td align="right">{!! str_replace('_','  ', $data->day5_lunch )  !!}</td>
                <td align="right">{!!str_replace('_','  ', $data->day5_break1 ) !!}</td>
                <td align="right">{!!  str_replace('_','  ', $data->day5_breakfast)  !!}</td>
                <th scope="row">الاربعاء</th>
            </tr>

            <tr>
                <td align="left"><br><br>{!! $data->carbSum6 !!} , {!! $data->fatsSum6  !!}, {!! $data->proteinSum6 !!}
                    ,{{$data->caloriesSum6}}</td>
                <td align="right"><br><br>{{ $data->day6_notes }}</td>
                <td align="right">{!! str_replace('_','  ', $data->day6_dinner )    !!}</td>
                <td align="right">{!! str_replace('_','  ', $data->day6_break2 )  !!}</td>
                <td align="right">{!! str_replace('_','  ', $data->day6_lunch )  !!}</td>
                <td align="right">{!!str_replace('_','  ', $data->day6_break1 ) !!}</td>
                <td align="right">{!!  str_replace('_','  ', $data->day6_breakfast)  !!}</td>
                <th scope="row">الخميس</th>
            </tr>


            <td align="left"><br><br>{!! $data->carbSum7 !!} , {!! $data->fatsSum7  !!}, {!! $data->proteinSum7 !!}
                ,{{$data->caloriesSum7}}</td>
            <td align="right"><br><br>{{ $data->day7_notes }}</td>
            <td align="right">{!! str_replace('_','  ', $data->day7_dinner )    !!}</td>
            <td align="right">{!! str_replace('_','  ', $data->day7_break2 )  !!}</td>
            <td align="right">{!! str_replace('_','  ', $data->day7_lunch )  !!}</td>
            <td align="right">{!!str_replace('_','  ', $data->day7_break1 ) !!}</td>
            <td align="right">{!!  str_replace('_','  ', $data->day7_breakfast)  !!}</td>
            <th scope="row">الجمعة</th>

            </tbody>
        </table>
    </div>


    <center>
        <button type="button" class="btn btn-success" onclick="printContent('printTable')">اطبع هذا النظام</button>
    </center>


    <script type="text/javascript">
        <!--
        function printContent(id) {
            str = document.getElementById(id).innerHTML
            newwin = window.open('', 'printwin', 'left=100,top=100,width=400,height=400')
            newwin.document.write('<HTML>\n<HEAD>\n')
            newwin.document.write('<TITLE>Print Page</TITLE>\n')
            newwin.document.write('<script>\n')
            newwin.document.write('function chkstate(){\n')
            newwin.document.write('if(document.readyState=="complete"){\n')
            newwin.document.write('window.close()\n')
            newwin.document.write('}\n')
            newwin.document.write('else{\n')
            newwin.document.write('setTimeout("chkstate()",2000)\n')
            newwin.document.write('}\n')
            newwin.document.write('}\n')
            newwin.document.write('function print_win(){\n')
            newwin.document.write('window.print();\n')
            newwin.document.write('chkstate();\n')
            newwin.document.write('}\n')
            newwin.document.write('<\/script>\n')
            newwin.document.write('</HEAD>\n')
            newwin.document.write('<BODY onload="print_win()">\n')
            newwin.document.write(str)
            newwin.document.write('</BODY>\n')
            newwin.document.write('</HTML>\n')
            newwin.document.close()
        }

        //-->
    </script>

    <script>

    </script>

@stop
