
if (localStorage.getItem('data')) {
    document.getElementById('loginbtn').innerHTML = "Loged in";
} else {
    document.getElementById('loginbtn').innerHTML = "Log in";
}

function getData() {
    if (localStorage.getItem('data')) {
        return JSON.parse(localStorage['data']);
    }
}
const data2 = getData();