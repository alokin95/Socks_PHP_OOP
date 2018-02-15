<?php

  require_once 'classes/Product.php';
  require_once 'classes/Comment.php';


  $detailsPage = new Product();

  $comm = new Comment();

  $details['comment'] = $comm->showComment();

  $details['product'] = $detailsPage->getInfo();

  $result = extract($details);
  
  require_once view('details', $result);