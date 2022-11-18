<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lantema Grocery Store</title>

  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <!-- custom css file link  -->
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">

</head>

<body>

  <!-- header section starts  -->

  <header class="header">

    <a href="#" class="logo"> <i class="fas fa-shopping-basket"></i> Lantemagroceries</a>

    <nav class="navbar">
      <a href="#home">home</a>
      <a href="#features">features</a>
      <a href="#products">products</a>
      <a href="#categories">categories</a>
    </nav>

    <div class="icons">
      <div class="fas fa-bars" id="menu-btn"></div>
      <div class="fas fa-shopping-cart" id="cart-btn"></div>
      <a href="<?= base_url('login'); ?>">
        <div class="fas fa-user" id="login-btn"></div>
      </a>
    </div>

    <form action="" class="search-form">
      <input type="search" id="search-box" placeholder="search here...">
      <label for="search-box" class="fas fa-search"></label>
    </form>

    <div class="shopping-cart">
      <div class="box">
        <i class="fas fa-trash"></i>
        <img src="C:\Users\Natasha\Desktop\GroceryPROJECT\extracted\project - Copy\image\cart-img-1.png" alt="">
        <div class="content">
          <h3>watermelon</h3>
          <span class="price">400/-</span>
          <span class="quantity">qty : 1</span>
        </div>
      </div>
      <div class="box">
        <i class="fas fa-trash"></i>
        <img src="C:\Users\Natasha\Desktop\GroceryPROJECT\extracted\project - Copy\image\cart-img-2.png" alt="">
        <div class="content">
          <h3>onion</h3>
          <span class="price">200/-</span>
          <span class="quantity">qty : 1</span>
        </div>
      </div>
      <div class="box">
        <i class="fas fa-trash"></i>
        <img src="C:\Users\Natasha\Desktop\GroceryPROJECT\extracted\project - Copy\image\cart-img-3.png" alt="">
        <div class="content">
          <h3>chicken</h3>
          <span class="price">800/-</span>
          <span class="quantity">qty : 1</span>
        </div>
      </div>
      <div class="total"> total : Ksh1,400 </div>
      <a href="#" class="btn">checkout</a>
    </div>

    <form action="" class="login-form">
      <h3>login now</h3>
      <input type="email" placeholder="your email" class="box">
      <input type="password" placeholder="your password" class="box">
      <p>forget your password <a href="#">click here</a></p>
      <p>don't have an account <a href="#">create now</a></p>
      <input type="submit" value="login now" class="btn">
    </form>

  </header>

  <!-- header section ends -->