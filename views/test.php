<?php

$conn = mysqli_connect("localhost", "root", "", "socks");

$first = $_REQUEST['first'];
$last = $_REQUEST['last'];

$sql = "INSERT INTO user VALUES ('','$first','$last','','')";

mysqli_query($conn, $sql);

