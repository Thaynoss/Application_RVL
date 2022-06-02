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
console.log("okoko");
$('document').ready(function(){
  console.log("okoko");
  var email_state = false;

   $('#id_email').on('blur', function(){
    var email = $('#id_email').val();
    if (email == '') {
      email_state = false;
      return;
    }
    console.log("ok1");
    $.ajax({
       url: 'http://192.168.1.17/index.php?page=Compte',
       type: 'post',
       data: {
         'email_check' : 1,
         'email' : email,
       },
       success: function(response){
         if (response == 'taken' ) {
           email_state = false;
           console.log("ok3");
           $('#id_email').parent().removeClass();
           $('#id_email').parent().addClass("form_error");
           $('#id_email').siblings("span").text('Désolé... Emaile déja utilisé');
         }else if (response == 'not_taken') {
           email_state = true;
           console.log("ok4");
           $('#id_email').parent().removeClass();
           $('#id_email').parent().addClass("form_success");
           $('#id_email').siblings("span").text('Email ok');
         }
       }
    });
  });
  console.log("ok2");
  $('#btn_form').on('click', function(){
    var email = $('#id_email').val();
    var password = $('#id_password').val();
    console.log("ok6");
    if (email_state == false) {
     $('#error_msg').text('Fix the errors in the form first');
   }else{
       // proceed with form submission
       $.ajax({
         url: 'http://192.168.1.17/index.php?page=Compte',
         type: 'post',
         data: {
           'save' : 1,
           'email' : email,
           'username' : username,
           'password' : password,
         },
         
         success: function(response){
           alert('user saved');
           console.log("ok7");
           $('#id_email').val('');
           $('#id_password').val('');
         }
       });
    }
  });
 });