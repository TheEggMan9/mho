function togglePasswordVisibility() {
    var passwordField = document.getElementById("password");
    var checkBox = document.getElementById("show-password");

    if (checkBox.checked) {
        passwordField.type = "text"; // Affiche le mot de passe en clair
    } else {
        passwordField.type = "password"; // Cache le mot de passe
    }
}
