
var divCadastro = document.getElementById('divCadastro');
var divLogin = document.getElementById('divLogin');  
var divRecuperar = document.getElementById('divRecuperar');

var menus = document.querySelectorAll('#menu-login > div');

function exibirLogin(){
    divLogin.classList.remove('d-none');
    divCadastro.classList.add('d-none');
    divRecuperar.classList.add('d-none');

    menus[0].classList.remove('d-none');
    menus[1].classList.remove('d-none');
    menus[2].classList.add('d-none');
    
    menus[0].children[0].classList.add('active');
    menus[1].children[0].classList.remove('active');
    menus[2].children[0].classList.remove('active');
}

function exibirCadastro(){
    divCadastro.classList.remove('d-none');
    divLogin.classList.add('d-none');
    divRecuperar.classList.add('d-none');

    menus[0].classList.remove('d-none');
    menus[1].classList.remove('d-none');
    menus[2].classList.add('d-none');

    menus[0].children[0].classList.remove('active');
    menus[1].children[0].classList.add('active');
    menus[2].children[0].classList.remove('active');
}

function exibirRecuperar(){
    divRecuperar.classList.remove('d-none');
    divLogin.classList.add('d-none');
    divCadastro.classList.add('d-none');

    menus[0].classList.add('d-none');
    menus[1].classList.add('d-none');
    menus[2].classList.remove('d-none');

    menus[0].children[0].classList.remove('active');
    menus[1].children[0].classList.remove('active');
    menus[2].children[0].classList.add('active');
}

// Botão do Google
function handleCredentialResponse(response) {
    const data = jwt_decode(response.credential)
  
    console.log(data);
  
    fullName.textContent = data.name
    sub.textContent = data.sub
    given_name.textContent = data.given_name
    family_name.textContent = data.family_name
    email.textContent = data.email
    verifiedEmail.textContent = data.email_verified
    picture.setAttribute("src", data.picture)
}

window.onload = function () {
    //const clientID = window.prompt("Cole a sua Cliente ID", "")
    google.accounts.id.initialize({
      client_id: "902423440925-nklj2agoogc587cuqng0gpjr6vus43pr.apps.googleusercontent.com",
      callback: handleCredentialResponse
    });
  
    google.accounts.id.renderButton(
      document.getElementById("buttonG"), {
      theme: "outline",
      size: "large",
      type: "standard",
      type:"standard",
      shape:"pill",
      text:"$ {button.text}",
      logo_alignment:"left",
    } // customization attributes
    );
  
    google.accounts.id.prompt(); // also display the One Tap dialog
}

//Mascara do Telefone
const handlePhone = (event) => {
    let input = event.target
    input.value = phoneMask(input.value)
  }
  
  const phoneMask = (value) => {
    if (!value) return ""
    value = value.replace(/\D/g,'')
    value = value.replace(/(\d{2})(\d)/,"($1) $2")
    value = value.replace(/(\d)(\d{4})$/,"$1-$2")
    return value
  }

//Mascara Recuperar Senha
function RecuperarSenha(){
    let email = document.querySelector("#emEmail3").value;
    if (email != null){
        alert("Cheque sua caixa de email");
        window.location.href()
    }
}