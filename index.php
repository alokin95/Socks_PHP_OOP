<?php 
  
  require_once 'views/header.php';

  if (!isset($_GET['page']) || $_GET['page']==1){
    $_GET['page']='daa';
    require_once 'views/home.php';
  }

  if ($_GET['page']==2){
    require_once 'views/products.php';
  }

  if ($_GET['page']==3){
    require_once 'views/register.php';
  }

  if ($_GET['page']==4){
    require_once 'views/details.php';
  }

  require_once 'views/footer.php';