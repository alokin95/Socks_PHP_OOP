<?php 

  require_once 'views/header.php';

  if ($_GET['page']==1){
    require_once 'views/home.php';
  }

  if ($_GET['page']==2){
    require_once 'views/register.php';
  }
  
  require_once 'views/footer.php';