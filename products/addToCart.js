let totalPrice = JSON.parse(localStorage['totalPrice'] || 0);
let cart = []
try { // prøver denne linje kode og hvis den feiler så går det greit
    cart = JSON.parse(localStorage['cart']);
} catch {}

function addToCart(id, name, price, img) { // legger varer i cart og øker totalprice fra localstorage

    let saved = false; // brukes til sjekke om varen er lagt til å cart fra før og om vi må øke mengde av en vare

    for (const product of cart)
    {
        if (product.product.id === id) { // kjekker om varen er i localstorage
            product.quantity++;
            totalPrice = totalPrice + price; // kalkulerer total pris
            saved = true;
        }
    }

    // legger productet i cart
    if (!saved) { // sjekker om vi trenger å legge produktet i carten
        cart.push({product:{id: id, name: name, price:price, img: img}, quantity: 1})
        totalPrice = totalPrice + price;
    }

    // lagrer cart og totalprice i localstorage
    localStorage['cart'] = JSON.stringify(cart)
    localStorage['totalPrice'] = JSON.stringify(totalPrice);
}