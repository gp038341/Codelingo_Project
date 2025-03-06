let fname = document.querySelector("#first");
let lname = document.querySelector("#last");
let email = document.querySelector("#emailAddr")
let password = document.querySelector("#password");
let age = document.querySelector("#age");
let errorMsg = document.querySelector("#errorMsg");
let acceptTerms = document.querySelector("#acceptTerms");
let specialChars = "!@#$%^&*"

let isValid = true;

errorMsg.innerHTML = "";

if (fname.value.length === 0){
    errorMsg.innerHTML = "First name is missing.";
    isValid = false;
}
else if (!isNaN(fname)){
    errorMsg.innerHTML = "No numbers can be in your name."
    isValid = false;
}
if (lname.value.length === 0){
    errorMsg.innerHTML = "Last name is missing.";
    isValid = false;
}
else if (!isNaN(lname)){
    errorMsg.innerHTML = "No numbers can be in your name.";
    isValid = false;
}
if (email.value.length == 0){
    errorMsg.innerHTML = "Email is missing";
    isValid = false;
}
else if (email.indexOf("@") == false){
    errorMsg.innerHTML = "Please enter a valid email";
    isValid = false;
}
if (password.value.length === 0){
    errorMsg.innerHTML = "Password is missing";
    isValid = false;
}
else if (password.indexOf(specialChars) == false){
    errorMsg.innerHTML = "Please make sure your password has at least 1 special character.";
    isValid = false;
    
}
else if (password.value.length <= 5){
    errorMsg.innerHTML = "Please make sure your password is longer than 5 characters.";
    isValid = false;
}
if (age.value.length === 0){
    errorMsg.innerHTML = "Age is missing";
    isValid = false;
}
else{
    let age_val = parseFloat(age);
    if (age_val < 18){
        errorMsg.innerHTML = "Must be older than 18";
        isValid = false;
    }
}
function checkValid(event){
    if (!isValid){
        event.preventDefault();
    }
}