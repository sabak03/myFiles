<!DOCTYPE html>
<html>
<head>
  <title>iTech</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles.css">

</head>
<body>

<div id="sidebar" class="sidebarNav">
  <a href="javascript:void(0)" class="closeBar" onclick="closeside()" style="color: white;">&times;</a>
  <button class="dropButton" style="outline: none;">Our Products 
    <i class="fa fa-caret-down"></i>
  </button>
    <div class="dropList">
      <a href="#iPhone13" onclick="openPage('iPhone13')">iPhone13</a>
      <a href="#moto" onclick="openPage('moto')">MotorolaE</a>
      <a href="#buy" onclick="openPage('buy')">Buy</a>
    </div>
  <a href="#contact" style="font-family: arial;" onclick="openPage('contact')">Contact Us</a>
  <a href="#about" style="font-family: arial;" onclick="openPage('about')">About Us</a>
  <a href="#SLA" style="font-family: arial;" onclick="openPage('SLA')">Legal</a>
  <hr>
  <a href="login.php" onclick="openPage('login')">Login or SignUp</a>
</div>

<div id="taskbar">
  <a href="#home" onclick="openPage('home')" id="logo" title="home"><img src="logo.png" alt="iTech" style="width:150px"></a>
  <div id="taskbarRight">
    <a href="#cart" onclick="openPage('cart')" title="cart"><i class="fa fa-shopping-cart"></i></a>
    <a href="login.php" onclick="openPage('login')" title="account"><i class="fa fa-user"></i></a>
    <span style="font-size:35px;padding-left:25px;cursor:pointer;color:black;" onclick="openside()" title="menu"> ☰ </span>
  </div>
</div>

<body>