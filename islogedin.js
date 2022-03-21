
if (localStorage.getItem('data')) { // skjekker om du er logget inn
    document.getElementById('loginbtn').innerHTML = "Logged inn";
    document.getElementById('loginbtn').href = "/users/profile.php";
} else {
    document.getElementById('loginbtn').innerHTML = "Log inn";
}

function getData() { // henter bruker fra localstoage
    if (localStorage.getItem('data')) {
        return JSON.parse(localStorage['data']);
    }
}

function logOut() { // logger ut ved å slette bruker i localstoage
    localStorage.removeItem("data")
    window.location.href = '/index.php';
}

const data2 = getData();
