let cart = JSON.parse(localStorage["cart"]);
let totalPrice = JSON.parse(localStorage["totalPrice"]);

// Viser alt som er i carten din på nettsiden
for (const product of cart)
{
    let itemsPrice = product.quantity * product.product.price; // kalulerer prisen til en type vare
    document.getElementById("cartItems").innerHTML +=`

        <div class="cartCard whiteBackground horizontal margin-auto">
            <img src="${product.product.img}" alt="Det er ingen bilde">
                <div id="cartInfo" class="horizontal">
                    <div>
                        <h3>Navn</h3>
                        <p>${product.product.name}</p>
                    </div>
                    <div>
                        <h3>Mengde</h3>
                        <p>${product.quantity}</p>
                    </div>
                    <div>
                        <h3>Pris</h3>
                        <p>${itemsPrice.toFixed(2)}</p>
                    </div>
                </div>
        </div>`

    ;
}
// viser totalpris på nettsiden
document.getElementById("totalPrice").innerHTML = "Total pris " + totalPrice.toFixed(2) // viser bare to desimaler