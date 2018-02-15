<?php

if(empty($_REQUEST['productid']))
   {
     $_GET['productid'] = 1;
   }

  require_once 'classes/Product.php';
  require_once 'classes/Comment.php';
  require_once 'classes/Rating.php';

  $detailsPage = new Product();
  $comm = new Comment();
  $rating = new Rating();

  $details['comment'] = $comm->showComment();
  
  $details['product'] = $detailsPage->getInfo();
  
  $productid = $_GET['productid'];
  $details['ratings'] = $rating->getRating($productid);

  $result = extract($details);
  
  require_once view('details', $result);