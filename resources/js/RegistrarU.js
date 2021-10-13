
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

 var usernameRegex = /^[a-z0-9_-]{3,16}$/;

      $(".clean").remove();
    
    if ($('#Tipoid').val() == "") {
      $('#Tipoid').focus().after("<div class='clean'>Campo obligatorio</div>");
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
    } else if ($("#pass").val() == "") {
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
    $('#Tipoid').on('input', function () {
            const select = document.querySelector('select');
            const para = document.querySelector('p');
            select.onchange = setDocId;
            function setDocId() {
              const choice = select.value;
              if(choice === 'RC') {               
                para.textContent = 'Ingrese un numero de máximo 11 digitos';

                 $('#identificacion').on('input', function () {
                    this.value = this.value.replace(/[^0-9]/g,'');
                    var max=11;
                    var len=$(this).val().length;
                     if (len>=max) {
                      this.value=this.value.slice(0, 11)
                     }
                });
                
              } else if(choice === 'CC') {
                para.textContent = 'Ingrese un numero entre 6 a 10 digitos';
                $('#identificacion').on('input', function () {
                    this.value = this.value.replace(/[^0-9]/g,'');
                    var max=10;
                    var len=$(this).val().length;
                     if (len>=max) {
                      this.value=this.value.slice(0, 10)
                     }
                 });
              } else if(choice === 'TI') {
                para.textContent = 'Ingrese un numero de máximo de 10 digitos ';
                $('#identificacion').on('input', function () {
                    this.value = this.value.replace(/[^0-9]/g,'');
                    var max=10;
                    var len=$(this).val().length;
                     if (len>=max) {
                      this.value=this.value.slice(0, 10)
                     }
                 });
              } else if(choice === 'PA') {
                para.textContent = 'Ingrese un numero de máximo 25 digitos';
                $('#identificacion').on('input', function () {
                    var max=25;
                    var len=$(this).val().length;
                     if (len>=max) {
                      this.value=this.value.slice(0, 25)
                     }
                 });
              } else if(choice === 'PE') {
                para.textContent = 'Ingrese un numero de máximo 20 digitos';
                $('#identificacion').on('input', function () {
                    this.value = this.value.replace(/[^0-9]/g,'');
                    var max=20;
                    var len=$(this).val().length;
                     if (len>=max) {
                      this.value=this.value.slice(0, 20)
                     }
                 });
              }  else if(choice === 'CE') {
                para.textContent = 'Ingrese un numero de máximo 15 digitos';
                $('#identificacion').on('input', function () {
                    this.value = this.value.replace(/[^0-9]/g,'');
                    var max=15;
                    var len=$(this).val().length;
                     if (len>=max) {
                      this.value=this.value.slice(0, 15)
                     }
                 });
              } else {
                para.textContent = 'Campo obligatorio';
              }
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
