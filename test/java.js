const singUpButton = document.getElementyById('singup');
const singInButton = document.getElementyById('singin');
const container = document.getElementById('container');

singUpButton.addEventListener('click', () =>{
    container.classList.add("right-panel-active");
})

singInButton.addEventListener('click', () =>{
    container.classList.remove("right-panel-active");
})
