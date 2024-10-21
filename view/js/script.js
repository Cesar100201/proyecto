const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');
const Preguntas = document.getElementById('preguntas');
const reg1 = document.getElementById("reg-1");
const reg2 = document.getElementById("reg-2");
const reg3 = document.getElementById("reg-3");
const signIn = document.getElementById("sign-in");
const siguienteBoton1 = document.getElementById("siguiente-1");
const siguienteBoton2 = document.getElementById("siguiente-2");
const siguienteBoton3 = document.getElementById("siguiente-3");



registerBtn.addEventListener('click', () => {
    container.classList.add("active");
    signIn.style.visibility = "hidden";
});
loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
    signIn.style.visibility = "visible";
});
siguienteBoton1.addEventListener("click", function () {
    reg1.style.animation = "blur-in 0.5s linear both"; // Aplica la animación
    reg1.style.visibility = "hidden";

    setTimeout(() => {
        reg1.style.animation = ""; // Limpia la animación
        reg2.style.visibility = "visible";
    }, 500); // Espera 500ms (duración de la animación) antes de mostrar reg2
});

