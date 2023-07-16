// function pour cacher mot de passe et l'afficher 
function togglePassword() {
    let x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    } 
  }

//   confirmation mot de passe 


  
function confirmPassword() {
    let password = document.getElementById('password').value
    let password2 = document.getElementById('password2').value
    if(password != password2) {
        alert('erreur dans le mot de passe');
    }
}
