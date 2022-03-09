const form = document.getElementById('signup-button')
let data;

function getValue() {
    if (document.querySelector("#RUID").value !== null) {
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
    else {
        data = []
    }
}

getValue()

form.addEventListener('submit', function (e){
    e.preventDefault();
});

localStorage["data"] = JSON.stringify(data);

console.log(data)


