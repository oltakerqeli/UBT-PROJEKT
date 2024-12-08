document.addEventListener("DOMContentLoaded", function() {
    const registerForm = document.querySelector(".register-form");

    registerForm.addEventListener("submit", function (event) {
        event.preventDefault();
  
        const name = document.getElementById("name").value.trim();
        const surname = document.getElementById("surname").value.trim();
        const email = document.getElementById("email").value.trim();
        const password = document.getElementById("password").value.trim();
        const dob = document.getElementById("dob").value.trim();
        const termsAccepted = document.getElementById("conditions").checked;


  if(name===""){
    alert("Please enter your name!");
    document.getElementById("name").focus();
    return;
  }
  if(surname===""){
    alert("Please enter your surname!");
    document.getElementById("surname").focus();
    return;
  }

  if(email===""){
    alert("Please enter your email!");
    document.getElementById("email").focus();
    return;
  }else if(!validateEmail(email)){
    alert("Please enter a valid email address!");
    document.getElementById("email").focus();
    return;
  }

  if(password===""){
    alert("Please enter your password!");
    document.getElementById("password").focus();
    return;
  }else if(password.length <6){
    alert("Password must be at least 6 characters long!");
    document.getElementById("password").focus();
    return;
  }
  if(dob===""){
    alert("Please select your date of birth");
    return;
  }
  if(!termsAccepted){
    alert("You must accept the terms and conditions!");
    document.getElementById("conditions").focus();
    return;
  }

    alert("Registration successful!");
    registerForm.submit();

    });
    
    function validateEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
});
