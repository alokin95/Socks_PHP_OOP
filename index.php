<?php 
  session_start();
  
  require_once 'core/bootstrap.php';
  
  require_once 'views/partials/header.php';

  $router = new Route;

  //GET ROUTES
  $router->get('','controllers/home.php');
  $router->get('index','controllers/home.php');
  $router->get('products','controllers/products.php');
  $router->get('details','controllers/details.php');
  $router->get('logout', 'controllers/home.php');
  $router->get('account','controllers/cart_show.php');
  $router->get('register','views/register.template.php');
  $router->get('login','views/login.template.php');

  //POST ROUTES
  $router->post('products', 'controllers/comment_add.php');
  $router->post('account', 'controllers/cart_insert.php');
  $router->post('register','controllers/register.php');
  $router->post('index','controllers/login.php');

  //ADMIN ROUTES
  $router->get('panel', 'admin/admin_index.php');
  $router->post('cart', 'admin/admin_cart.php');
  $router->post('user', 'admin/admin_user.php');
  $router->post('product', 'admin/admin_product.php');
  $router->post('image', 'admin/admin_image.php');
  $router->post('comment', 'admin/admin_comment.php');


  $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),'/');
  $method = $_SERVER['REQUEST_METHOD'];

  require $router->require($uri, $method);

  require_once 'views/partials/footer.php';