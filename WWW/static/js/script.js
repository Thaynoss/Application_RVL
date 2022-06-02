/* Sélection des éléments HTML */
let Deroulant = document.getElementsByClassName('MenuD')
let burger = document.getElementsByClassName('sous-menu')
let ul = document.querySelector('ul')

/* gestionnaire d'événement sur le a#link pour venir changer l'attribution de la classe .open à la ul et au span#burger */
burger.addEventListener('click', function(e) {
  e.preventDefault()
  burger.classList.toggle('open')
  ul.classList.toggle('open')
  console.log("Click");
})