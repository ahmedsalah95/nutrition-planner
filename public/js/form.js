
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
            //    $('#day1_breakfast').focus();



            var current =  $('#day1_breakfast').text();
            var currentVal =$('#day1_breakfast').val();
            $('#day1_breakfast').val(" ");
            $('#day1_breakfast').text(" ");
            $('#day1_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day1_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }

        else
        {
            $('#carbSum').val(parseFloat(t[2])*x);

            var current =  $('#day1_breakfast').text();
            var currentVal =$('#day1_breakfast').val();
            $('#day1_breakfast').val(" ");
            $('#day1_breakfast').text(" ");
            $('#day1_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day1_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);


        }

    }


    else if(t[4] ==2)
    {
        var value = parseFloat($('#fatsSum').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#fatsSum').val(value);
            var current =  $('#day1_breakfast').text();
            var currentVal =$('#day1_breakfast').val();
            $('#day1_breakfast').val(" ");
            $('#day1_breakfast').text(" ");
            $('#day1_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day1_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);


        }else
        {
            $('#fatsSum').val(parseFloat(t[2])*x);
            var current =  $('#day1_breakfast').text();
            var currentVal =$('#day1_breakfast').val();
            $('#day1_breakfast').val(" ");
            $('#day1_breakfast').text(" ");
            $('#day1_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day1_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }

    }

    else
    {
        var value = parseFloat($('#proteinSum').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#proteinSum').val(value);

            var current =  $('#day1_breakfast').text();
            var currentVal =$('#day1_breakfast').val();
            $('#day1_breakfast').val(" ");
            $('#day1_breakfast').text(" ");
            $('#day1_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day1_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#proteinSum').val(parseFloat(t[2])*x);
            var current =  $('#day1_breakfast').text();
            var currentVal =$('#day1_breakfast').val();
            $('#day1_breakfast').val(" ");
            $('#day1_breakfast').text(" ");
            $('#day1_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day1_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }
    }



}

function getData1_lunch() {

    var x =  $("#gmValue1_lunch option:selected").val();
    var y = $("#selectcountries1_lunch option:selected").text();
    var t = y.split(/[ ,]+/);

    if(t[4] ==1)
    {
        var value = parseFloat($('#carbSum').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#carbSum').val(value);

            var current =  $('#day1_lunch').text();
            var currentVal =$('#day1_lunch').val();
            $('#day1_lunch').val(" ");
            $('#day1_lunch').text(" ");
            $('#day1_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day1_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#carbSum').val(parseFloat(t[2])*x);

            var current =  $('#day1_lunch').text();
            var currentVal =$('#day1_lunch').val();
            $('#day1_lunch').val(" ");
            $('#day1_lunch').text(" ");
            $('#day1_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day1_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }

    }else if(t[4] ==2)
    {
        var value = parseFloat($('#fatsSum').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#fatsSum').val(value);
            var current =  $('#day1_lunch').text();
            var currentVal =$('#day1_lunch').val();
            $('#day1_lunch').val(" ");
            $('#day1_lunch').text(" ");
            $('#day1_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day1_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#fatsSum').val(parseFloat(t[2])*x);
            var current =  $('#day1_lunch').text();
            var currentVal =$('#day1_lunch').val();
            $('#day1_lunch').val(" ");
            $('#day1_lunch').text(" ");
            $('#day1_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day1_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }

    }else
    {
        var value = parseFloat($('#proteinSum').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#proteinSum').val(value);
            var current =  $('#day1_lunch').text();
            var currentVal =$('#day1_lunch').val();
            $('#day1_lunch').val(" ");
            $('#day1_lunch').text(" ");
            $('#day1_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day1_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#proteinSum').val(parseFloat(t[2])*x);
            var current =  $('#day1_lunch').text();
            var currentVal =$('#day1_lunch').val();
            $('#day1_lunch').val(" ");
            $('#day1_lunch').text(" ");
            $('#day1_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day1_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }
    }



}

function getData1_dinner() {

    var x =  $("#gmValue1_dinner option:selected").val();
    var y = $("#selectcountries1_dinner option:selected").text();
    var t = y.split(/[ ,]+/);

    if(t[4] ==1)
    {
        var value = parseFloat($('#carbSum').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#carbSum').val(value);

            var current =  $('#day1_dinner').text();
            var currentVal =$('#day1_dinner').val();
            $('#day1_dinner').val(" ");
            $('#day1_dinner').text(" ");
            $('#day1_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day1_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#carbSum').val(parseFloat(t[2])*x);

            var current =  $('#day1_dinner').text();
            var currentVal =$('#day1_dinner').val();
            $('#day1_dinner').val(" ");
            $('#day1_dinner').text(" ");
            $('#day1_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day1_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }

    }else if(t[4] ==2)
    {
        var value = parseFloat($('#fatsSum').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#fatsSum').val(value);
            var current =  $('#day1_dinner').text();
            var currentVal =$('#day1_dinner').val();
            $('#day1_dinner').val(" ");
            $('#day1_dinner').text(" ");
            $('#day1_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day1_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#fatsSum').val(parseFloat(t[2])*x);
            var current =  $('#day1_dinner').text();
            var currentVal =$('#day1_dinner').val();
            $('#day1_dinner').val(" ");
            $('#day1_dinner').text(" ");
            $('#day1_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day1_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }

    }else
    {
        var value = parseFloat($('#proteinSum').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#proteinSum').val(value);
            var current =  $('#day1_dinner').text();
            var currentVal =$('#day1_dinner').val();
            $('#day1_dinner').val(" ");
            $('#day1_dinner').text(" ");
            $('#day1_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day1_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#proteinSum').val(parseFloat(t[2])*x);
            var current =  $('#day1_dinner').text();
            var currentVal =$('#day1_dinner').val();
            $('#day1_dinner').val(" ");
            $('#day1_dinner').text(" ");
            $('#day1_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day1_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }
    }



}

function getData1_break1() {

    var x =  $("#gmValue1_break1 option:selected").val();
    var y = $("#selectcountries1_break1 option:selected").text();
    var t = y.split(/[ ,]+/);

    if(t[4] ==1)
    {
        var value = parseFloat($('#carbSum').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#carbSum').val(value);

            var current =  $('#day1_break1').text();
            var currentVal =$('#day1_break1').val();
            $('#day1_break1').val(" ");
            $('#day1_break1').text(" ");
            $('#day1_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day1_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#carbSum').val(parseFloat(t[2])*x);

            var current =  $('#day1_break1').text();
            var currentVal =$('#day1_break1').val();
            $('#day1_break1').val(" ");
            $('#day1_break1').text(" ");
            $('#day1_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day1_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }

    }else if(t[4] ==2)
    {
        var value = parseFloat($('#fatsSum').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#fatsSum').val(value);
            var current =  $('#day1_break1').text();
            var currentVal =$('#day1_break1').val();
            $('#day1_break1').val(" ");
            $('#day1_break1').text(" ");
            $('#day1_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day1_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#fatsSum').val(parseFloat(t[2])*x);
            var current =  $('#day1_break1').text();
            var currentVal =$('#day1_break1').val();
            $('#day1_break1').val(" ");
            $('#day1_break1').text(" ");
            $('#day1_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day1_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }

    }else
    {
        var value = parseFloat($('#proteinSum').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#proteinSum').val(value);
            var current =  $('#day1_break1').text();
            var currentVal =$('#day1_break1').val();
            $('#day1_break1').val(" ");
            $('#day1_break1').text(" ");
            $('#day1_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day1_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#proteinSum').val(parseFloat(t[2])*x);
            var current =  $('#day1_break1').text();
            var currentVal =$('#day1_break1').val();
            $('#day1_break1').val(" ");
            $('#day1_break1').text(" ");
            $('#day1_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day1_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }
    }



}

function getData1_break2() {

    var x =  $("#gmValue1_break2 option:selected").val();
    var y = $("#selectcountries1_break2 option:selected").text();
    var t = y.split(/[ ,]+/);

    if(t[4] ==1)
    {
        var value = parseFloat($('#carbSum').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#carbSum').val(value);

            var current =  $('#day1_break2').text();
            var currentVal =$('#day1_break2').val();
            $('#day1_break2').val(" ");
            $('#day1_break2').text(" ");
            $('#day1_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day1_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#carbSum').val(parseFloat(t[2])*x);

            var current =  $('#day1_break2').text();
            var currentVal =$('#day1_break2').val();
            $('#day1_break2').val(" ");
            $('#day1_break2').text(" ");
            $('#day1_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day1_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }

    }else if(t[4] ==2)
    {
        var value = parseFloat($('#fatsSum').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#fatsSum').val(value);
            var current =  $('#day1_break2').text();
            var currentVal =$('#day1_break2').val();
            $('#day1_break2').val(" ");
            $('#day1_break2').text(" ");
            $('#day1_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day1_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#fatsSum').val(parseFloat(t[2])*x);
            var current =  $('#day1_break2').text();
            var currentVal =$('#day1_break2').val();
            $('#day1_break2').val(" ");
            $('#day1_break2').text(" ");
            $('#day1_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day1_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }

    }else
    {
        var value = parseFloat($('#proteinSum').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#proteinSum').val(value);
            var current =  $('#day1_break2').text();
            var currentVal =$('#day1_break2').val();
            $('#day1_break2').val(" ");
            $('#day1_break2').text(" ");
            $('#day1_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day1_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#proteinSum').val(parseFloat(t[2])*x);
            var current =  $('#day1_break2').text();
            var currentVal =$('#day1_break2').val();
            $('#day1_break2').val(" ");
            $('#day1_break2').text(" ");
            $('#day1_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day1_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }
    }



}


// second day


function getData2() {

    var x =  $("#gmValue2 option:selected").val();
    var y = $("#selectcountries2 option:selected").text();
    var t = y.split(/[ ,]+/);

    if(t[4] ==1)
    {
        var value = parseFloat($('#carbSum2').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#carbSum2').val(value);
            //    $('#day1_breakfast').focus();



            var current =  $('#day2_breakfast').text();
            var currentVal =$('#day2_breakfast').val();
            $('#day2_breakfast').val(" ");
            $('#day2_breakfast').text(" ");
            $('#day2_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day2_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }

        else
        {
            $('#carbSum2').val(parseFloat(t[2])*x);

            var current =  $('#day2_breakfast').text();
            var currentVal =$('#day2_breakfast').val();
            $('#day2_breakfast').val(" ");
            $('#day2_breakfast').text(" ");
            $('#day2_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day2_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);


        }

    }


    else if(t[4] ==2)
    {
        var value = parseFloat($('#fatsSum2').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#fatsSum2').val(value);
            var current =  $('#day2_breakfast').text();
            var currentVal =$('#day2_breakfast').val();
            $('#day2_breakfast').val(" ");
            $('#day2_breakfast').text(" ");
            $('#day2_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day2_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#fatsSum2').val(parseFloat(t[2])*x);
            var current =  $('#day1_breakfast').text();
            var currentVal =$('#day1_breakfast').val();
            $('#day2_breakfast').val(" ");
            $('#day2_breakfast').text(" ");
            $('#day2_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day2_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }

    }

    else
    {
        var value = parseFloat($('#proteinSum2').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#proteinSum2').val(value);

            var current =  $('#day2_breakfast').text();
            var currentVal =$('#day2_breakfast').val();
            $('#day2_breakfast').val(" ");
            $('#day2_breakfast').text(" ");
            $('#day2_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day2_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#proteinSum2').val(parseFloat(t[2])*x);
            var current =  $('#day2_breakfast').text();
            var currentVal =$('#day2_breakfast').val();
            $('#day2_breakfast').val(" ");
            $('#day2_breakfast').text(" ");
            $('#day2_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day2_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }
    }



}

function getData2_lunch() {

    var x =  $("#gmValue2_lunch option:selected").val();
    var y = $("#selectcountries2_lunch option:selected").text();
    var t = y.split(/[ ,]+/);

    if(t[4] ==1)
    {
        var value = parseFloat($('#carbSum2').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#carbSum').val(value);

            var current =  $('#day2_lunch').text();
            var currentVal =$('#day2_lunch').val();
            $('#day2_lunch').val(" ");
            $('#day2_lunch').text(" ");
            $('#day2_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day2_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#carbSum2').val(parseFloat(t[2])*x);

            var current =  $('#day2_lunch').text();
            var currentVal =$('#day2_lunch').val();
            $('#day2_lunch').val(" ");
            $('#day2_lunch').text(" ");
            $('#day2_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day2_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }

    }else if(t[4] ==2)
    {
        var value = parseFloat($('#fatsSum2').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#fatsSum2').val(value);
            var current =  $('#day2_lunch').text();
            var currentVal =$('#day2_lunch').val();
            $('#day2_lunch').val(" ");
            $('#day2_lunch').text(" ");
            $('#day2_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day2_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#fatsSum2').val(parseFloat(t[2])*x);
            var current =  $('#day2_lunch').text();
            var currentVal =$('#day2_lunch').val();
            $('#day2_lunch').val(" ");
            $('#day2_lunch').text(" ");
            $('#day2_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day2_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }

    }else
    {
        var value = parseFloat($('#proteinSum2').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#proteinSum2').val(value);
            var current =  $('#day2_lunch').text();
            var currentVal =$('#day2_lunch').val();
            $('#day2_lunch').val(" ");
            $('#day2_lunch').text(" ");
            $('#day2_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day2_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#proteinSum2').val(parseFloat(t[2])*x);
            var current =  $('#day2_lunch').text();
            var currentVal =$('#day2_lunch').val();
            $('#day2_lunch').val(" ");
            $('#day2_lunch').text(" ");
            $('#day2_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day2_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }
    }



}

function getData2_dinner() {

    var x =  $("#gmValue2_dinner option:selected").val();
    var y = $("#selectcountries2_dinner option:selected").text();
    var t = y.split(/[ ,]+/);

    if(t[4] ==1)
    {
        var value = parseFloat($('#carbSum2').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#carbSum2').val(value);

            var current =  $('#day2_dinner').text();
            var currentVal =$('#day2_dinner').val();
            $('#day2_dinner').val(" ");
            $('#day2_dinner').text(" ");
            $('#day2_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day2_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#carbSum2').val(parseFloat(t[2])*x);

            var current =  $('#day2_dinner').text();
            var currentVal =$('#day2_dinner').val();
            $('#day2_dinner').val(" ");
            $('#day2_dinner').text(" ");
            $('#day2_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day2_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }

    }else if(t[4] ==2)
    {
        var value = parseFloat($('#fatsSum2').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#fatsSum2').val(value);
            var current =  $('#day2_dinner').text();
            var currentVal =$('#day2_dinner').val();
            $('#day2_dinner').val(" ");
            $('#day2_dinner').text(" ");
            $('#day2_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day2_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#fatsSum2').val(parseFloat(t[2])*x);
            var current =  $('#day2_dinner').text();
            var currentVal =$('#day2_dinner').val();
            $('#day2_dinner').val(" ");
            $('#day2_dinner').text(" ");
            $('#day2_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day2_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }

    }else
    {
        var value = parseFloat($('#proteinSum2').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#proteinSum2').val(value);
            var current =  $('#day2_dinner').text();
            var currentVal =$('#day2_dinner').val();
            $('#day2_dinner').val(" ");
            $('#day2_dinner').text(" ");
            $('#day2_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day2_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#proteinSum2').val(parseFloat(t[2])*x);
            var current =  $('#day2_dinner').text();
            var currentVal =$('#day2_dinner').val();
            $('#day2_dinner').val(" ");
            $('#day2_dinner').text(" ");
            $('#day2_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day2_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }
    }



}

function getData2_break1() {

    var x =  $("#gmValue2_break1 option:selected").val();
    var y = $("#selectcountries2_break1 option:selected").text();
    var t = y.split(/[ ,]+/);

    if(t[4] ==1)
    {
        var value = parseFloat($('#carbSum2').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#carbSum2').val(value);

            var current =  $('#day2_break1').text();
            var currentVal =$('#day2_break1').val();
            $('#day2_break1').val(" ");
            $('#day2_break1').text(" ");
            $('#day2_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day2_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#carbSum2').val(parseFloat(t[2])*x);

            var current =  $('#day2_break1').text();
            var currentVal =$('#day2_break1').val();
            $('#day2_break1').val(" ");
            $('#day2_break1').text(" ");
            $('#day2_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day2_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }

    }else if(t[4] ==2)
    {
        var value = parseFloat($('#fatsSum2').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#fatsSum2').val(value);
            var current =  $('#day1_break1').text();
            var currentVal =$('#day1_break1').val();
            $('#day1_break1').val(" ");
            $('#day1_break1').text(" ");
            $('#day1_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day1_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#fatsSum2').val(parseFloat(t[2])*x);
            var current =  $('#day2_break1').text();
            var currentVal =$('#day2_break1').val();
            $('#day2_break1').val(" ");
            $('#day2_break1').text(" ");
            $('#day2_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day2_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }

    }else
    {
        var value = parseFloat($('#proteinSum2').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#proteinSum2').val(value);
            var current =  $('#day2_break1').text();
            var currentVal =$('#day2_break1').val();
            $('#day2_break1').val(" ");
            $('#day2_break1').text(" ");
            $('#day2_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day2_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#proteinSum2').val(parseFloat(t[2])*x);
            var current =  $('#day2_break1').text();
            var currentVal =$('#day2_break1').val();
            $('#day2_break1').val(" ");
            $('#day2_break1').text(" ");
            $('#day2_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day2_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }
    }



}

function getData2_break2() {

    var x =  $("#gmValue2_break2 option:selected").val();
    var y = $("#selectcountries2_break2 option:selected").text();
    var t = y.split(/[ ,]+/);

    if(t[4] ==1)
    {
        var value = parseFloat($('#carbSum2').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#carbSum2').val(value);

            var current =  $('#day2_break2').text();
            var currentVal =$('#day2_break2').val();
            $('#day2_break2').val(" ");
            $('#day2_break2').text(" ");
            $('#day2_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day2_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#carbSum2').val(parseFloat(t[2])*x);

            var current =  $('#day2_break2').text();
            var currentVal =$('#day2_break2').val();
            $('#day2_break2').val(" ");
            $('#day2_break2').text(" ");
            $('#day2_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day2_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }

    }else if(t[4] ==2)
    {
        var value = parseFloat($('#fatsSum2').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#fatsSum2').val(value);
            var current =  $('#day2_break2').text();
            var currentVal =$('#day2_break2').val();
            $('#day2_break2').val(" ");
            $('#day2_break2').text(" ");
            $('#day2_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day2_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#fatsSum2').val(parseFloat(t[2])*x);
            var current =  $('#day2_break2').text();
            var currentVal =$('#day2_break2').val();
            $('#day2_break2').val(" ");
            $('#day2_break2').text(" ");
            $('#day2_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day2_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }

    }else
    {
        var value = parseFloat($('#proteinSum2').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#proteinSum2').val(value);
            var current =  $('#day2_break2').text();
            var currentVal =$('#day2_break2').val();
            $('#day2_break2').val(" ");
            $('#day2_break2').text(" ");
            $('#day2_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day2_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#proteinSum2').val(parseFloat(t[2])*x);
            var current =  $('#day2_break2').text();
            var currentVal =$('#day2_break2').val();
            $('#day2_break2').val(" ");
            $('#day2_break2').text(" ");
            $('#day2_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day2_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }
    }



}

// third day


function getData3() {

    var x =  $("#gmValue3 option:selected").val();
    var y = $("#selectcountries3 option:selected").text();
    var t = y.split(/[ ,]+/);

    if(t[4] ==1)
    {
        var value = parseFloat($('#carbSum3').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#carbSum3').val(value);
            //    $('#day1_breakfast').focus();



            var current =  $('#day3_breakfast').text();
            var currentVal =$('#day3_breakfast').val();
            $('#day3_breakfast').val(" ");
            $('#day3_breakfast').text(" ");
            $('#day3_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day3_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }

        else
        {
            $('#carbSum3').val(parseFloat(t[2])*x);

            var current =  $('#day3_breakfast').text();
            var currentVal =$('#day3_breakfast').val();
            $('#day3_breakfast').val(" ");
            $('#day3_breakfast').text(" ");
            $('#day3_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day3_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);


        }

    }


    else if(t[4] ==2)
    {
        var value = parseFloat($('#fatsSum3').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#fatsSum3').val(value);
            var current =  $('#day3_breakfast').text();
            var currentVal =$('#day3_breakfast').val();
            $('#day3_breakfast').val(" ");
            $('#day3_breakfast').text(" ");
            $('#day3_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day3_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#fatsSum3').val(parseFloat(t[2])*x);
            var current =  $('#day3_breakfast').text();
            var currentVal =$('#day3_breakfast').val();
            $('#day3_breakfast').val(" ");
            $('#day3_breakfast').text(" ");
            $('#day3_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day3_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }

    }

    else
    {
        var value = parseFloat($('#proteinSum3').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#proteinSum3').val(value);

            var current =  $('#day3_breakfast').text();
            var currentVal =$('#day3_breakfast').val();
            $('#day3_breakfast').val(" ");
            $('#day3_breakfast').text(" ");
            $('#day3_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day3_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#proteinSum3').val(parseFloat(t[2])*x);
            var current =  $('#day3_breakfast').text();
            var currentVal =$('#day3_breakfast').val();
            $('#day3_breakfast').val(" ");
            $('#day3_breakfast').text(" ");
            $('#day3_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day3_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }
    }



}

function getData3_lunch() {

    var x =  $("#gmValue3_lunch option:selected").val();
    var y = $("#selectcountries3_lunch option:selected").text();
    var t = y.split(/[ ,]+/);

    if(t[4] ==1)
    {
        var value = parseFloat($('#carbSum3').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#carbSum3').val(value);

            var current =  $('#day3_lunch').text();
            var currentVal =$('#day3_lunch').val();
            $('#day3_lunch').val(" ");
            $('#day3_lunch').text(" ");
            $('#day3_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day3_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#carbSum3').val(parseFloat(t[2])*x);

            var current =  $('#day3_lunch').text();
            var currentVal =$('#day3_lunch').val();
            $('#day3_lunch').val(" ");
            $('#day3_lunch').text(" ");
            $('#day3_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day3_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }

    }else if(t[4] ==2)
    {
        var value = parseFloat($('#fatsSum3').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#fatsSum3').val(value);
            var current =  $('#day3_lunch').text();
            var currentVal =$('#day3_lunch').val();
            $('#day3_lunch').val(" ");
            $('#day3_lunch').text(" ");
            $('#day3_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day3_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#fatsSum3').val(parseFloat(t[2])*x);
            var current =  $('#day3_lunch').text();
            var currentVal =$('#day3_lunch').val();
            $('#day3_lunch').val(" ");
            $('#day3_lunch').text(" ");
            $('#day3_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day3_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }

    }else
    {
        var value = parseFloat($('#proteinSum3').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#proteinSum3').val(value);
            var current =  $('#day3_lunch').text();
            var currentVal =$('#day3_lunch').val();
            $('#day3_lunch').val(" ");
            $('#day3_lunch').text(" ");
            $('#day3_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day3_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#proteinSum3').val(parseFloat(t[2])*x);
            var current =  $('#day3_lunch').text();
            var currentVal =$('#day3_lunch').val();
            $('#day3_lunch').val(" ");
            $('#day3_lunch').text(" ");
            $('#day3_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day3_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }
    }



}

function getData3_dinner() {

    var x =  $("#gmValue3_dinner option:selected").val();
    var y = $("#selectcountries3_dinner option:selected").text();
    var t = y.split(/[ ,]+/);

    if(t[4] ==1)
    {
        var value = parseFloat($('#carbSum3').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#carbSum3').val(value);

            var current =  $('#day3_dinner').text();
            var currentVal =$('#day3_dinner').val();
            $('#day3_dinner').val(" ");
            $('#day3_dinner').text(" ");
            $('#day3_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day3_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#carbSum3').val(parseFloat(t[2])*x);

            var current =  $('#day3_dinner').text();
            var currentVal =$('#day3_dinner').val();
            $('#day3_dinner').val(" ");
            $('#day3_dinner').text(" ");
            $('#day3_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day3_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }

    }else if(t[4] ==2)
    {
        var value = parseFloat($('#fatsSum3').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#fatsSum3').val(value);
            var current =  $('#day3_dinner').text();
            var currentVal =$('#day3_dinner').val();
            $('#day3_dinner').val(" ");
            $('#day3_dinner').text(" ");
            $('#day3_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day3_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#fatsSum3').val(parseFloat(t[2])*x);
            var current =  $('#day3_dinner').text();
            var currentVal =$('#day3_dinner').val();
            $('#day3_dinner').val(" ");
            $('#day3_dinner').text(" ");
            $('#day3_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day3_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }

    }else
    {
        var value = parseFloat($('#proteinSum3').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#proteinSum3').val(value);
            var current =  $('#day3_dinner').text();
            var currentVal =$('#day3_dinner').val();
            $('#day3_dinner').val(" ");
            $('#day3_dinner').text(" ");
            $('#day3_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day3_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#proteinSum3').val(parseFloat(t[2])*x);
            var current =  $('#day3_dinner').text();
            var currentVal =$('#day3_dinner').val();
            $('#day3_dinner').val(" ");
            $('#day3_dinner').text(" ");
            $('#day3_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day3_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }
    }



}

function getData3_break1() {

    var x =  $("#gmValue3_break1 option:selected").val();
    var y = $("#selectcountries3_break1 option:selected").text();
    var t = y.split(/[ ,]+/);

    if(t[4] ==1)
    {
        var value = parseFloat($('#carbSum3').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#carbSum3').val(value);

            var current =  $('#day3_break1').text();
            var currentVal =$('#day3_break1').val();
            $('#day3_break1').val(" ");
            $('#day3_break1').text(" ");
            $('#day3_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day3_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#carbSum3').val(parseFloat(t[2])*x);

            var current =  $('#day3_break1').text();
            var currentVal =$('#day3_break1').val();
            $('#day3_break1').val(" ");
            $('#day3_break1').text(" ");
            $('#day3_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day3_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }

    }else if(t[4] ==2)
    {
        var value = parseFloat($('#fatsSum3').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#fatsSum3').val(value);
            var current =  $('#day3_break1').text();
            var currentVal =$('#day3_break1').val();
            $('#day3_break1').val(" ");
            $('#day3_break1').text(" ");
            $('#day3_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day3_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#fatsSum3').val(parseFloat(t[2])*x);
            var current =  $('#day3_break1').text();
            var currentVal =$('#day3_break1').val();
            $('#day3_break1').val(" ");
            $('#day3_break1').text(" ");
            $('#day3_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day3_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }

    }else
    {
        var value = parseFloat($('#proteinSum3').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#proteinSum3').val(value);
            var current =  $('#day3_break1').text();
            var currentVal =$('#day3_break1').val();
            $('#day3_break1').val(" ");
            $('#day3_break1').text(" ");
            $('#day3_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day3_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#proteinSum3').val(parseFloat(t[2])*x);
            var current =  $('#day3_break1').text();
            var currentVal =$('#day3_break1').val();
            $('#day3_break1').val(" ");
            $('#day3_break1').text(" ");
            $('#day3_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day3_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }
    }



}

function getData3_break2() {

    var x =  $("#gmValue3_break2 option:selected").val();
    var y = $("#selectcountries3_break2 option:selected").text();
    var t = y.split(/[ ,]+/);

    if(t[4] ==1)
    {
        var value = parseFloat($('#carbSum3').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#carbSum3').val(value);

            var current =  $('#day3_break2').text();
            var currentVal =$('#day3_break2').val();
            $('#day3_break2').val(" ");
            $('#day3_break2').text(" ");
            $('#day3_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day3_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#carbSum3').val(parseFloat(t[2])*x);

            var current =  $('#day3_break2').text();
            var currentVal =$('#day3_break2').val();
            $('#day3_break2').val(" ");
            $('#day3_break2').text(" ");
            $('#day3_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day3_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }

    }else if(t[4] ==2)
    {
        var value = parseFloat($('#fatsSum3').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#fatsSum3').val(value);
            var current =  $('#day3_break2').text();
            var currentVal =$('#day3_break2').val();
            $('#day3_break2').val(" ");
            $('#day3_break2').text(" ");
            $('#day3_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day3_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#fatsSum3').val(parseFloat(t[2])*x);
            var current =  $('#day3_break2').text();
            var currentVal =$('#day3_break2').val();
            $('#day3_break2').val(" ");
            $('#day3_break2').text(" ");
            $('#day3_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day3_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }

    }else
    {
        var value = parseFloat($('#proteinSum3').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#proteinSum3').val(value);
            var current =  $('#day3_break2').text();
            var currentVal =$('#day3_break2').val();
            $('#day3_break2').val(" ");
            $('#day3_break2').text(" ");
            $('#day3_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day3_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#proteinSum3').val(parseFloat(t[2])*x);
            var current =  $('#day3_break2').text();
            var currentVal =$('#day3_break2').val();
            $('#day3_break2').val(" ");
            $('#day3_break2').text(" ");
            $('#day3_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day3_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }
    }



}


// forth day


function getData4() {

    var x =  $("#gmValue4 option:selected").val();
    var y = $("#selectcountries4 option:selected").text();
    var t = y.split(/[ ,]+/);

    if(t[4] ==1)
    {
        var value = parseFloat($('#carbSum4').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#carbSum4').val(value);
            //    $('#day1_breakfast').focus();



            var current =  $('#day4_breakfast').text();
            var currentVal =$('#day4_breakfast').val();
            $('#day4_breakfast').val(" ");
            $('#day4_breakfast').text(" ");
            $('#day4_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day4_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }

        else
        {
            $('#carbSum4').val(parseFloat(t[2])*x);

            var current =  $('#day4_breakfast').text();
            var currentVal =$('#day4_breakfast').val();
            $('#day4_breakfast').val(" ");
            $('#day4_breakfast').text(" ");
            $('#day4_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day4_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);


        }

    }


    else if(t[4] ==2)
    {
        var value = parseFloat($('#fatsSum4').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#fatsSum3').val(value);
            var current =  $('#day4_breakfast').text();
            var currentVal =$('#day4_breakfast').val();
            $('#day4_breakfast').val(" ");
            $('#day4_breakfast').text(" ");
            $('#day4_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day4_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#fatsSum4').val(parseFloat(t[2])*x);
            var current =  $('#day4_breakfast').text();
            var currentVal =$('#day4_breakfast').val();
            $('#day4_breakfast').val(" ");
            $('#day4_breakfast').text(" ");
            $('#day4_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day4_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }

    }

    else
    {
        var value = parseFloat($('#proteinSum4').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#proteinSum4').val(value);

            var current =  $('#day4_breakfast').text();
            var currentVal =$('#day4_breakfast').val();
            $('#day4_breakfast').val(" ");
            $('#day4_breakfast').text(" ");
            $('#day4_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day4_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#proteinSum4').val(parseFloat(t[2])*x);
            var current =  $('#day4_breakfast').text();
            var currentVal =$('#day4_breakfast').val();
            $('#day4_breakfast').val(" ");
            $('#day4_breakfast').text(" ");
            $('#day4_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day4_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }
    }



}

function getData4_lunch() {

    var x =  $("#gmValue4_lunch option:selected").val();
    var y = $("#selectcountries4_lunch option:selected").text();
    var t = y.split(/[ ,]+/);

    if(t[4] ==1)
    {
        var value = parseFloat($('#carbSum4').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#carbSum4').val(value);

            var current =  $('#day4_lunch').text();
            var currentVal =$('#day4_lunch').val();
            $('#day4_lunch').val(" ");
            $('#day4_lunch').text(" ");
            $('#day4_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day4_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#carbSum4').val(parseFloat(t[2])*x);

            var current =  $('#day4_lunch').text();
            var currentVal =$('#day4_lunch').val();
            $('#day4_lunch').val(" ");
            $('#day4_lunch').text(" ");
            $('#day4_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day4_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }

    }else if(t[4] ==2)
    {
        var value = parseFloat($('#fatsSum4').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#fatsSum4').val(value);
            var current =  $('#day4_lunch').text();
            var currentVal =$('#day4_lunch').val();
            $('#day4_lunch').val(" ");
            $('#day4_lunch').text(" ");
            $('#day4_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day4_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#fatsSum4').val(parseFloat(t[2])*x);
            var current =  $('#day4_lunch').text();
            var currentVal =$('#day4_lunch').val();
            $('#day4_lunch').val(" ");
            $('#day4_lunch').text(" ");
            $('#day4_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day4_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }

    }else
    {
        var value = parseFloat($('#proteinSum3').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#proteinSum4').val(value);
            var current =  $('#day4_lunch').text();
            var currentVal =$('#day4_lunch').val();
            $('#day4_lunch').val(" ");
            $('#day4_lunch').text(" ");
            $('#day4_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day4_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#proteinSum4').val(parseFloat(t[2])*x);
            var current =  $('#day4_lunch').text();
            var currentVal =$('#day4_lunch').val();
            $('#day4_lunch').val(" ");
            $('#day4_lunch').text(" ");
            $('#day4_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day4_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }
    }



}

function getData4_dinner() {

    var x =  $("#gmValue4_dinner option:selected").val();
    var y = $("#selectcountries4_dinner option:selected").text();
    var t = y.split(/[ ,]+/);

    if(t[4] ==1)
    {
        var value = parseFloat($('#carbSum4').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#carbSum4').val(value);

            var current =  $('#day4_dinner').text();
            var currentVal =$('#day4_dinner').val();
            $('#day4_dinner').val(" ");
            $('#day4_dinner').text(" ");
            $('#day4_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day4_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#carbSum3').val(parseFloat(t[2])*x);

            var current =  $('#day4_dinner').text();
            var currentVal =$('#day4_dinner').val();
            $('#day4_dinner').val(" ");
            $('#day4_dinner').text(" ");
            $('#day4_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day4_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }

    }else if(t[4] ==2)
    {
        var value = parseFloat($('#fatsSum4').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#fatsSum4').val(value);
            var current =  $('#day4_dinner').text();
            var currentVal =$('#day4_dinner').val();
            $('#day4_dinner').val(" ");
            $('#day4_dinner').text(" ");
            $('#day4_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day4_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#fatsSum4').val(parseFloat(t[2])*x);
            var current =  $('#day4_dinner').text();
            var currentVal =$('#day4_dinner').val();
            $('#day4_dinner').val(" ");
            $('#day4_dinner').text(" ");
            $('#day4_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day4_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }

    }else
    {
        var value = parseFloat($('#proteinSum4').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#proteinSum4').val(value);
            var current =  $('#day4_dinner').text();
            var currentVal =$('#day4_dinner').val();
            $('#day4_dinner').val(" ");
            $('#day4_dinner').text(" ");
            $('#day4_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day4_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#proteinSum4').val(parseFloat(t[2])*x);
            var current =  $('#day4_dinner').text();
            var currentVal =$('#day4_dinner').val();
            $('#day4_dinner').val(" ");
            $('#day4_dinner').text(" ");
            $('#day4_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day4_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }
    }



}

function getData4_break1() {

    var x =  $("#gmValue4_break1 option:selected").val();
    var y = $("#selectcountries4_break1 option:selected").text();
    var t = y.split(/[ ,]+/);

    if(t[4] ==1)
    {
        var value = parseFloat($('#carbSum4').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#carbSum4').val(value);

            var current =  $('#day4_break1').text();
            var currentVal =$('#day4_break1').val();
            $('#day4_break1').val(" ");
            $('#day4_break1').text(" ");
            $('#day4_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day4_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#carbSum4').val(parseFloat(t[2])*x);

            var current =  $('#day4_break1').text();
            var currentVal =$('#day4_break1').val();
            $('#day4_break1').val(" ");
            $('#day4_break1').text(" ");
            $('#day4_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day4_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }

    }else if(t[4] ==2)
    {
        var value = parseFloat($('#fatsSum4').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#fatsSum4').val(value);
            var current =  $('#day4_break1').text();
            var currentVal =$('#day4_break1').val();
            $('#day4_break1').val(" ");
            $('#day4_break1').text(" ");
            $('#day4_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day4_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#fatsSum4').val(parseFloat(t[2])*x);
            var current =  $('#day4_break1').text();
            var currentVal =$('#day4_break1').val();
            $('#day4_break1').val(" ");
            $('#day4_break1').text(" ");
            $('#day4_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day4_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }

    }else
    {
        var value = parseFloat($('#proteinSum4').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#proteinSum4').val(value);
            var current =  $('#day4_break1').text();
            var currentVal =$('#day4_break1').val();
            $('#day4_break1').val(" ");
            $('#day4_break1').text(" ");
            $('#day4_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day4_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#proteinSum4').val(parseFloat(t[2])*x);
            var current =  $('#day4_break1').text();
            var currentVal =$('#day4_break1').val();
            $('#day4_break1').val(" ");
            $('#day4_break1').text(" ");
            $('#day4_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day4_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }
    }



}

function getData4_break2() {

    var x =  $("#gmValue4_break2 option:selected").val();
    var y = $("#selectcountries4_break2 option:selected").text();
    var t = y.split(/[ ,]+/);

    if(t[4] ==1)
    {
        var value = parseFloat($('#carbSum4').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#carbSum4').val(value);

            var current =  $('#day4_break2').text();
            var currentVal =$('#day4_break2').val();
            $('#day4_break2').val(" ");
            $('#day4_break2').text(" ");
            $('#day4_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day4_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#carbSum4').val(parseFloat(t[2])*x);

            var current =  $('#day4_break2').text();
            var currentVal =$('#day4_break2').val();
            $('#day4_break2').val(" ");
            $('#day4_break2').text(" ");
            $('#day4_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day4_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }

    }else if(t[4] ==2)
    {
        var value = parseFloat($('#fatsSum4').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#fatsSum4').val(value);
            var current =  $('#day4_break2').text();
            var currentVal =$('#day4_break2').val();
            $('#day4_break2').val(" ");
            $('#day4_break2').text(" ");
            $('#day4_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day4_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#fatsSum4').val(parseFloat(t[2])*x);
            var current =  $('#day4_break2').text();
            var currentVal =$('#day4_break2').val();
            $('#day4_break2').val(" ");
            $('#day4_break2').text(" ");
            $('#day4_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day4_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }

    }else
    {
        var value = parseFloat($('#proteinSum4').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#proteinSum4').val(value);
            var current =  $('#day4_break2').text();
            var currentVal =$('#day4_break2').val();
            $('#day4_break2').val(" ");
            $('#day4_break2').text(" ");
            $('#day4_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day4_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#proteinSum4').val(parseFloat(t[2])*x);
            var current =  $('#day4_break2').text();
            var currentVal =$('#day4_break2').val();
            $('#day4_break2').val(" ");
            $('#day4_break2').text(" ");
            $('#day4_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day4_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }
    }



}

// fifth day


function getData5() {

    var x =  $("#gmValue5 option:selected").val();
    var y = $("#selectcountries5 option:selected").text();
    var t = y.split(/[ ,]+/);

    if(t[4] ==1)
    {
        var value = parseFloat($('#carbSum5').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#carbSum5').val(value);
            //    $('#day1_breakfast').focus();



            var current =  $('#day5_breakfast').text();
            var currentVal =$('#day5_breakfast').val();
            $('#day5_breakfast').val(" ");
            $('#day5_breakfast').text(" ");
            $('#day5_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day5_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }

        else
        {
            $('#carbSum5').val(parseFloat(t[2])*x);

            var current =  $('#day5_breakfast').text();
            var currentVal =$('#day5_breakfast').val();
            $('#day5_breakfast').val(" ");
            $('#day5_breakfast').text(" ");
            $('#day5_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day5_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);


        }

    }


    else if(t[4] ==2)
    {
        var value = parseFloat($('#fatsSum5').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#fatsSum5').val(value);
            var current =  $('#day5_breakfast').text();
            var currentVal =$('#day5_breakfast').val();
            $('#day5_breakfast').val(" ");
            $('#day5_breakfast').text(" ");
            $('#day5_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day5_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#fatsSum5').val(parseFloat(t[2])*x);
            var current =  $('#day5_breakfast').text();
            var currentVal =$('#day5_breakfast').val();
            $('#day5_breakfast').val(" ");
            $('#day5_breakfast').text(" ");
            $('#day5_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day5_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }

    }

    else
    {
        var value = parseFloat($('#proteinSum5').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#proteinSum5').val(value);

            var current =  $('#day5_breakfast').text();
            var currentVal =$('#day5_breakfast').val();
            $('#day5_breakfast').val(" ");
            $('#day5_breakfast').text(" ");
            $('#day5_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day5_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#proteinSum5').val(parseFloat(t[2])*x);
            var current =  $('#day5_breakfast').text();
            var currentVal =$('#day5_breakfast').val();
            $('#day5_breakfast').val(" ");
            $('#day5_breakfast').text(" ");
            $('#day5_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day5_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }
    }



}

function getData5_lunch() {

    var x =  $("#gmValue5_lunch option:selected").val();
    var y = $("#selectcountries5_lunch option:selected").text();
    var t = y.split(/[ ,]+/);

    if(t[4] ==1)
    {
        var value = parseFloat($('#carbSum5').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#carbSum5').val(value);

            var current =  $('#day5_lunch').text();
            var currentVal =$('#day5_lunch').val();
            $('#day5_lunch').val(" ");
            $('#day5_lunch').text(" ");
            $('#day5_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day5_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#carbSum5').val(parseFloat(t[2])*x);

            var current =  $('#day5_lunch').text();
            var currentVal =$('#day5_lunch').val();
            $('#day5_lunch').val(" ");
            $('#day5_lunch').text(" ");
            $('#day5_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day5_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }

    }else if(t[4] ==2)
    {
        var value = parseFloat($('#fatsSum5').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#fatsSum5').val(value);
            var current =  $('#day5_lunch').text();
            var currentVal =$('#day5_lunch').val();
            $('#day5_lunch').val(" ");
            $('#day5_lunch').text(" ");
            $('#day5_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day5_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#fatsSum5').val(parseFloat(t[2])*x);
            var current =  $('#day5_lunch').text();
            var currentVal =$('#day5_lunch').val();
            $('#day5_lunch').val(" ");
            $('#day5_lunch').text(" ");
            $('#day5_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day5_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }

    }else
    {
        var value = parseFloat($('#proteinSum5').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#proteinSum5').val(value);
            var current =  $('#day5_lunch').text();
            var currentVal =$('#day5_lunch').val();
            $('#day5_lunch').val(" ");
            $('#day5_lunch').text(" ");
            $('#day5_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day5_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#proteinSum5').val(parseFloat(t[2])*x);
            var current =  $('#day5_lunch').text();
            var currentVal =$('#day5_lunch').val();
            $('#day5_lunch').val(" ");
            $('#day5_lunch').text(" ");
            $('#day5_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day5_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }
    }



}

function getData5_dinner() {

    var x =  $("#gmValue5_dinner option:selected").val();
    var y = $("#selectcountries5_dinner option:selected").text();
    var t = y.split(/[ ,]+/);

    if(t[4] ==1)
    {
        var value = parseFloat($('#carbSum5').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#carbSum5').val(value);

            var current =  $('#day5_dinner').text();
            var currentVal =$('#day5_dinner').val();
            $('#day5_dinner').val(" ");
            $('#day5_dinner').text(" ");
            $('#day5_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day5_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#carbSum5').val(parseFloat(t[2])*x);

            var current =  $('#day5_dinner').text();
            var currentVal =$('#day5_dinner').val();
            $('#day5_dinner').val(" ");
            $('#day5_dinner').text(" ");
            $('#day5_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day5_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }

    }else if(t[4] ==2)
    {
        var value = parseFloat($('#fatsSum5').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#fatsSum5').val(value);
            var current =  $('#day5_dinner').text();
            var currentVal =$('#day5_dinner').val();
            $('#day5_dinner').val(" ");
            $('#day5_dinner').text(" ");
            $('#day5_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day5_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#fatsSum5').val(parseFloat(t[2])*x);
            var current =  $('#day5_dinner').text();
            var currentVal =$('#day5_dinner').val();
            $('#day5_dinner').val(" ");
            $('#day5_dinner').text(" ");
            $('#day5_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day5_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }

    }else
    {
        var value = parseFloat($('#proteinSum5').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#proteinSum5').val(value);
            var current =  $('#day5_dinner').text();
            var currentVal =$('#day5_dinner').val();
            $('#day5_dinner').val(" ");
            $('#day5_dinner').text(" ");
            $('#day5_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day5_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#proteinSum5').val(parseFloat(t[2])*x);
            var current =  $('#day5_dinner').text();
            var currentVal =$('#day5_dinner').val();
            $('#day5_dinner').val(" ");
            $('#day5_dinner').text(" ");
            $('#day5_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day5_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }
    }



}

function getData5_break1() {

    var x =  $("#gmValue5_break1 option:selected").val();
    var y = $("#selectcountries5_break1 option:selected").text();
    var t = y.split(/[ ,]+/);

    if(t[4] ==1)
    {
        var value = parseFloat($('#carbSum5').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#carbSum5').val(value);

            var current =  $('#day5_break1').text();
            var currentVal =$('#day5_break1').val();
            $('#day5_break1').val(" ");
            $('#day5_break1').text(" ");
            $('#day5_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day5_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#carbSum5').val(parseFloat(t[2])*x);

            var current =  $('#day5_break1').text();
            var currentVal =$('#day5_break1').val();
            $('#day5_break1').val(" ");
            $('#day5_break1').text(" ");
            $('#day5_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day5_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }

    }else if(t[4] ==2)
    {
        var value = parseFloat($('#fatsSum5').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#fatsSum5').val(value);
            var current =  $('#day5_break1').text();
            var currentVal =$('#day5_break1').val();
            $('#day5_break1').val(" ");
            $('#day5_break1').text(" ");
            $('#day5_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day5_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#fatsSum5').val(parseFloat(t[2])*x);
            var current =  $('#day5_break1').text();
            var currentVal =$('#day5_break1').val();
            $('#day5_break1').val(" ");
            $('#day5_break1').text(" ");
            $('#day5_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day5_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }

    }else
    {
        var value = parseFloat($('#proteinSum5').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#proteinSum5').val(value);
            var current =  $('#day5_break1').text();
            var currentVal =$('#day5_break1').val();
            $('#day5_break1').val(" ");
            $('#day5_break1').text(" ");
            $('#day5_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day5_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#proteinSum5').val(parseFloat(t[2])*x);
            var current =  $('#day5_break1').text();
            var currentVal =$('#day5_break1').val();
            $('#day5_break1').val(" ");
            $('#day5_break1').text(" ");
            $('#day5_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day5_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }
    }



}

function getData5_break2() {

    var x =  $("#gmValue5_break2 option:selected").val();
    var y = $("#selectcountries5_break2 option:selected").text();
    var t = y.split(/[ ,]+/);

    if(t[4] ==1)
    {
        var value = parseFloat($('#carbSum5').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#carbSum5').val(value);

            var current =  $('#day5_break2').text();
            var currentVal =$('#day5_break2').val();
            $('#day5_break2').val(" ");
            $('#day5_break2').text(" ");
            $('#day5_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day5_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#carbSum5').val(parseFloat(t[2])*x);

            var current =  $('#day5_break2').text();
            var currentVal =$('#day5_break2').val();
            $('#day5_break2').val(" ");
            $('#day5_break2').text(" ");
            $('#day5_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day5_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }

    }else if(t[4] ==2)
    {
        var value = parseFloat($('#fatsSum5').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#fatsSum5').val(value);
            var current =  $('#day5_break2').text();
            var currentVal =$('#day5_break2').val();
            $('#day5_break2').val(" ");
            $('#day5_break2').text(" ");
            $('#day5_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day5_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#fatsSum5').val(parseFloat(t[2])*x);
            var current =  $('#day5_break2').text();
            var currentVal =$('#day5_break2').val();
            $('#day5_break2').val(" ");
            $('#day5_break2').text(" ");
            $('#day5_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day5_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }

    }else
    {
        var value = parseFloat($('#proteinSum5').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#proteinSum5').val(value);
            var current =  $('#day5_break2').text();
            var currentVal =$('#day5_break2').val();
            $('#day5_break2').val(" ");
            $('#day5_break2').text(" ");
            $('#day5_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day5_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#proteinSum5').val(parseFloat(t[2])*x);
            var current =  $('#day5_break2').text();
            var currentVal =$('#day5_break2').val();
            $('#day5_break2').val(" ");
            $('#day5_break2').text(" ");
            $('#day5_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day5_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }
    }



}

// sixth day


function getData6() {

    var x =  $("#gmValue6 option:selected").val();
    var y = $("#selectcountries6 option:selected").text();
    var t = y.split(/[ ,]+/);

    if(t[4] ==1)
    {
        var value = parseFloat($('#carbSum6').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#carbSum6').val(value);
            //    $('#day1_breakfast').focus();



            var current =  $('#day6_breakfast').text();
            var currentVal =$('#day6_breakfast').val();
            $('#day6_breakfast').val(" ");
            $('#day6_breakfast').text(" ");
            $('#day6_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day6_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }

        else
        {
            $('#carbSum6').val(parseFloat(t[2])*x);

            var current =  $('#day6_breakfast').text();
            var currentVal =$('#day6_breakfast').val();
            $('#day6_breakfast').val(" ");
            $('#day6_breakfast').text(" ");
            $('#day6_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day6_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);


        }

    }


    else if(t[4] ==2)
    {
        var value = parseFloat($('#fatsSum6').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#fatsSum6').val(value);
            var current =  $('#day6_breakfast').text();
            var currentVal =$('#day6_breakfast').val();
            $('#day6_breakfast').val(" ");
            $('#day6_breakfast').text(" ");
            $('#day6_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day6_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#fatsSum6').val(parseFloat(t[2])*x);
            var current =  $('#day6_breakfast').text();
            var currentVal =$('#day6_breakfast').val();
            $('#day6_breakfast').val(" ");
            $('#day6_breakfast').text(" ");
            $('#day6_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day6_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }

    }

    else
    {
        var value = parseFloat($('#proteinSum6').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#proteinSum6').val(value);

            var current =  $('#day6_breakfast').text();
            var currentVal =$('#day6_breakfast').val();
            $('#day6_breakfast').val(" ");
            $('#day6_breakfast').text(" ");
            $('#day6_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day6_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#proteinSum6').val(parseFloat(t[2])*x);
            var current =  $('#day6_breakfast').text();
            var currentVal =$('#day6_breakfast').val();
            $('#day6_breakfast').val(" ");
            $('#day6_breakfast').text(" ");
            $('#day6_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day6_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }
    }



}

function getData6_lunch() {

    var x =  $("#gmValue6_lunch option:selected").val();
    var y = $("#selectcountries6_lunch option:selected").text();
    var t = y.split(/[ ,]+/);

    if(t[4] ==1)
    {
        var value = parseFloat($('#carbSum6').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#carbSum6').val(value);

            var current =  $('#day6_lunch').text();
            var currentVal =$('#day6_lunch').val();
            $('#day6_lunch').val(" ");
            $('#day6_lunch').text(" ");
            $('#day6_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day6_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#carbSum6').val(parseFloat(t[2])*x);

            var current =  $('#day6_lunch').text();
            var currentVal =$('#day6_lunch').val();
            $('#day6_lunch').val(" ");
            $('#day6_lunch').text(" ");
            $('#day6_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day6_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }

    }else if(t[4] ==2)
    {
        var value = parseFloat($('#fatsSum6').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#fatsSum6').val(value);
            var current =  $('#day6_lunch').text();
            var currentVal =$('#day6_lunch').val();
            $('#day6_lunch').val(" ");
            $('#day6_lunch').text(" ");
            $('#day6_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day6_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#fatsSum6').val(parseFloat(t[2])*x);
            var current =  $('#day6_lunch').text();
            var currentVal =$('#day6_lunch').val();
            $('#day6_lunch').val(" ");
            $('#day6_lunch').text(" ");
            $('#day6_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day6_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }

    }else
    {
        var value = parseFloat($('#proteinSum6').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#proteinSum6').val(value);
            var current =  $('#day6_lunch').text();
            var currentVal =$('#day6_lunch').val();
            $('#day6_lunch').val(" ");
            $('#day6_lunch').text(" ");
            $('#day6_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day6_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#proteinSum6').val(parseFloat(t[2])*x);
            var current =  $('#day6_lunch').text();
            var currentVal =$('#day6_lunch').val();
            $('#day6_lunch').val(" ");
            $('#day6_lunch').text(" ");
            $('#day6_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day6_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }
    }



}

function getData6_dinner() {

    var x =  $("#gmValue6_dinner option:selected").val();
    var y = $("#selectcountries6_dinner option:selected").text();
    var t = y.split(/[ ,]+/);

    if(t[4] ==1)
    {
        var value = parseFloat($('#carbSum6').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#carbSum6').val(value);

            var current =  $('#day6_dinner').text();
            var currentVal =$('#day6_dinner').val();
            $('#day6_dinner').val(" ");
            $('#day6_dinner').text(" ");
            $('#day6_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day6_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#carbSum6').val(parseFloat(t[2])*x);

            var current =  $('#day6_dinner').text();
            var currentVal =$('#day6_dinner').val();
            $('#day6_dinner').val(" ");
            $('#day6_dinner').text(" ");
            $('#day6_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day6_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }

    }else if(t[4] ==2)
    {
        var value = parseFloat($('#fatsSum6').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#fatsSum6').val(value);
            var current =  $('#day6_dinner').text();
            var currentVal =$('#day6_dinner').val();
            $('#day6_dinner').val(" ");
            $('#day6_dinner').text(" ");
            $('#day6_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day6_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#fatsSum6').val(parseFloat(t[2])*x);
            var current =  $('#day6_dinner').text();
            var currentVal =$('#day6_dinner').val();
            $('#day6_dinner').val(" ");
            $('#day6_dinner').text(" ");
            $('#day6_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day6_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }

    }else
    {
        var value = parseFloat($('#proteinSum5').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#proteinSum6').val(value);
            var current =  $('#day6_dinner').text();
            var currentVal =$('#day6_dinner').val();
            $('#day6_dinner').val(" ");
            $('#day6_dinner').text(" ");
            $('#day6_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day6_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#proteinSum6').val(parseFloat(t[2])*x);
            var current =  $('#day6_dinner').text();
            var currentVal =$('#day6_dinner').val();
            $('#day6_dinner').val(" ");
            $('#day6_dinner').text(" ");
            $('#day6_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day6_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }
    }



}

function getData6_break1() {

    var x =  $("#gmValue6_break1 option:selected").val();
    var y = $("#selectcountries6_break1 option:selected").text();
    var t = y.split(/[ ,]+/);

    if(t[4] ==1)
    {
        var value = parseFloat($('#carbSum6').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#carbSum6').val(value);

            var current =  $('#day6_break1').text();
            var currentVal =$('#day6_break1').val();
            $('#day6_break1').val(" ");
            $('#day6_break1').text(" ");
            $('#day6_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day6_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#carbSum6').val(parseFloat(t[2])*x);

            var current =  $('#day6_break1').text();
            var currentVal =$('#day6_break1').val();
            $('#day6_break1').val(" ");
            $('#day6_break1').text(" ");
            $('#day6_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day6_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }

    }else if(t[4] ==2)
    {
        var value = parseFloat($('#fatsSum6').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#fatsSum6').val(value);
            var current =  $('#day6_break1').text();
            var currentVal =$('#day6_break1').val();
            $('#day6_break1').val(" ");
            $('#day6_break1').text(" ");
            $('#day6_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day6_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#fatsSum6').val(parseFloat(t[2])*x);
            var current =  $('#day6_break1').text();
            var currentVal =$('#day6_break1').val();
            $('#day6_break1').val(" ");
            $('#day6_break1').text(" ");
            $('#day6_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day6_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }

    }else
    {
        var value = parseFloat($('#proteinSum6').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#proteinSum6').val(value);
            var current =  $('#day6_break1').text();
            var currentVal =$('#day6_break1').val();
            $('#day6_break1').val(" ");
            $('#day6_break1').text(" ");
            $('#day6_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day6_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#proteinSum6').val(parseFloat(t[2])*x);
            var current =  $('#day6_break1').text();
            var currentVal =$('#day6_break1').val();
            $('#day6_break1').val(" ");
            $('#day6_break1').text(" ");
            $('#day6_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day6_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }
    }



}

function getData6_break2() {

    var x =  $("#gmValue6_break2 option:selected").val();
    var y = $("#selectcountries6_break2 option:selected").text();
    var t = y.split(/[ ,]+/);

    if(t[4] ==1)
    {
        var value = parseFloat($('#carbSum6').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#carbSum6').val(value);

            var current =  $('#day6_break2').text();
            var currentVal =$('#day6_break2').val();
            $('#day6_break2').val(" ");
            $('#day6_break2').text(" ");
            $('#day6_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day6_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#carbSum6').val(parseFloat(t[2])*x);

            var current =  $('#day6_break2').text();
            var currentVal =$('#day6_break2').val();
            $('#day6_break2').val(" ");
            $('#day6_break2').text(" ");
            $('#day6_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day6_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }

    }else if(t[4] ==2)
    {
        var value = parseFloat($('#fatsSum6').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#fatsSum6').val(value);
            var current =  $('#day6_break2').text();
            var currentVal =$('#day6_break2').val();
            $('#day6_break2').val(" ");
            $('#day6_break2').text(" ");
            $('#day6_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day6_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#fatsSum6').val(parseFloat(t[2])*x);
            var current =  $('#day6_break2').text();
            var currentVal =$('#day6_break2').val();
            $('#day6_break2').val(" ");
            $('#day6_break2').text(" ");
            $('#day6_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day6_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }

    }else
    {
        var value = parseFloat($('#proteinSum6').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#proteinSum6').val(value);
            var current =  $('#day6_break2').text();
            var currentVal =$('#day6_break2').val();
            $('#day6_break2').val(" ");
            $('#day6_break2').text(" ");
            $('#day6_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day6_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#proteinSum6').val(parseFloat(t[2])*x);
            var current =  $('#day6_break2').text();
            var currentVal =$('#day6_break2').val();
            $('#day6_break2').val(" ");
            $('#day6_break2').text(" ");
            $('#day6_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day6_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }
    }



}


// seventh day


function getData7() {

    var x =  $("#gmValue7 option:selected").val();
    var y = $("#selectcountries7 option:selected").text();
    var t = y.split(/[ ,]+/);

    if(t[4] ==1)
    {
        var value = parseFloat($('#carbSum7').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#carbSum7').val(value);
            //    $('#day1_breakfast').focus();



            var current =  $('#day7_breakfast').text();
            var currentVal =$('#day7_breakfast').val();
            $('#day7_breakfast').val(" ");
            $('#day7_breakfast').text(" ");
            $('#day7_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day7_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }

        else
        {
            $('#carbSum7').val(parseFloat(t[2])*x);

            var current =  $('#day7_breakfast').text();
            var currentVal =$('#day7_breakfast').val();
            $('#day7_breakfast').val(" ");
            $('#day7_breakfast').text(" ");
            $('#day7_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day7_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);


        }

    }


    else if(t[4] ==2)
    {
        var value = parseFloat($('#fatsSum7').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#fatsSum7').val(value);
            var current =  $('#day7_breakfast').text();
            var currentVal =$('#day7_breakfast').val();
            $('#day7_breakfast').val(" ");
            $('#day7_breakfast').text(" ");
            $('#day7_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day7_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#fatsSum7').val(parseFloat(t[2])*x);
            var current =  $('#day7_breakfast').text();
            var currentVal =$('#day7_breakfast').val();
            $('#day7_breakfast').val(" ");
            $('#day7_breakfast').text(" ");
            $('#day7_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day7_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }

    }

    else
    {
        var value = parseFloat($('#proteinSum7').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#proteinSum7').val(value);

            var current =  $('#day7_breakfast').text();
            var currentVal =$('#day7_breakfast').val();
            $('#day7_breakfast').val(" ");
            $('#day7_breakfast').text(" ");
            $('#day7_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day7_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#proteinSum7').val(parseFloat(t[2])*x);
            var current =  $('#day7_breakfast').text();
            var currentVal =$('#day7_breakfast').val();
            $('#day7_breakfast').val(" ");
            $('#day7_breakfast').text(" ");
            $('#day7_breakfast').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day7_breakfast').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }
    }



}

function getData7_lunch() {

    var x =  $("#gmValue7_lunch option:selected").val();
    var y = $("#selectcountries7_lunch option:selected").text();
    var t = y.split(/[ ,]+/);

    if(t[4] ==1)
    {
        var value = parseFloat($('#carbSum7').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#carbSum7').val(value);

            var current =  $('#day7_lunch').text();
            var currentVal =$('#day7_lunch').val();
            $('#day7_lunch').val(" ");
            $('#day7_lunch').text(" ");
            $('#day7_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day7_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#carbSum7').val(parseFloat(t[2])*x);

            var current =  $('#day7_lunch').text();
            var currentVal =$('#day7_lunch').val();
            $('#day7_lunch').val(" ");
            $('#day7_lunch').text(" ");
            $('#day7_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day7_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }

    }else if(t[4] ==2)
    {
        var value = parseFloat($('#fatsSum7').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#fatsSum7').val(value);
            var current =  $('#day7_lunch').text();
            var currentVal =$('#day7_lunch').val();
            $('#day7_lunch').val(" ");
            $('#day7_lunch').text(" ");
            $('#day7_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day7_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#fatsSum7').val(parseFloat(t[2])*x);
            var current =  $('#day7_lunch').text();
            var currentVal =$('#day7_lunch').val();
            $('#day7_lunch').val(" ");
            $('#day7_lunch').text(" ");
            $('#day7_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day7_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }

    }else
    {
        var value = parseFloat($('#proteinSum7').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#proteinSum7').val(value);
            var current =  $('#day7_lunch').text();
            var currentVal =$('#day7_lunch').val();
            $('#day7_lunch').val(" ");
            $('#day7_lunch').text(" ");
            $('#day7_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day7_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#proteinSum7').val(parseFloat(t[2])*x);
            var current =  $('#day7_lunch').text();
            var currentVal =$('#day7_lunch').val();
            $('#day7_lunch').val(" ");
            $('#day7_lunch').text(" ");
            $('#day7_lunch').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day7_lunch').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }
    }



}

function getData7_dinner() {

    var x =  $("#gmValue7_dinner option:selected").val();
    var y = $("#selectcountries7_dinner option:selected").text();
    var t = y.split(/[ ,]+/);

    if(t[4] ==1)
    {
        var value = parseFloat($('#carbSum7').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#carbSum7').val(value);

            var current =  $('#day7_dinner').text();
            var currentVal =$('#day7_dinner').val();
            $('#day7_dinner').val(" ");
            $('#day7_dinner').text(" ");
            $('#day7_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day7_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#carbSum7').val(parseFloat(t[2])*x);

            var current =  $('#day7_dinner').text();
            var currentVal =$('#day7_dinner').val();
            $('#day7_dinner').val(" ");
            $('#day7_dinner').text(" ");
            $('#day7_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day7_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }

    }else if(t[4] ==2)
    {
        var value = parseFloat($('#fatsSum7').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#fatsSum7').val(value);
            var current =  $('#day7_dinner').text();
            var currentVal =$('#day7_dinner').val();
            $('#day7_dinner').val(" ");
            $('#day7_dinner').text(" ");
            $('#day7_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day7_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#fatsSum7').val(parseFloat(t[2])*x);
            var current =  $('#day7_dinner').text();
            var currentVal =$('#day7_dinner').val();
            $('#day7_dinner').val(" ");
            $('#day7_dinner').text(" ");
            $('#day7_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day7_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }

    }else
    {
        var value = parseFloat($('#proteinSum6').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#proteinSum6').val(value);
            var current =  $('#day7_dinner').text();
            var currentVal =$('#day7_dinner').val();
            $('#day7_dinner').val(" ");
            $('#day7_dinner').text(" ");
            $('#day7_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day7_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#proteinSum7').val(parseFloat(t[2])*x);
            var current =  $('#day7_dinner').text();
            var currentVal =$('#day7_dinner').val();
            $('#day7_dinner').val(" ");
            $('#day7_dinner').text(" ");
            $('#day7_dinner').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day7_dinner').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }
    }



}

function getData7_break1() {

    var x =  $("#gmValue7_break1 option:selected").val();
    var y = $("#selectcountries7_break1 option:selected").text();
    var t = y.split(/[ ,]+/);

    if(t[4] ==1)
    {
        var value = parseFloat($('#carbSum7').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#carbSum7').val(value);

            var current =  $('#day7_break1').text();
            var currentVal =$('#day7_break1').val();
            $('#day7_break1').val(" ");
            $('#day7_break1').text(" ");
            $('#day7_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day7_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#carbSum7').val(parseFloat(t[2])*x);

            var current =  $('#day7_break1').text();
            var currentVal =$('#day7_break1').val();
            $('#day7_break1').val(" ");
            $('#day7_break1').text(" ");
            $('#day7_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day7_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }

    }else if(t[4] ==2)
    {
        var value = parseFloat($('#fatsSum7').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#fatsSum7').val(value);
            var current =  $('#day7_break1').text();
            var currentVal =$('#day7_break1').val();
            $('#day7_break1').val(" ");
            $('#day7_break1').text(" ");
            $('#day7_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day7_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#fatsSum7').val(parseFloat(t[2])*x);
            var current =  $('#day7_break1').text();
            var currentVal =$('#day7_break1').val();
            $('#day7_break1').val(" ");
            $('#day7_break1').text(" ");
            $('#day7_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day7_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }

    }else
    {
        var value = parseFloat($('#proteinSum7').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#proteinSum7').val(value);
            var current =  $('#day7_break1').text();
            var currentVal =$('#day7_break1').val();
            $('#day7_break1').val(" ");
            $('#day7_break1').text(" ");
            $('#day7_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day7_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#proteinSum7').val(parseFloat(t[2])*x);
            var current =  $('#day7_break1').text();
            var currentVal =$('#day7_break1').val();
            $('#day7_break1').val(" ");
            $('#day7_break1').text(" ");
            $('#day7_break1').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day7_break1').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }
    }



}

function getData7_break2() {

    var x =  $("#gmValue7_break2 option:selected").val();
    var y = $("#selectcountries7_break2 option:selected").text();
    var t = y.split(/[ ,]+/);

    if(t[4] ==1)
    {
        var value = parseFloat($('#carbSum7').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#carbSum7').val(value);

            var current =  $('#day7_break2').text();
            var currentVal =$('#day7_break2').val();
            $('#day7_break2').val(" ");
            $('#day7_break2').text(" ");
            $('#day7_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day7_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#carbSum7').val(parseFloat(t[2])*x);

            var current =  $('#day7_break2').text();
            var currentVal =$('#day7_break2').val();
            $('#day7_break2').val(" ");
            $('#day7_break2').text(" ");
            $('#day7_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day7_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }

    }else if(t[4] ==2)
    {
        var value = parseFloat($('#fatsSum7').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#7').val(value);
            var current =  $('#day7_break2').text();
            var currentVal =$('#day7_break2').val();
            $('#day7_break2').val(" ");
            $('#day7_break2').text(" ");
            $('#day7_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day7_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#fatsSum7').val(parseFloat(t[2])*x);
            var current =  $('#day7_break2').text();
            var currentVal =$('#day7_break2').val();
            $('#day7_break2').val(" ");
            $('#day7_break2').text(" ");
            $('#day7_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day7_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }

    }else
    {
        var value = parseFloat($('#proteinSum7').val()) ;

        if(value)
        {
            value +=parseFloat(t[2]*x);
            $('#proteinSum7').val(value);
            var current =  $('#day7_break2').text();
            var currentVal =$('#day7_break2').val();
            $('#day7_break2').val(" ");
            $('#day7_break2').text(" ");
            $('#day7_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day7_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);

        }else
        {
            $('#proteinSum7').val(parseFloat(t[2])*x);
            var current =  $('#day7_break2').text();
            var currentVal =$('#day7_break2').val();
            $('#day7_break2').val(" ");
            $('#day7_break2').text(" ");
            $('#day7_break2').text(current +  ' و ' + '  '+x+' جم '  +  t[0]);
            $('#day6_break2').val( currentVal +  ' و ' + '  '+x+' جم '  +  t[0]);
        }
    }



}