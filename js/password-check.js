function checkPasswords() {
    var pwCheck = document.getElementById("pwCheck");

    var pw = document.getElementById("pw").value;

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
    } else {
        submitBtn.disabled = false;
        pwCheck.innerText = "";
    }
}