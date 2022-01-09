$(document).ready(function(){

    $("#impak_pelajar1").change(function(){          
        var value1 = $("#impak_pelajar1 option:selected").val();
        // console.log(value +);

        $("#impak_pelajar2 option:eq("+value1+")").attr('disabled','disabled').addClass('text-red');
        $("#impak_pelajar3 option:eq("+value1+")").attr('disabled','disabled').addClass('text-red');
        // $("#impak_pelajar1").attr('disabled','disabled');

    })

    $("#impak_pelajar2").change(function(){          
        var value = $("#impak_pelajar2 option:selected").val();
        console.log(value);

        $("#impak_pelajar1 option:eq("+value+")").attr('disabled','disabled').addClass('text-red');
        $("#impak_pelajar3 option:eq("+value+")").attr('disabled','disabled').addClass('text-red');
        // $("#impak_pelajar2").attr('disabled','disabled');
    })


    $("#impak_pelajar3").change(function(){          
        var value = $("#impak_pelajar3 option:selected").val();
        console.log(value);

        $("#impak_pelajar1 option:eq("+value+")").attr('disabled','disabled').addClass('text-red');
        $("#impak_pelajar2 option:eq("+value+")").attr('disabled','disabled').addClass('text-red');
        // $("#impak_pelajar3").attr('disabled','disabled');
    })




    $("#impak_uni1").change(function(){          
        var value1 = $("#impak_uni1 option:selected").val();
        // console.log(value +);

        $("#impak_uni2 option:eq("+value1+")").attr('disabled','disabled').addClass('text-red');
        $("#impak_uni3 option:eq("+value1+")").attr('disabled','disabled').addClass('text-red');
        // $("#impak_uni1").attr('disabled','disabled');

    })

    $("#impak_uni2").change(function(){          
        var value = $("#impak_uni2 option:selected").val();
        console.log(value);

        $("#impak_uni1 option:eq("+value+")").attr('disabled','disabled').addClass('text-red');
        $("#impak_uni3 option:eq("+value+")").attr('disabled','disabled').addClass('text-red');
        // $("#impak_uni2").attr('disabled','disabled');
    })


    $("#impak_uni3").change(function(){          
        var value = $("#impak_uni3 option:selected").val();
        console.log(value);

        $("#impak_uni1 option:eq("+value+")").attr('disabled','disabled').addClass('text-red');
        $("#impak_uni2 option:eq("+value+")").attr('disabled','disabled').addClass('text-red');
        // $("#impak_uni3").attr('disabled','disabled');
    })




    $("#impak_kom1").change(function(){          
        var value1 = $("#impak_kom1 option:selected").val();
        // console.log(value +);

        $("#impak_kom2 option:eq("+value1+")").attr('disabled','disabled').addClass('text-red');
        $("#impak_kom3 option:eq("+value1+")").attr('disabled','disabled').addClass('text-red');
        // $("#impak_kom1").attr('disabled','disabled');

    })

    $("#impak_kom2").change(function(){          
        var value = $("#impak_kom2 option:selected").val();
        console.log(value);

        $("#impak_kom1 option:eq("+value+")").attr('disabled','disabled').addClass('text-red');
        $("#impak_kom3 option:eq("+value+")").attr('disabled','disabled').addClass('text-red');
        // $("#impak_kom2").attr('disabled','disabled');
    })


    $("#impak_kom3").change(function(){          
        var value = $("#impak_kom3 option:selected").val();
        console.log(value);

        $("#impak_kom1 option:eq("+value+")").attr('disabled','disabled').addClass('text-red');
        $("#impak_kom2 option:eq("+value+")").attr('disabled','disabled').addClass('text-red');
        // $("#impak_kom3").attr('disabled','disabled');
    })

});