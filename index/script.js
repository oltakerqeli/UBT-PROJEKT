document.addEventListener("DOMContentLoaded",function(){
    const loginForm=document.querySelector(".login-form");
    
    loginForm.addEventListener("submit",function(event){
        event.preventDefault();

        const nameInput = loginForm.querySelector("input[type='text'][placeholder='Name Surname']");
        const emailInput=loginForm.querySelector("input[type='email']");
        const passwordInput = loginForm.querySelector("input[type='password']");

        const name = nameInput.value.trim();
        const email = emailInput.value.trim();
        const password = passwordInput.value.trim();

        if(name===""){
            alert("Please write your first and last name!");
            nameInput.focus();
            return;
        }
        if(email===""){
            alert("Please write your email!");
            emailInput.focus();
            return;
        }else if(!validateEmail(email)){
            alert("Please write a valid email!");
            emailInput.focus();
            return;
        } 
        if(password===""){
            alert("Please write your password!");
            passwordInput.focus();
            return;
        }else if(password.length < 6) {
            alert('Password must be at least 6 characters long.');
            return;
        }
        alert("Login successfully");
        loginForm.submit();
    });
    function validateEmail(email){
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }


});