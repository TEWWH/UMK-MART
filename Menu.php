<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>sandwich</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="Menu.css">

</head>
<body>
<!-- partial:index.partial.html -->
<header class="header">
  <header class="header">
    <div class="container header__top">
      <div class="header__logo">
      <a href="index.php">
        <h1 class="header__title">
          <span>&#8592;</span>Back
        </h1></a>
      </div>
      
    <div class="header__cart">
      <ul>
        <li class="header__submenu" id="submenu">
          <button class="header__cart-btn" id="toggle-cart-btn"><svg class="cart" width="24" height="24" viewBox="0 0 24 24">
  <path d="M17,18C15.89,18 15,18.89 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20C19,18.89 18.1,18 17,18M1,2V4H3L6.6,11.59L5.24,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42A0.25,0.25 0 0,1 7.17,14.75C7.17,14.7 7.18,14.66 7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.58 17.3,11.97L20.88,5.5C20.95,5.34 21,5.17 21,5A1,1 0 0,0 20,4H5.21L4.27,2M7,18C5.89,18 5,18.89 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20C9,18.89 8.1,18 7,18Z"></path>
</svg> Your Cart</button>
          <div id="shopping-cart" class="shopping-cart-container">

            <table id="cart-content">
              <thead>
                <tr>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th></th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
            <p class="total-container" id="total-price"></p>
            <a href="#" id="checkout-btn" class="cart-btn">Checkout</a>
            <a href="#" id="clear-cart" class="cart-btn">Clear Cart</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
  
  <div class="arrow"><svg width="24" height="24" viewBox="0 0 24 24">
  <path d="M11,4H13V16L18.5,10.5L19.92,11.92L12,19.84L4.08,11.92L5.5,10.5L11,16V4Z"></path>
</svg></div>

</header>
<main class="container page-content">
  <h2 class="page-title">SANDWISH</h2>
  <div class="grid" id="grid">
    <div class="card">
      <img src="Veggie sandwich.webp" class="card__image" alt="">
      <div class="card__info">
        <h4 class="card__title">BREAKFAST</h4>
       
        <p class="card__price">RM8</p>
        <button class="card__btn add-to-cart" data-id="6">Add to Cart</button>
      </div>
    </div>
    <!--.card-->
    <div class="card">
      <img src="Veggie sandwich.webp" class="card__image" alt="">
      <div class="card__info">
        <h4 class="card__title">Learn to cook Italian food</h4>
        <p class="card__price">RM7</p>
        <button class="card__btn add-to-cart" data-id="7">Add to Cart</button>
      </div>
    </div>
    <!--.card-->
    <div class="card">
      <img src="Veggie sandwich.webp" class="card__image" alt="">
      <div class="card__info">
        <h4 class="card__title">Learn Guitar</h4>
        <p class="card__price">RM6</p>
        <button class="card__btn add-to-cart" data-id="8">Add to Cart</button>
      </div>
    </div>
    <!--.card-->
    <div class="card">
      <img src="Veggie sandwich.webp" class="card__image" alt="">
      <div class="card__info">
        <h4 class="card__title">Gardening 101</h4>
        <p class="card__price">RM7</p>
        <button class="card__btn add-to-cart" data-id="9">Add to Cart</button>
      </div>
    </div>
    <!--.card-->
    <div class="card">
      <img src="Veggie sandwich.webp" class="card__image" alt="">
      <div class="card__info">
        <h4 class="card__title">Cook a Home-Made Cake</h4>
        <p class="card__price">RM7</p>
        <button class="card__btn add-to-cart" data-id="10">Add to Cart</button>
      </div>
    </div>
    <!--.card-->
    <div class="card">
      <img src="Veggie sandwich.webp" class="card__image" alt="">
      <div class="card__info">
        <h4 class="card__title">Modern JavaScript</h4>
        <p class="card__price">RM5</p>
        <button class="card__btn add-to-cart" data-id="11">Add to Cart</button>
      </div>
    </div>
    <!--.card-->
    <div class="card">
      <img src="Veggie sandwich.webp" class="card__image" alt="">
      <div class="card__info">
        <h4 class="card__title">Build Layouts with CSS Grid</h4>
        <p class="card__price">RM7</p>
        <button class="card__btn add-to-cart" data-id="12">Add to Cart</button>
      </div>
    </div>
    <!--.card-->
     <!--.card-->
     <div class="card">
      <img src="Veggie sandwich.webp" class="card__image" alt="">
      <div class="card__info">
        <h4 class="card__title">Build Layouts with CSS Grid</h4>
        <p class="card__price">RM6</p>
        <button class="card__btn add-to-cart" data-id="12">Add to Cart</button>
      </div>
    </div>
    <!--.card-->
     <!--.card-->
     <div class="card">
      <img src="Veggie sandwich.webp" class="card__image" alt="">
      <div class="card__info">
        <h4 class="card__title">Build Layouts with CSS Grid</h4>
        <p class="card__price">RM5</p>
        <button class="card__btn add-to-cart" data-id="12">Add to Cart</button>
      </div>
    </div>
    <!--.card-->
  </div>
</main>

<!-- partial -->
  <script  src="Menu.js"></script>

</body>
</html>
