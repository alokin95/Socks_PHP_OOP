<?php

  session_start();
  $kon = mysqli_connect("localhost", "root", "", "socks");

  $gender = $_POST['gender'];

  $sql = "SELECT * FROM product p JOIN category c ON p.categoryid = c.categoryid JOIN image i ON p.imageid = i.imageid WHERE p.genderid =".$gender;

 $result = mysqli_query($kon, $sql);
  $output=[];
 while ($r = mysqli_fetch_object($result)){
  $output[]=$r;
 }
 echo json_encode($output);