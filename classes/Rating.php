<?php


  class Rating extends Connection {

    public function __construct(){

      parent::__construct();

    }

     public function checkVoted($userid, $productid) {

      $sql = "SELECT * FROM rating_log WHERE userid='$userid' AND productid='$productid'";

      return $this->execute($sql);

     }

    public function vote($userid, $productid, $value) {

      $output;

      $check_voted = $this->checkVoted($userid, $productid);

      if (mysqli_num_rows($check_voted)>0){

        $output = "You already voted";

      }
      else {

        $vote = "UPDATE rating SET number_of_votes = number_of_votes+1, sum = sum+'$value' WHERE productid = '$productid'";

        if ($this->execute($vote)) {

          $vote_log = "INSERT INTO rating_log VALUES ('','$productid', '$userid')";

          $this->execute($vote_log);

          $output = "Success";
        }

      }
      
      return $output;

    }
  }