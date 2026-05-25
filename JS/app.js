const buttons = document.querySelectorAll(".add-cart");

const cartCount = document.getElementById("cart-count");

const cartItems = document.getElementById("cart-items");

const cartButton = document.getElementById("cart-button");

const cartPanel = document.getElementById("cart-panel");

const closeCart = document.getElementById("close-cart");

let count = 0;
let cart = [];

/* ABRIR CARRITO */

cartButton.addEventListener("click", () => {

    cartPanel.classList.add("active");

});

/* CERRAR CARRITO */

closeCart.addEventListener("click", () => {

    cartPanel.classList.remove("active");

});

/* AÑADIR PRODUCTOS */

buttons.forEach(button => {

    const savedCart = JSON.parse(localStorage.getItem("moonCart"));

if (savedCart) {

    cart = savedCart;

    count = cart.length;

    cartCount.textContent = count;

    cartItems.innerHTML = "";

    cart.forEach(product => {

        cartItems.innerHTML += `
        
            <div class="cart-item">

                <h4>${product.name}</h4>

                <p>${product.price}</p>

            </div>

        `;
    });

}

    button.addEventListener("click", () => {

        count++;

        cartCount.textContent = count;
        if (count === 1) {

    cartItems.innerHTML = "";

}

        const productCard = button.parentElement;

        const productName = productCard.querySelector("h3").textContent;

        const productPrice = productCard.querySelector("p").textContent;
        cart.push({
    name: productName,
    price: productPrice
});
localStorage.setItem("moonCart", JSON.stringify(cart));

       cartItems.innerHTML += `
        
    <div class="cart-item">

        <h4>${productName}</h4>

        <p>${productPrice}</p>

        <button class="remove-item">
            Eliminar
        </button>

    </div>

`;
    const removeButtons = document.querySelectorAll(".remove-item");

        removeButtons.forEach(removeButton => {

            removeButton.addEventListener("click", () => {

             removeButton.parentElement.remove();

                count--;

        cartCount.textContent = count;

        if (count === 0) {

            cartItems.innerHTML = `
            
                <p>Tu carrito está vacío ✨</p>

            `;
        }

    });

});
    });
    

});