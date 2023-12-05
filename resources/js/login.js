
const $formWrapper = document.querySelector('.login__form');

const $btnLogin = $formWrapper.querySelector('.btn-login');
const $btnCadastro = $formWrapper.querySelector('.btn-cadastro');

$btnLogin.addEventListener("click", handleToggleForm);
$btnCadastro.addEventListener("click", handleToggleForm);

function handleToggleForm(event){
  const $button = event.currentTarget;
  const hash = $button.href;

  event.preventDefault();

  if ($formWrapper.dataset.form === "login"){
    $formWrapper.dataset.form = "registrar";
  } else {
    $formWrapper.dataset.form = "login";
  }

}
