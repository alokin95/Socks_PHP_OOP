<?php

 require_once 'classes/Details.php';


$detailsPage = new Details($conn);

$result = $detailsPage->getInfo();

require_once view('details', $result);

//require_once 'views/details.template.php';

// (function() { 
//   $detailsPage = new Details($conn);

// $result = $detailsPage->getInfo();

// //require_once './views/details.php';

// return view('details',$result);
// })();
