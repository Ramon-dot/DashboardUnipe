document.addEventListener("DOMContentLoaded", () => {
  const signInBtn = document.getElementById("signInBtn");
  const signUpBtn = document.getElementById("signUpBtn");
  const signInForm = document.getElementById("signInForm");
  const signUpForm = document.getElementById("signUpForm");

  //Alternar entre Entrar e Cadastrar-se
  signInBtn.addEventListener("click", () => {
    signInBtn.classList.add("active");
    signUpBtn.classList.remove("active");
    signInForm.classList.remove("d-none");
    signUpForm.classList.add("d-none");
  });

  signUpBtn.addEventListener("click", () => {
    signUpBtn.classList.add("active");
    signInBtn.classList.remove("active");
    signUpForm.classList.remove("d-none");
    signInForm.classList.add("d-none");
  });

  //Adicionar animação flutuante às formas
  const shapes = document.querySelectorAll(".shape");
  shapes.forEach((shape, index) => {
    shape.style.animationDelay = `${index * 0.5}s`;
  });

  //Botões de login social
  const socialBtns = document.querySelectorAll(".social-btn");
  socialBtns.forEach((btn) => {
    btn.addEventListener("click", function () {
      const platform = this.querySelector("i").classList[1].split("-")[1];
      alert(`Login with ${platform} clicked!`);
    });
  });
});