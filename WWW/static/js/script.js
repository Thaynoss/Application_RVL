// Verification du form d'inscription

$('document').ready(function(){

  var email_state = false;
  var action;

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
       url: 'index.php?page=Compte',
       
       success: function(data){ 
        var response = JSON.parse(data.replace("<!DOCTYPE HTML>","")); // on enlève la balise HTML pour avoir le json taken.true seulement
         if (response.taken == true ) {
          email_state = false;
            
          $('#id_email').parent().removeClass();
          $('#id_email').parent().addClass("form_error");
          $('#id_email').siblings("span").text('Désolé.. Cette adresse est déjà utilisée.');
          action="";
          document.getElementById("register_form").action = action;
          }else if (response.taken == false) {
          
          $('#id_email').parent().removeClass();
          $('#id_email').parent().addClass("form_success");
          $('#id_email').siblings("span").text('Cette adresse est disponible.');
          
          action="index.php?page=CreerProfile";
          document.getElementById("register_form").action = action;
           
         }
       }
    });
  });
 });
