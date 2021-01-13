function changeBackgroundImage(color) {

    if (color == "piros") {
        document.getElementById("loginSection").style.background = "url('images/red.png') rgb(255, 250, 245) no-repeat center";
        document.getElementById("loginSection").style.backgroundSize = "100% 100%";
    } else if (color == "zold") {
        document.getElementById("loginSection").style.background = "url('images/green.png') rgb(255, 250, 245) no-repeat center";
        document.getElementById("loginSection").style.backgroundSize = "100% 100%";
    } else if (color == "sarga") {
        document.getElementById("loginSection").style.background = "url('images/yellow.png') rgb(255, 250, 245) no-repeat center";
        document.getElementById("loginSection").style.backgroundSize = "100% 100%";
    } else if (color == "kek") {
        document.getElementById("loginSection").style.background = "url('images/blue.png') rgb(255, 250, 245) no-repeat center";
        document.getElementById("loginSection").style.backgroundSize = "100% 100%";
    } else if (color == "fekete") {
        document.getElementById("loginSection").style.background = "url('images/black.png') rgb(255, 250, 245) no-repeat center";
        document.getElementById("loginSection").style.backgroundSize = "100% 100%";
    } else if (color == "feher") {
        document.getElementById("loginSection").style.background = "url('images/white.png') rgb(255, 250, 245) no-repeat center";
        document.getElementById("loginSection").style.backgroundSize = "100% 100%";
    }

}


function emailWarning() {

    document.getElementById("email").style.borderColor = "red";
    var warning = document.createElement("p");
    warning.innerHTML = "Nincs ilyen felhasználó";
    warning.style.color = "red";
    document.getElementById("warning").appendChild(warning);

}


function passwordWarning() {

    document.getElementById("pwd").style.borderColor = "red";
    var warning = document.createElement("p");
    warning.innerHTML = "Hibás jelszó";
    warning.style.color = "red";
    document.getElementById("warning").appendChild(warning);
    setTimeout(openURL, 3000);

}

function openURL() {

    window.open('http://www.police.hu/');

}
