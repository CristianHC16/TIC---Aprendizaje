var conteo = 0  

$("#change").click(function() { 
    if(conteo == 0) { 
        conteo = 1; 
        $('#passA').removeAttr("type", "password"); 
        $("#passA").prop("type", "text"); 
        $('#passN').removeAttr("type", "password"); 
        $("#passN").prop("type", "text"); 
        $('#passN2').removeAttr("type", "password"); 
        $("#passN2").prop("type", "text"); 
        $("#change").removeClass("eye"); 
        $("#change").addClass("eye2"); 
    }else{ 
        conteo = 0; 
        $('#passA').removeAttr("type", "text"); 
        $("#passA").prop("type", "password");
        $('#passN').removeAttr("type", "text"); 
        $("#passN").prop("type", "password"); 
        $('#passN2').removeAttr("type", "text"); 
        $("#passN2").prop("type", "password");
        $("#change").removeClass("eye2"); 
        $("#change").addClass("eye"); 
    }
}); 