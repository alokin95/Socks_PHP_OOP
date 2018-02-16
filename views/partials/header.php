<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="icon" href="assets/img/other/favicon.svg" type="image/gif" sizes="16x16">
  <meta name="description" content="Buy socks. Great socks for sale for men, women and kids.">
  <meta name="keywords" content="Socks, shop, ecommerce, buy, sell, comment, products, trail, mountain, blister">
  <meta name="author" content="Nikola Mitrovic">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <link rel='stylesheet' type='text/css' href='/assets/css/main.css'>
  <title>Socks Awesome</title>
</head>

<body>
  <header class='flex-row'>
    <div class='logo'>
     <a href="index"><img src='assets/img/other/logo.jpg' width="180px" height="100px"></a>
    </div>
    <nav>
      <ul>
        <?php

            $get_nav = "SELECT * FROM nav";

            $nav = $conn->execute($get_nav);

            
             while ($n = mysqli_fetch_object($nav)){
                echo "<li><a href='".$n->link."'>".$n->title."</a></li>";
             }
          ?>
      </ul>
    </nav>
    <div class='cart flex-row'>
      <?php
      if (isset($_SESSION['role']) && $_SESSION['role']==1){ ?>
      <a href='panel'>
        <i class="material-icons" style="font-size:36px">person</i>
        <p>ADMIN PANEL</p>
      </a>

      <?php }else { ?>
        <a href='login'>
        <i class="material-icons" style="font-size:36px">person</i>
      </a>
      <?php } ?>
      <a href='account'>
        <i class="material-icons" style="font-size:36px">shopping_cart</i>
      </a>

      <?php if (isset($_SESSION['email'])):?>

      <a href='logout.php'><i class="material-icons" style="font-size:36px">close</i></a>


      <?php endif; ?>
    </div>
  </header>
  <main>