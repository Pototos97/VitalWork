
$(document).ready(function(){
  $("#btn-guardar").click(function(){
      $(".clean").remove();
      
    if ($("#edad").val() == "") {
      $("#edad").focus().after("<div class='clean'>Campo obligatorio</div>");
      $("#edad").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false;
    }else if ($("#edad").val() >= 130) {
      $("#edad").focus().after("<div class='clean'>Debe ser menor a 130 años</div>");
      $("#edad").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false
    }else if ($("#peso").val() >= 650) {
      $("#peso").focus().after("<div class='clean'>Debe ser menor a 650 kg</div>");
      $("#peso").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false
    }else if ($("#peso").val() == "") {
      $("#peso").focus().after("<div class='clean'>Campo obligatorio</div>");
      $("#peso").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false;
    }else if ($("#altura").val() == "") {
      $("#altura").focus().after("<div class='clean'>Campo obligatorio</div>");
      $("#altura").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false;
    }else if ($("#presionArterial").val() == "") {
      $("#presionArterial").focus().after("<div class='clean'>Campo obligatorio</div>");
      $("#presionArterial").addClass("inpt");
      $(".clean").css("color", "#000000");
      return false;
    }else if ($("#presionArterial").val() >= 200) {
      $("#presionArterial").focus().after("<div class='clean'>Debe ser menor a 200 mmHg</div>");
      $("#presionArterial").addClass("inpt");
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

  $('#edad').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'').replace(/,/g, '.');
    var max=4;
    var len=$(this).val().length;
      if (len>=max) {
        this.value=this.value.slice(0, 4)
       }
  });

  $('#peso').on('input', function () { 
    this.value = this.value.replace(/[^0-9,.]/g,'').replace(/,/g, '.');
    var max=4;
    var len=$(this).val().length;
      if (len>=max) {
        this.value=this.value.slice(0, 4)
      }
  });

  $('#altura').on('input', function () { 
    this.value = this.value.replace(/[^0-9,.]/g,'').replace(/,/g, '.');
    var max=4;
    var len=$(this).val().length;
      if (len>=max) {
        this.value=this.value.slice(0, 4)
      }
  });

  $('#presionArterial').on('input', function () { 
    this.value = this.value.replace(/[^0-9/]/g,'');
    var max=3;
      var len=$(this).val().length;
       if (len>=max) {
        this.value=this.value.slice(0, 3)
       }
  });

  $("#antecedentes").on("keypress", function(event){
    if ((event.which > 90 && event.which < 97)&&(event.which > 122 && event.which < 255)){
      return false;
    }
    if( (event.which > 32 && event.which < 65) || $(this).val().length == 1000){
      return false;
    }
  });
    
});
