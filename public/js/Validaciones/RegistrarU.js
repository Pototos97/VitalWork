
$(document).ready(function(){
  var email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;

 
$('#pass').keyup(function() {
var pswd = $(this).val();

//validar tamaño
if ( pswd.length < 8 ) {
    $('#length').removeClass('valid').addClass('invalid');
} else {
    $('#length').removeClass('invalid').addClass('valid');
}

//validar letra
if ( pswd.match(/[A-z]/) ) {
    $('#letter').removeClass('invalid').addClass('valid');
} else {
    $('#letter').removeClass('valid').addClass('invalid');
}

//validate letra mayus
if ( pswd.match(/[A-Z]/) ) {
    $('#capital').removeClass('invalid').addClass('valid');
} else {
    $('#capital').removeClass('valid').addClass('invalid');
}

//Validar  numero
if ( pswd.match(/\d/) ) {
    $('#number').removeClass('invalid').addClass('valid');
} else {
    $('#number').removeClass('valid').addClass('invalid');
}}).focus(function() {
    $('#pswd_info').show();
}).blur(function() {
    $('#pswd_info').hide();
});


  $("#btn-guardar").click(function(){
    var identi= $("#identificacion").val();
    var nom= $("#nombre").val();
    var ape= $("#apellido").val();
    var pass1= $("#pass").val();
    var valor = document.getElementById('celular').value;
    var telefono= $("#telefono").val();
    var correoU=$("#correo").val();
    var exprecel=/^3[\d]{9}$/;
console.log(correoU);
      $(".clean").remove();
    if ($('#Tipoid').val() == "") {
      $('#Tipoid').focus().after("<div class='clean'>Seleccione una opcion</div>");
      $('#Tipoid').addClass("inpt");
      $(".clean").css("color", "#000000");
      return false
    } else if ($("#identificacion").val() == "") {
      $("#identificacion").focus().after("<div class='clean'>Campo obligatorio</div>");
      $("#identificacion").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false;
    } else if (identi.length < 6 ) {
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
    } else if ($("#correo").val() == "") {
      $("#correo").focus().after("<div class='clean'>Campo obligatorio</div>");
      $("#correo").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false;
    }
    else if (correoU == "" || !email.test(correoU)) {
    $('#correo').after("<div class='clean'>Correo incorrecto</div>");
   $('#correo').focus();
      $('#correo').addClass("inpt");
      $(".clean").css("color", "#000000");
        return false;
    } 
    else if (isNaN(telefono)) {
     $('#telefono').after("<div class='clean'>Solo numeros</div>");
   $('#telefono').focus();
      $('#telefono').addClass("inpt");
      $(".clean").css("color", "#000000");
return false;
}
else if (telefono.length!=7) {
     $('#telefono').after("<div class='clean'>El teléfono debe tener 7 caracteres.</div>");
   $('#telefono').focus();
      $('#telefono').addClass("inpt");
      $(".clean").css("color", "#000000");
return false;
}


    else if ($("#celular").val() == "") {
      $("#celular").focus().after("<div class='clean'>Campo obligatorio</div>");
      $(".clean").css("color", "#000000");
      return false;
    }
     else if (isNaN(valor) || !exprecel.test(valor)){

        $("#celular").focus().after("<div class='clean'>Debe ingresar un número con el formato correcto</div>");
      $(".clean").css("color", "#000000");
      return false;

        }

    else if ($("#direccion").val() == "") {
      $("#direccion").focus().after("<div class='clean'>Campo obligatorio</div>");
      $(".clean").css("color", "#000000");
      return false;
    }
    else if ($("#especialidad").val() == "") {
      $("#especialidad").focus().after("<div class='clean'>Campo obligatorio</div>");
      $("#especialidad").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false;
    }else if ($("#genero").val() == "") {
      $("#genero").focus().after("<div class='clean'>Campo obligatorio</div>");
      $("#genero").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false;
    }

    else if ($("#pass").val() == "") {
      $("#pass").focus().after("<div class='clean'>Campo obligatorio</div>");
      $(".clean").css("color", "#000000");
      return false;
    } else if (pass1.length < 8) {
      $("#pass").focus().after("<div class='clean'>Debe tener minimo 8 caracteres</div>");
      $(".clean").css("color", "#000000");
      return false
    } else if ( !pass1.match(/[A-z]/) ) {
      $("#pass").focus().after("<div class='clean'>Debe tener una letra</div>");
      $(".clean").css("color", "#000000");
      return false
    } else if ( !pass1.match(/[A-Z]/) ) {
      $("#pass").focus().after("<div class='clean'>Debe tener una letra mayuscula</div>");
      $(".clean").css("color", "#000000");
      return false
    } else if ( !pass1.match(/\d/) ) {
      $("#pass").focus().after("<div class='clean'>Debe tener un numero</div>");
      $(".clean").css("color", "#000000");
      return false
    } else if (($("#pass").val() != $("#pass2").val())) {
      $("#pass2").focus().after("<div class='clean'>Contrasena no coincide</div>");
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
