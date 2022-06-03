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
       url: 'index.php?page=Compte',
       
       success: function(data){ 
        var response = JSON.parse(data.replace("<!DOCTYPE HTML>","")); // on enlève la balise HTML pour avoir le json taken.true seulement
         if (response.taken == true ) {
            email_state = false;
            
            $('#id_email').parent().removeClass();
            $('#id_email').parent().addClass("form_error");
            $('#id_email').siblings("span").text('Désolé.. Cette adresse est déjà utilisée.');
         
          }else if (response.taken == false) {
          email_state = true;
           $('#id_email').parent().removeClass();
           $('#id_email').parent().addClass("form_success");
           $('#id_email').siblings("span").text('Cette adresse est disponible.');
         }
       }
    });
  });
 });


/*
 function ValidateEmail(mail) {
  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(formeInscription.emailAddr.ValiderFormInscription)){
    return (true)
  }
    alert("You have entered an invalid email address!")
    return (false)
}
*/