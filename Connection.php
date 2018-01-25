<?php

class Connection {
  
  public static function make($config) {
	  
    //return mysqli_connect("localhost", "root", "", "socks");

    return mysqli_connect($config['connection'], $config['username'], $config['password'], $config['name']);
	
  }
}