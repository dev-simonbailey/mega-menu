<?php ?>
<!--
Module Name: modulR Mega Menu
Component: Mega Menu
Author: Simon Bailey
Verson: 1.0.0
website: https://github.com/dev-simonbailey
-->
<style>
* {
  box-sizing: border-box;
}
.<?=$css_id?>_navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial, Helvetica, sans-serif;
}

.<?=$css_id?>_navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.<?=$css_id?>_dropdown {
  float: left;
  overflow: hidden;
}

.<?=$css_id?>_dropdown .<?=$css_id?>_dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font: inherit;
  margin: 0;
}

.<?=$css_id?>_navbar a:hover, .<?=$css_id?>_dropdown:hover .<?=$css_id?>_dropbtn {
  background-color: var(--primary);
  color: #000;
}

.<?=$css_id?>_dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  width: 100%;
  left: 0;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.<?=$css_id?>_dropdown-content
.<?=$css_id?>_header {
  background: red;
  padding: 16px;
  color: white;
}

.<?=$css_id?>_dropdown:hover
.<?=$css_id?>_dropdown-content {
  display: block;
}

/* Create three equal columns that floats next to each other */
.<?=$css_id?>_column {
  float: left;
  width: 33.33%;
  padding: 10px;
  background-color: #ddd;
  height: 250px;
}

.<?=$css_id?>_column a {
  float: none;
  color: black;
  padding: 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.<?=$css_id?>_column a:hover {
  background-color: #eee;
}

/* Clear floats after the columns */
.<?=$css_id?>_row:after {
  content: "";
  display: table;
  clear: both;
}

.<?=$css_id?>_heading {
  font-weight:bold;
  font-size:32px;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .<?=$css_id?>_column {
    width: 100%;
    height: auto;
  }
}
</style>
<div class="<?=$css_id?>_navbar">
  <a href="index.php">Home</a>
  <a href="index.php?p=about">About</a>
  <div class="<?=$css_id?>_dropdown">
    <button class="<?=$css_id?>_dropbtn">Shop
    </button>
    <div class="<?=$css_id?>_dropdown-content">
      <div class="<?=$css_id?>_row">
        <div class="<?=$css_id?>_column">
          <a href="index.php?p=shop-product-list&id=6" class='<?=$css_id?>_heading'>Accessories</a>
          <a href="index.php?p=shop-product-detail&id=c_van_step_1">Caravan Step</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
        <div class="<?=$css_id?>_column">
          <a href="index.php?p=shop-product-list&id=1" class='<?=$css_id?>_heading'>Fashion</a>
          <a href="index.php?p=shop-product-detail&id=1-0001">Bench Shirt</a>
          <a href="index.php?p=shop-product-detail&id=1-0002">Amanda Waller Shirt</a>
        </div>
        <div class="<?=$css_id?>_column">
          <a href="index.php?p=shop-product-list&id=3" class='<?=$css_id?>_heading'>Phones</a>
          <a href="index.php?p=shop-product-detail&id=s_g_s9">Samsung Galaxy S9</a>
        </div>
      </div>
    </div>
  </div>
  <a href="index.php?p=shopping-basket" id="count-cart"> Basket (0)</a>
  <a href="index.php?p=contact">Contact</a>
  <div class="<?=$css_id?>_dropdown">
    <button class="<?=$css_id?>_dropbtn">Policies
    </button>
    <div class="<?=$css_id?>_dropdown-content">
      <div class="<?=$css_id?>_row">
        <div class="<?=$css_id?>_column">
          <a href="#" class='<?=$css_id?>_heading'>Privacy</a>
          <a href="index.php?p=shop-product-detail&id=c_van_step_1">GDPR</a>
          <a href="#">Cookies</a>
          <a href="#">Website</a>
        </div>
        <div class="<?=$css_id?>_column">
          <a href="#" class='<?=$css_id?>_heading'>Delivery & Returns</a>
          <a href="index.php?p=shop-product-detail&id=1-0001">Delivery</a>
          <a href="index.php?p=shop-product-detail&id=1-0002">Returns</a>
        </div>
        <div class="<?=$css_id?>_column">
        </div>
      </div>
    </div>
  </div>
</div>
