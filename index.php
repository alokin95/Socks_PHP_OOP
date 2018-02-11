<?php 
  session_start();
  
  require_once 'core/bootstrap.php';
  
  require_once 'partials/header.php';

  $router = new Route;

  $router->get('','controllers/home.php');
  $router->get('index','controllers/home.php');
  $router->get('products','controllers/products.php');
  $router->get('details','controllers/details.php');
  $router->get('register','views/register.template.php');
  $router->get('login','views/login.template.php');
  $router->get('logout', 'controllers/home.php');
  $router->get('account','controllers/cart_show.php');

  $router->post('products', 'controllers/comment_add.php');
  $router->post('account', 'controllers/cart_insert.php');
  $router->post('register','controllers/register.php');
  $router->post('index','controllers/login.php');

  $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),'/');
  $method = $_SERVER['REQUEST_METHOD'];

  require $router->require($uri, $method);

  require_once 'partials/footer.php';