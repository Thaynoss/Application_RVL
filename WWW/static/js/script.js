/* Sélection des éléments HTML */
let Deroulant = document.getElementsByClassName('MenuD')
let burger = document.getElementsByClassName('sous-menu')
let ul = document.querySelector('ul')

/* gestionnaire d'événement sur le a#link pour venir changer l'attribution de la classe .open à la ul et au span#burger */
/*
burger.addEventListener('click', function(e) {
  e.preventDefault()
  burger.classList.toggle('open')
  ul.classList.toggle('open')
  console.log("Click");
})*/



// Verification du form d'inscription

$('document').ready(function(){

  var email_state = false;

   $('#id_email').on('blur', function(){ 
    var email = $('#id_email').val();
    
    if (email == '') {
      return;
    }

    $.ajax({
       type: 'POST',
       data: {
         'email_check' : 1,
         'email' : email,
       },
       url: 'index?page=Compte',
       
       success: function(response){
         console.log(email);
         alert(response);
         if (response == "taken" ) {
          alert("aaaaaaaaaaaaaaaaa");
           email_state = false;
           $('#id_email').parent().removeClass();
           $('#id_email').parent().addClass("form_error");
           $('#id_email').siblings("span").text('Désolé... Emaile déja utilisé');
         }else if (response == "not_taken") {
          email_state = true;
          alert("bbbbbbbbbbbbbbbbbbbb");
           $('#id_email').parent().removeClass();
           
           $('#id_email').parent().addClass("form_success");
           $('#id_email').siblings("span").text('Email ok');
         }
       }
       
    });
  });
  /*
  $('#btn_form').on('click', function(){
    var email = $('#id_email').val();
      console.log("email: "+email);
      console.log("OKOKOKOKOKOKO");
    
    if (email_state == false) {
      alert('FALSE');
     $('#error_msg').text('Fix the errors in the form first');
   }else{
       alert("aaaaaaaaaaaaaaaaaaaaaa");
       
       $.ajax({
         
         type: 'POST',
         data: {
           'save' : 1,
           'email' : email,
         },
         url: 'index?page=Compte',
         success: function(response){
           alert('user saved');
           console.log("ok7");
           $('#id_email').val('');
         }
       });
    }
  });*/
 });