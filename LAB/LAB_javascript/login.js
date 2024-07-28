var attempts = 3;

function validateLogin() {
    var email = document.getElementById('inputEmail').value;
    var password = document.getElementById('inputPassword').value;

    if (email === "jaturaphum.s@ku.th" && password === "AnSt-45kle45") {
        alert("Login Successfully");
        window.location.href = "MainForm.html";
        return false;
    } else {
        attempts--;
        if (attempts > 0) {
            alert("You have left " + attempts + " attempt(s)");
        } else {
            document.getElementById('inputEmail').disabled = true;
            document.getElementById('inputPassword').disabled = true;
            document.querySelector('button[type="submit"]').disabled = true;
            alert("No more attempts left. Please contact support.");
        }
        return false;
    }
}
