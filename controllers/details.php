<?php

  require_once 'classes/Product.php';
  require_once 'classes/Comment.php';


  $detailsPage = new Product();

  
  $productid = $_GET['productid'] ?? 1;

  $comm = new Comment();

  $details['comment'] = $comm->showComment();


  $details['product'] = $detailsPage->getInfo();

 // if ($details['comment']){
    $result = extract($details);
  //}
  
  require_once view('details', $result);
  

//require_once 'views/details.template.php';

// (function() { 
//   $detailsPage = new Details($conn);

// $result = $detailsPage->getInfo();

// //require_once './views/details.php';

// return view('details',$result);
// })();
