<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
    <link rel='stylesheet' type='text/css' href='./assets/css/main.css'>
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
            $nav = mysqli_query($conn, $get_nav);

            
             while ($n = mysqli_fetch_array($nav)){
                echo "<li><a href='".$n['link']."'>".$n['title']."</a></li>";
             }
          ?>
        </ul>
      </nav>
      <div class='cart'>
        cart
      </div>
    </header>
    <main>