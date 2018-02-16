<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <link rel='stylesheet' type='text/css' href='/assets/css/main.css'>
  <title>TITLE</title>
</head>

<body>
  <header class='flex-row'>
    <div class='logo'>
      logo
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