<?php

echo "WELCOME ". $_SESSION['email'];

  // if (!isset($_SESSION['email'])){
  //   Header("Location:index");
  // }
  while ($r = mysqli_fetch_object($result)) {
    echo "<img src='".$r->src."'>";
  }


   

   