<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moon Market</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- NAVBAR -->

    <nav>

        <h1>🌙 Moon Market</h1>

        <ul>
            <li>Inicio</li>
            <li>Productos</li>

            <li id="cart-button">
                🛒 Carrito (<span id="cart-count">0</span>)
            </li>
        </ul>

    </nav>

    <!-- HERO -->

    <section class="hero">

        <h2>Descubre productos mágicos ✨</h2>

        <p>Tu tienda aesthetic favorita.</p>

        <button>Comprar ahora</button>

    </section>

    <!-- PRODUCTOS -->

    <section class="products">

        <div class="card">

            <img src="https://images.unsplash.com/photo-1603006905003-be475563bc59?q=80&w=600&auto=format&fit=crop"
                alt="Velas">

            <h3>Velas Lunares</h3>

            <p>19,99€</p>

            <button class="add-cart">
                Añadir al carrito
            </button>

        </div>

        <div class="card">

            <img src="https://images.unsplash.com/photo-1515942661900-94b3d1972591?q=80&w=600&auto=format&fit=crop"
                alt="Tarot">

            <h3>Tarot Astral</h3>

            <p>24,99€</p>

            <button class="add-cart">
                Añadir al carrito
            </button>

        </div>

        <div class="card">

            <img src="https://images.unsplash.com/photo-1515377905703-c4788e51af15?q=80&w=600&auto=format&fit=crop"
                alt="Aceites">

            <h3>Aceites Esenciales</h3>

            <p>29,99€</p>

            <button class="add-cart">
                Añadir al carrito
            </button>

        </div>

    </section>

    <!-- CARRITO -->

    <div class="cart-panel" id="cart-panel">

        <div class="cart-header">

            <h2>🛒 Tu carrito</h2>

            <button id="close-cart">
                X
            </button>

        </div>

        <div id="cart-items">

            <p>Tu carrito está vacío ✨</p>

        </div>

    </div>
    <footer>

    <h3>🌙 Moon Market</h3>

    <p>Tu rincón mágico online ✨</p>

    <div class="socials">

        <span>Instagram</span>
        <span>TikTok</span>
        <span>Pinterest</span>

    </div>

</footer>

    <script src="js/app.js"></script>

</body>

</html>