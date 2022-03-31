function Beranda() {
    window.location.href = "/beranda";
}
function ValidateLogin() {
    let usr = document.getElementById("input_username").value.toString();
    let psw = document.getElementById("input_password").value.toString();
    console.log(usr + " " + psw);
    if (usr == "admin" && psw == "admin") {
        input_username.style.backgroundColor = "";
        input_password.style.backgroundColor = "";
        Beranda();
        document.getElementById("t-notif").innerHTML = "";
    } else {
        input_username.style.backgroundColor = "#fba";
        input_password.style.backgroundColor = "#fba";
        document.getElementById("t-notif").innerHTML =
            "Username atau Password salah!";
    }
}
