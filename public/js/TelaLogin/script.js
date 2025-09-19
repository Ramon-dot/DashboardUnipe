document.addEventListener("DOMContentLoaded", () => {
  const signInBtn = document.getElementById("signInBtn")
  const signUpBtn = document.getElementById("signUpBtn")
  const signInForm = document.getElementById("signInForm")
  const signUpForm = document.getElementById("signUpForm")

  // Toggle between Sign In and Sign Up
  signInBtn.addEventListener("click", () => {
    signInBtn.classList.add("active")
    signUpBtn.classList.remove("active")
    signInForm.classList.remove("d-none")
    signUpForm.classList.add("d-none")
  })

  signUpBtn.addEventListener("click", () => {
    signUpBtn.classList.add("active")
    signInBtn.classList.remove("active")
    signUpForm.classList.remove("d-none")
    signInForm.classList.add("d-none")
  })

  // Add floating animation to shapes
  const shapes = document.querySelectorAll(".shape")
  shapes.forEach((shape, index) => {
    shape.style.animationDelay = `${index * 0.5}s`
  })

  // Form validation
  const forms = document.querySelectorAll("form")
  forms.forEach((form) => {
    form.addEventListener("submit", (e) => {
      e.preventDefault()

      // Simple validation
      const inputs = form.querySelectorAll("input[required]")
      let isValid = true

      inputs.forEach((input) => {
        if (!input.value.trim()) {
          isValid = false
          input.style.borderColor = "#ff6b6b"
        } else {
          input.style.borderColor = "rgba(255, 255, 255, 0.2)"
        }
      })

      if (isValid) {
        alert("Form submitted successfully!")
      } else {
        alert("Please fill in all required fields.")
      }
    })
  })

  // Social login buttons
  const socialBtns = document.querySelectorAll(".social-btn")
  socialBtns.forEach((btn) => {
    btn.addEventListener("click", function () {
      const platform = this.querySelector("i").classList[1].split("-")[1]
      alert(`Login with ${platform} clicked!`)
    })
  })
})
