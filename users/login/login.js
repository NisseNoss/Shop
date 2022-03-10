const form = document.getElementById('signup-button');
let data;

function getValue() {
    data = [
        document.querySelector("#RUID").value,
        document.querySelector("#RFN").value,
        document.querySelector("#RLN").value,
        document.querySelector("#RA").value,
        document.querySelector("#REM").value,
        document.querySelector("#RPAS").value,
        document.querySelector("#RPN").value
    ]
}

if (!localStorage.getItem('data')) {
    getValue();
}
form.addEventListener('submit', function (e){
    e.preventDefault();
});

if (!localStorage.getItem('data')) {
    localStorage["data"] = JSON.stringify(data);
}
console.log(data)


