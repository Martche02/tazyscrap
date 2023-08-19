document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault();

    let formData = new FormData(event.target);

    fetch("login.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        if(data === "success") {
            window.location.href = "welcome.php";
        } else {
            document.getElementById("message").textContent = "Login ou senha incorretos!";
        }
    })
    .catch(error => {
        console.error("Erro:", error);
    });
});
