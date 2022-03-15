let totalPrice2 = JSON.parse(localStorage["totalPrice"]);
totalPrice2 = totalPrice2.toFixed(2)

let user = []
try {
    user = JSON.parse(localStorage["data"]);
} catch {}

function makeOrder() {
    console.log("hei")
    if (localStorage['data']) {
        $("#p1").val(totalPrice2);
        $("#p2").val(user[0]);
        $("#p3").val("send");
        localStorage["totalPrice"] = []
        $("#f1").submit();
        console.log("hei")
    } else {

    }
}

