@extends('dashboard.master')

@section('content')


<div id="printTable">    <table class="table table-striped" border="1">
        <thead class="thead-dark">
        <tr>
            <th scope="col">الايام</th>
            <th scope="col">كيبوهيدرات / الدهون / بروتينات</th>
            <th scope="col">ملاحظات</th>
            <th scope="col">عشاء</th>
            <th scope="col">وجبة خفيفة</th>
            <th scope="col">غداء</th>
            <th scope="col">وجبة خفيفة</th>
            <th scope="col">الافطار</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">السبت</th>
            <td>{{$data->carbSum }} , {{$data->fatsSum }} , {{$data->proteinSum}}</td>
            <td>{{$data->day1_notes}}</td>
            <td>{{$data->day1_dinner}}</td>
            <td>{{$data->day1_break2}}</td>
            <td>{{$data->day1_lunch}}</td>
            <td>{{$data->day1_break1}}</td>
            <td>{{$data->day1_breakfast}}</td>
        </tr>

        <tr>
            <th scope="row">الاحد</th>
            <td>{{$data->carbSum2 }} , {{$data->fatsSum2 }} , {{$data->proteinSum2}}</td>
            <td>{{$data->day2_notes}}</td>
            <td>{{$data->day2_dinner}}</td>
            <td>{{$data->day2_break2}}</td>
            <td>{{$data->day2_lunch}}</td>
            <td>{{$data->day2_break1}}</td>
            <td>{{$data->day2_breakfast}}</td>
        </tr>

        <tr>
            <th scope="row">الاثنين</th>
            <td>{{$data->carbSum3 }} , {{$data->fatsSum3 }} , {{$data->proteinSum3}}</td>
            <td>{{$data->day3_notes}}</td>
            <td>{{$data->day3_dinner}}</td>
            <td>{{$data->day3_break2}}</td>
            <td>{{$data->day3_lunch}}</td>
            <td>{{$data->day3_break1}}</td>
            <td>{{$data->day3_breakfast}}</td>
        </tr>

        <tr>
            <th scope="row">الثلاثاء</th>
            <td>{{$data->carbSum4 }} , {{$data->fatsSum4 }} , {{$data->proteinSum4}}</td>
            <td>{{$data->day4_notes}}</td>
            <td>{{$data->day4_dinner}}</td>
            <td>{{$data->day4_break2}}</td>
            <td>{{$data->day4_lunch}}</td>
            <td>{{$data->day4_break1}}</td>
            <td>{{$data->day4_breakfast}}</td>
        </tr>
        <tr>
            <th scope="row">الادبعاء</th>
            <td>{{$data->carbSum5 }} , {{$data->fatsSum5}} , {{$data->proteinSum5}}</td>
            <td>{{$data->day5_notes}}</td>
            <td>{{$data->day5_dinner}}</td>
            <td>{{$data->day5_break2}}</td>
            <td>{{$data->day5_lunch}}</td>
            <td>{{$data->day5_break1}}</td>
            <td>{{$data->day5_breakfast}}</td>
        </tr>

        <tr>
            <th scope="row">الخميس </th>
            <td>{{$data->carbSum6 }} , {{$data->fatsSum6 }} , {{$data->proteinSum6}}</td>
            <td>{{$data->day6_notes}}</td>
            <td>{{$data->day6_dinner}}</td>
            <td>{{$data->day6_break2}}</td>
            <td>{{$data->day6_lunch}}</td>
            <td>{{$data->day6_break1}}</td>
            <td>{{$data->day6_breakfast}}</td>
        </tr>

        <th scope="row">الجمعة</th>
        <td>{{$data->carbSum7 }} , {{$data->fatsSum7 }} , {{$data->proteinSum7}}</td>
        <td>{{$data->day7_notes}}</td>
        <td>{{$data->day7_dinner}}</td>
        <td>{{$data->day7_break2}}</td>
        <td>{{$data->day7_lunch}}</td>
        <td>{{$data->day7_break1}}</td>
        <td>{{$data->day7_breakfast}}</td>

        </tbody>
    </table></div>


    <center>
        <button type="button" class="btn btn-success"  onclick="printContent('printTable')">اطبع هذا النظام</button>
    </center>


<script type="text/javascript">
    <!--
    function printContent(id){
        str=document.getElementById(id).innerHTML
        newwin=window.open('','printwin','left=100,top=100,width=400,height=400')
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

@stop