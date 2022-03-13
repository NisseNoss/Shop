let cart = JSON.parse(localStorage['cart']) || [];
let oid = JSON.parse(localStorage["oid"])

function makeOrderTime() {
    if (cart.length > 0) {
        $("#p4").val(oid);
        $("#p5").val(cart[0].product.id);
        $("#p6").val(cart[0].quantity);
        $("#p7").val("send");
        cart.splice(0, 1)
        localStorage["cart"] = JSON.stringify(cart);
        $("#f2").submit();
    }
}