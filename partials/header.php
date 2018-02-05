<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
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
      <div class='cart'>
      <?php if (isset($_SESSION['email'])):?>

        <a href='logout.php'>Logout</a>

      <?php endif; ?>
        cart
      </div>
    </header>
    <main>