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
       url: 'index.php?page=Compte',
       
       success: function(response){
         console.log(email);
         console.log(response);
         if (response == "response" ) {
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