
$(document).ready(function(){
console.log('Hola');

  $("#btn-guardar").click(function(){
    var identi= $("#identificacion").val();
    var nom= $("#nombre").val();
    var ape= $("#apellido").val();
      $(".clean").remove();
    if ($('#identificacion').val() == "") {
      $('#identificacion').focus().after("<div class='clean'>Seleccione una opcion</div>");
      $('#identificacion').addClass("inpt");
      $(".clean").css("color", "#000000");
      return false
    }  else if (identi.length < 6 ) {
      $("#identificacion").focus().after("<div class='clean'>Numero invalido, ingrese número de mínimo 6 digitos</div>");
      $("#identificacion").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false
    } else if ($('#nombre').val() == "") {
      $('#nombre').focus().after("<div class='clean'>Campo obligatorio</div>");
      $('#nombre').addClass("inpt");
      $(".clean").css("color", "#000000");
      return false
    } else if ($("#apellido").val() == "") {
      $("#apellido").focus().after("<div class='clean'>Campo obligatorio</div>");
      $("#apellido").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false;
    } else if ($("#fechaNacimiento").val() == "") {
      $("#fechaNacimiento").focus().after("<div class='clean'>Campo obligatorio</div>");
      $("#fechaNacimiento").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false;
    }
    else if ($("#escolaridad").val() == "") {
      $("#escolaridad").focus().after("<div class='clean'>Campo obligatorio</div>");
      $("#escolaridad").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false;
    }
    else if ($("#ocupacion").val() == "") {
      $("#ocupacion").focus().after("<div class='clean'>Campo obligatorio</div>");
      $("#ocupacion").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false;
    }
    else if ($("#pension").val() == "") {
      $("#pension").focus().after("<div class='clean'>Campo obligatorio</div>");
      $("#pension").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false;
    }else if ($("#entidad").val() == "") {
      $("#entidad").focus().after("<div class='clean'>Campo obligatorio</div>");
      $("#entidad").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false;
    }else if ($("#genero").val() == "") {
      $("#genero").focus().after("<div class='clean'>Campo obligatorio</div>");
      $("#genero").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false;
    }else if ($("#estadoCivil").val() == "") {
      $("#estadoCivil").focus().after("<div class='clean'>Campo obligatorio</div>");
      $("#estadoCivil").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false;
    }else if ($("#telefono").val() == "") {
      $("#telefono").focus().after("<div class='clean'>Campo obligatorio</div>");
      $("#telefono").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false;
    }else if ($("#estatura").val() == "") {
      $("#estatura").focus().after("<div class='clean'>Campo obligatorio</div>");
      $("#estatura").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false;
    }else if ($("#peso").val() == "") {
      $("#peso").focus().after("<div class='clean'>Campo obligatorio</div>");
      $("#peso").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false;
    }else if ($("#departamento").val() == "") {
      $("#departamento").focus().after("<div class='clean'>Campo obligatorio</div>");
      $("#departamento").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false;
    }else if ($("#ciudad").val() == "") {
      $("#ciudad").focus().after("<div class='clean'>Campo obligatorio</div>");
      $("#ciudad").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false;
    }else if ($("#rh").val() == "") {
      $("#rh").focus().after("<div class='clean'>Campo obligatorio</div>");
      $("#rh").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false;
    }
  
  });

   $("#nombre").on("keypress", function(event){
        if((event.which > 47 && event.which < 58) || $(this).val().length == 32){
            return false;
        }
    });

     $("#nombre2").on("keypress", function(event){
        if((event.which > 47 && event.which < 58) || $(this).val().length == 32){
            return false;
        }
    });
   $("#apellido").on("keypress", function(event){
        if((event.which > 47 && event.which < 58) || $(this).val().length == 32){
            return false;
        }
    });
     $("#apellido2").on("keypress", function(event){
        if((event.which > 47 && event.which < 58) || $(this).val().length == 32){
            return false;
        }
    });


  $("#nombre").on('paste', function(e){
    e.preventDefault();
    alert('Esta acción está prohibida');
  });
   $("#identificacion").on('paste', function(e){
    e.preventDefault();
    alert('Esta acción está prohibida');
  });
  
});
