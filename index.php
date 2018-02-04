<?php 
  session_start();
  
  require_once 'core/bootstrap.php';
  
  require_once 'partials/header.php';

//   class Router{

//     private $routes = [
//         'GET' => [],
//         'POST' => []
//     ];
//     public function get($uri, $controller) {
//         $this->routes['GET'][$uri] = $controller;
//     }
//     public function post($uri, $controller)  {
//         $this->routes['POST'][$uri] = $controller;
//     }
//     public function direct($uri, $request){
//         if (array_key_exists($uri, $this->routes[$request])) {
//             return $this->routes[$request][$uri];
//         }
//         else {
//           return $this->routes['GET'][''];
//         }
//     }
// }

$router = new Route;

$router->get('','controllers/home.php');
$router->get('index','controllers/home.php');
$router->get('products','controllers/products.php');
$router->get('details','controllers/details.php');
$router->get('register','views/register.template.php');
$router->post('register','controllers/register.php');
$router->get('login','views/login.template.php');
$router->post('login','controllers/login.php');

$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),'/');
$method = $_SERVER['REQUEST_METHOD'];


require $router->require($uri, $method);


  // $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),'/');  
  
  // if ($uri == '' || $uri == 'index') {
  //   require_once 'controllers/home.php';
  // }
  // elseif ($uri == 'products') {
  //   require_once 'controllers/products.php';
  // }
  // elseif ($uri == 'details'){
  //   require_once 'controllers/details.php';
  // }
  // elseif($uri == 'new' && ($_SERVER['REQUEST_METHOD']=="POST")){
  //  require 'controllers/register.php';
  // }
  // elseif ($uri == 'register'){
  //   require_once 'views/register.template.php';
  // }
  // else {
  //   echo "<h1>PAGE NOT FOUND
  //   back to <a href='/index'>Index</a></h1>";
  // }
  

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