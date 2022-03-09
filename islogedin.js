
let data = JSON.parse(localStorage['data']);

if (localStorage.getItem('data')) {
    document.getElementById('loginbtn').innerHTML = "loged in";
} else {
    document.getElementById('loginbtn').innerHTML = "log in";
}
