<?php

class Connection {
  public static function make() {
    return mysqli_connect("localhost", "root", "", "socks");
  }
}