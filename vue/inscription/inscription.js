

window.addEventListener("load", init);

function init(){ 
  var inputs = document.getElementById('formulaire').getElementsByTagName('input')
  for(var i = 0; i < inputs.length; i++) {
      inputs[i].addEventListener('change', check) 
  }

}


function check() {
    //check la validité de tout les champs et degrise le button si c'est bon
    var nom = document.getElementById('nom');
    var prenom = document.getElementById('prenom');
    var mail = document.getElementById('mail');
    var telephone = document.getElementById('telephone');
    var mdp = document.getElementById('mdp');
    var pseudo = document.getElementById('pseudo');
    var valider = document.getElementById('valider');
    
    var regex_alphab = /^[A-Za-z]+$/;
    var regex_mail = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    var regex_telephone = /^0[1-68]([-. ]?[0-9]{2}){4}$/;
    
    if(nom.value != '' && regex_alphab.test(nom.value) && 
        prenom.value != '' && regex_alphab.test(prenom.value) &&
        mail.value != '' && regex_mail.test(mail.value) &&
        pseudo.value != ''  && mdp.value != ''  &&
        
        (telephone.value == '' || regex_telephone.test(telephone.value))
        
        ){
        
        valider.disabled = false;
    }
    else valider.disabled = true;
    
}
