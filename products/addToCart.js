const allItems = JSON.parse(localStorage['items'])
let cart = []
let totalPrice = JSON.parse(localStorage['totalPrice'] || 0);
try {
    cart = JSON.parse(localStorage['cart']);
} catch {}

function addToCart(id, name, price, img) {

    let saved = false;

    for (const product of cart)
    {
        if (product.product.id === id) {
            product.quantity++; // Adds quantity
            totalPrice = totalPrice + price; // Calculates total price
            saved = true;
        }
    }

    // Adds product to cart
    if (!saved) {
        cart.push({product:{id: id, name: name, price:price, img: img}, quantity: 1})
        totalPrice = totalPrice + price;
        localStorage['totalPrice'] = JSON.stringify(totalPrice);
    }

    // Saves cart and total price to localStorage
    localStorage['cart'] = JSON.stringify(cart)
    localStorage['totalPrice'] = JSON.stringify(totalPrice);
}