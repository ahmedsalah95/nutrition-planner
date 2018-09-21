

function removefunc(array,search_term) {

    for (var i=array.length-1; i>=0; i--) {
        var arrayValue = array[i].trim();
        if (arrayValue === search_term) {

            array.splice(i, 1);
             break;       //<-- Uncomment  if only the first term has to be removed
        }
    }


}

function deleteItem(drop1,drop2,carb,fats,proteins,meal)
{
    var x =  $( "#" +drop1+" option:selected").val();
    var y = $("#" +drop2 +" option:selected").text();
    var inputData = $('#'+meal).val();
    var array = inputData.split("-");

    var t = y.split(/[ ,]+/);


    if(t[6] ==1)
    {
        var value = parseFloat($('#'+carb).val()) ;

        if(value)
        {
            value -=parseFloat(x*t[4]);
            $('#'+carb).val(value);


            var remove = t[0]+' '+x+' ' +t[2];

            var result = "-" ;
                removefunc(array,remove);


                for(var i=1;i<array.length;i++)
                {
                    result +=array[i];
                    result +=" - ";
                }

            $('#'+meal).val(" ");
            $('#'+meal).val(result);





        }



    }


    else if(t[6] ==2)
    {
        var value = parseFloat($('#'+fats).val()) ;

        if(value)
        {
            value -=parseFloat(x*t[4]);
            $('#'+fats).val(value);


            var remove = t[0]+' '+x+' ' +t[2];

            var result = "-" ;
            removefunc(array,remove);


            for(var i=1;i<array.length;i++)
            {
                result +=array[i];
                result +=" - ";
            }

            $('#'+meal).val(" ");
            $('#'+meal).val(result);

        }



    }

    else
    {
        var value = parseFloat($('#'+proteins).val()) ;

        if(value)
        {
            value -=parseFloat(x*t[4]);
            $('#'+proteins).val(value);
            var remove = t[0]+' '+x+' ' +t[2];

            var result = "-" ;
            removefunc(array,remove);


            for(var i=1;i<array.length;i++)
            {
                result +=array[i];
                result +=" - ";
            }

            $('#'+meal).val(" ");
            $('#'+meal).val(result);

        }


    }



}


