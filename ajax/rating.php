<?php
  session_start();
  
  require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/core/bootstrap.php');
  require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/classes/Rating.php');

  $rate = new Rating;

  $userid = $_SESSION['userid'];

  $productid = $_POST['productid'];
  $vote_value = $_POST['value'];

  $result = $rate->vote($userid, $productid, $vote_value);

  echo json_encode($result);