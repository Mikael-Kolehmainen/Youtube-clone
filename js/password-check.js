function checkPasswords() {
    var pwCheck = document.getElementById("pwCheck");

    var pw = document.getElementById("pw").value;
    var pwRepeat = document.getElementById("repeat").value;

    var submitBtn = document.getElementById("sign-up");

    if (pw.length < 8) {
        submitBtn.disabled = true;
        pwCheck.innerText = "Use 8 characters or more for your password";
    // Checks if password doesn't have numbers
    } else if (/\d/.test(pw) == false) {
        submitBtn.disabled = true;
        pwCheck.innerText = "Please choose a stronger password. Try a mix of letters, numbers, and symbols.";
    // Checks if password doesn't have letters
    } else if (/[a-zA-Z]/.test(pw) == false) {
        submitBtn.disabled = true;
        pwCheck.innerText = "Please choose a stronger password. Try a mix of letters, numbers, and symbols.";
    // Checks if password doesn't have special characters
    } else if (/[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/.test(pw) == false) {
        submitBtn.disabled = true;
        pwCheck.innerText = "Please choose a stronger password. Try a mix of letters, numbers, and symbols.";
    } else if (pw != pwRepeat) {
        submitBtn.disabled = true;
        pwCheck.innerText = "Those passwords didn’t match. Try again.";
    } else {
        submitBtn.disabled = false;
        pwCheck.innerText = "";
    }
}
function showPassword() {
    var pwInput = document.getElementById("pw");
    var confirmInput = document.getElementById("repeat");

    if (pwInput.type == "password") {
        pwInput.type = "text";
        confirmInput.type = "text";
    } else {
        pwInput.type = "password";
        confirmInput.type = "password";
    }
}