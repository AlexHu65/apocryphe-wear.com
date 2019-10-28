AOS.init();
(()=>{



  $(window).on("load", ()=>{

    // var n = 0;
    // let random =  Math.round(Math.random() * 9) + 1;
    // $("#loader").addClass("loader" + random);
    //
    // let intervalo =  setInterval(() => {
    //   n++;
    //   if(n == 2){
    //     ejecutarLoader();
    //   }
    //
    // }, 1000);
    //
    // let ejecutarLoader = ()=>{
      $("#loader").toggle("pulsate", {times: 2});
      // clearInterval(intervalo);
    // }
  });



  let scroll = () => {
    $(window).on('scroll', () => {
      if($(this).scrollTop() >= 1 && ($(this).width() >= 479)){
        $('.menu').addClass("menu-fixed");
      }else{
        $('.menu').removeClass("menu-fixed");
      }
    })
  }

  let menuResponsive = () => {
    let show = false;
    $("#menu-button").click(()=>{
      if(!show){
        $(".menu-wrapper").show("slide" ,{direction: "right"}, 500);
        show = true;
      }else{
        $(".menu-wrapper").hide("slide",{direction: "right"}, 500);
        show = false;
      }
    });
  }

  /* FORMULARIOS */
  var formularios = (function () {

    var contacto = {
      formulario: $('#frm-contacto'),
      campos: {

        nombre: {validators: {notEmpty: {message: "Este campo es requerido"},regexp: {regexp: /^[a-z\s]+$/i,message: 'Solo se permiten letras'}}},
        telefono: {validators: {notEmpty: {message: "Este campo es requerido"},regexp: {regexp: /^[0-9\s]+$/i,message: 'Solo se permiten numeros'}}},
        email: {validators: {notEmpty: {message: "Este campo es requerido"},emailAddress: {message: 'Correo no valido'}}},
        comentario: {validators: {notEmpty: {message: "Este campo es requerido"},stringLength: {max: 300,message: 'Estas excediendo el maximo de caracteres permitidos'}}},

      }
    };

    var bootstrapValidator = function (selector, fields, callback) {
      var options = {
        // feedbackIcons : {
        //   valid : "glyphicon glyphicon-ok",
        //   invalid : "glyphicon glyphicon-remove",
        //   validating : "glyphicon glyphicon-refresh"
        // },
        fields : fields,
        onSuccess : function (e) {
          if (callback != []._ && callback.call) callback.call(selector);
        }
      }
      selector.bootstrapValidator(options);
    };


    var FormContacto = function () {
      bootstrapValidator(contacto.formulario, contacto.campos, function(){
        $(this).submit(function () {
          $('.send').hide();
          $('.loading').removeClass('dn');
          var datos = $( this ).serialize();
          $.post('mail.php', datos, function(response){
            $('.loading').addClass('dn');
            $('.msg').html(response.msg);
            $('.msg').removeClass('dn');
          }, 'json');
          return false;
        });
      });
    };


    return {
      FormContacto: FormContacto
    };
  })();

  formularios.FormContacto();
  scroll();
  menuResponsive();

}).call(this)
