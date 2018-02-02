<?php 

  require_once 'core/bootstrap.php';
  
  require_once 'partials/header.php';

  $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),'/');  
  
  if ($uri == '' || $uri == 'index') {
    require_once 'controllers/home.php';
  }
  elseif ($uri == 'index/products') {
    require_once 'controllers/products.php';
  }
  elseif ($uri == 'index/details'){
    require_once 'controllers/details.php';
  }
  elseif($uri == 'index/register' && ($_SERVER['REQUEST_METHOD']=="POST")){
   require 'controllers/register.php';
  }
  elseif ($uri == 'index/register'){
    require_once 'views/register.template.php';
  }
  else {
    echo "<h1>PAGE NOT FOUND
    back to <a href='/index'>Index</a></h1>";
  }
  

  /*
  if (!isset($_GET['page']) || $_GET['page']==1){
    require_once 'views/home.php';
  }

  if ($_GET['page']==2){
    require_once 'controllers/products.php';
  }

  if ($_GET['page']==3){
    require_once 'views/register.php';
  }

  if ($_GET['page']==4){
    require_once 'views/details.php';
  }
  */
  

  require_once 'partials/footer.php';