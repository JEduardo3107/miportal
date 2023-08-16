const passwordButton = document.getElementById('showPasswordButton'),
      passwordInput = document.getElementById('showPasswordInput');

passwordButton.onclick = function(){
    let isVisible = passwordInput.type === 'text';
    passwordInput.type = isVisible ? 'password' : 'text';
    passwordButton.value = isVisible ? 'Mostrar' : 'Ocultar';
};