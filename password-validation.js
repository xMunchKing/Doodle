/* password validation */

document.getElementById("password").addEventListener("input", function() {
    var password = this.value;
    var passwordError = document.getElementById("password-error");

    var regex = /^(?=.*[A-Z])(?=.*\d.*\d).{8,}$/;

    if (regex.test(password)) {
        passwordError.textContent = ""; // Clear error message if password is valid
    } else {
        passwordError.textContent = "Password must contain at least one uppercase letter and two numbers.";
    }
});