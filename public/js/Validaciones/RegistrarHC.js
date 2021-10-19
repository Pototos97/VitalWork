
$(document).ready(function(){
  $("#btn-guardar").click(function(){ 
      $(".clean").remove();
    if ($('#motivoConsulta').val() == "") {
      $('#motivoConsulta').focus().after("<div class='clean'>Campo obligatorio</div>");
      $('#motivoConsulta').addClass("inpt");
      $(".clean").css("color", "#000000");
      return false
    } else if ($("#enfermedadActual").val() == "") {
      $("#enfermedadActual").focus().after("<div class='clean'>Campo obligatorio</div>");
      $("#enfermedadActual").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false;
    } else if ($('#medicacionActual').val() == "") {
      $('#medicacionActual').focus().after("<div class='clean'>Campo obligatorio</div>");
      $('#medicacionActual').addClass("inpt");
      $(".clean").css("color", "#000000");
      return false
    } else if ($("#paraclinicos").val() == "") {
      $("#paraclinicos").focus().after("<div class='clean'>Campo obligatorio</div>");
      $("#paraclinicos").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false;
    } else if ($("#aspectoGeneral").val() == "") {
      $("#aspectoGeneral").focus().after("<div class='clean'>Campo obligatorio</div>");
      $("#aspectoGeneral").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false;
    }
     


    else if ($("#tensionA").val() == "") {
      $("#tensionA").focus().after("<div class='clean'>Campo obligatorio</div>");
      $("#tensionA").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false;
    }

    else if ($("#frecuenciaC").val() == "") {
      $("#frecuenciaC").focus().after("<div class='clean'>Campo obligatorio</div>");
      $("#frecuenciaC").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false;
    }
    else if ($("#pulso").val() == "") {
      $("#pulso").focus().after("<div class='clean'>Campo obligatorio</div>");
      $("#pulso").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false;
    }else if ($("#frecuenciaR").val() == "") {
      $("#frecuenciaR").focus().after("<div class='clean'>Campo obligatorio</div>");
      $("#frecuenciaR").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false;
    }
    else if ($("#peso").val() == "") {
      $("#peso").focus().after("<div class='clean'>Campo obligatorio</div>");
      $("#peso").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false;
    }
    else if ($("#Talla").val() == "") {
      $("#Talla").focus().after("<div class='clean'>Campo obligatorio</div>");
      $("#Talla").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false;
    } else if ($("#factorR").val() == "") {
      $("#factorR").focus().after("<div class='clean'>Campo obligatorio</div>");
      $("#factorR").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false;
    } else if ($("#impresionD").val() == "") {
      $("#impresionD").focus().after("<div class='clean'>Campo obligatorio</div>");
      $("#impresionD").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false;
    }

  });


  $('form').submit(function(e){
  if ($('input[type=checkbox]:checked').length === 0) {
        e.preventDefault();
        alert('Debe seleccionar al menos un valor');
        return false;
    }
});

 $('#ninguna').on('change', function() {
  if ($(this).is(':checked') ) {
                $( ".causa" ).prop( "disabled", true );
             } else {
                $( ".causa" ).prop( "disabled", false );
            }
        });

  
});
