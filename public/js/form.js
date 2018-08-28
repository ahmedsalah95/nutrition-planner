
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

