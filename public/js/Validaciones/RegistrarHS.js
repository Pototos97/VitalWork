
$(document).ready(function(){
  $("#btn-guardar").click(function(){ 
      $(".clean").remove();
    if ($('#tarifa').val() == "") {
      $('#tarifa').focus().after("<div class='clean'>Campo obligatorio</div>");
      $('#tarifa').addClass("inpt");
      $(".clean").css("color", "#000000");
      return false
    } else if ($("#motivoIngreso").val() == "") {
      $("#motivoIngreso").focus().after("<div class='clean'>Campo obligatorio</div>");
      $("#motivoIngreso").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false;
    } else if ($('#modalidadIngreso').val() == "") {
      $('#modalidadIngreso').focus().after("<div class='clean'>Campo obligatorio</div>");
      $('#modalidadIngreso').addClass("inpt");
      $(".clean").css("color", "#000000");
      return false
    } else if ($("#antecedentes").val() == "") {
      $("#antecedentes").focus().after("<div class='clean'>Campo obligatorio</div>");
      $("#antecedentes").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false;
    } else if ($("#dinamicaFamiliar").val() == "") {
      $("#dinamicaFamiliar").focus().after("<div class='clean'>Campo obligatorio</div>");
      $("#dinamicaFamiliar").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false;
    }
     


    else if ($("#factoresProtectores").val() == "") {
      $("#factoresProtectores").focus().after("<div class='clean'>Campo obligatorio</div>");
      $("#factoresProtectores").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false;
    }

    else if ($("#factoresRiesgo").val() == "") {
      $("#factoresRiesgo").focus().after("<div class='clean'>Campo obligatorio</div>");
      $("#factoresRiesgo").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false;
    }
    else if ($("#redesSociales").val() == "") {
      $("#redesSociales").focus().after("<div class='clean'>Campo obligatorio</div>");
      $("#redesSociales").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false;
    }else if ($("#planIntervencion").val() == "") {
      $("#planIntervencion").focus().after("<div class='clean'>Campo obligatorio</div>");
      $("#planIntervencion").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false;
    }

  });

  
});
