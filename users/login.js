let RUID;
let RFN;
let RLN;
let RA;
let REM;
let RPAS;
let RPN;
const form = document.querySelector('form')
let array;

function getValue() {
    if (document.querySelector("#RUID").value !== null) {
        array = [
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
        array = []
    }
}

getValue()

form.addEventListener('submit', function (e){
    e.preventDefault();

    localStorage.setItem("data", JSON.stringify(array));
})


