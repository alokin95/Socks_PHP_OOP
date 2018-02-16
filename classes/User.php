<?php

  class User extends Connection{

    private $first;
    private $last;
    private $pass;
    private $email;
    private $session;

    public function __construct() {

      parent::__construct();

    }

    public function getAll(){

      $sql = "SELECT * FROM user";

      return $this->execute($sql);

    }

    public function update(){

      $id = $_POST['userid'];
      $first = $_POST['update-first'];
      $last = $_POST['update-last'];
      $email = $_POST['update-email'];
      $pass = password_hash($_POST['update-password'], PASSWORD_DEFAULT);
      $role = $_POST['update-roleid'];

      $sql = "UPDATE user SET first_name='$first', last_name='$last', email='$email', password='$pass',roleid='$role' WHERE userid='$id'";

      $this->execute($sql);

    }

    public function insert() {

      $first = $_POST['firstname'];
      $last = $_POST['lastname'];
      $email = $_POST['email'];
      $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
      $role = $_POST['roleid'];

      $sql = "INSERT INTO user VALUES ('','$first','$last','$pass','$email','$role')";

      $inserted = $this->execute($sql);

      $last_id = mysqli_insert_id($this->getConnection());

      if ($inserted) {

        $cart_sql = "INSERT INTO cart VALUES ('','$last_id')";
        $this->execute($cart_sql);

      }

    }

    public function getUser($id) {

      $sql = "SELECT * FROM user WHERE userid=".$id;

      return $this->execute($sql);

    }

    public function delete(){

      $delete = implode(', ', $_POST['for-delete-user']);

      $sql = "DELETE FROM user WHERE userid in ($delete)";

      $this->execute($sql);

    }

     public function login(){

      $this->email = $_POST['email'];;
      $this->pass = $_POST['password'];;

      $sql = "SELECT * FROM user INNER JOIN cart ON user.userid=cart.userid WHERE email = '$this->email'";

      $result = $this->execute($sql);

      if (mysqli_num_rows($result) == 1){

        $user = mysqli_fetch_object($result);

        $hashed_pass = $user->password;

        if (password_verify($this->pass ,$hashed_pass)){

        $_SESSION['email'] = $user->email;
        $_SESSION['role'] = $user->roleid;
        $_SESSION['cart'] = $user->cartid;
        $_SESSION['userid'] = $user->userid;
        
        return $result;
        
      }
      else {
        Header("location:login");
      }

     }
     
    }

     public function register() {

      $this->first = $_POST['firstName'];
      $this->last = $_POST['lastName'];
      $this->pass = password_hash($_POST['password'], PASSWORD_DEFAULT); 
      $this->email = $_POST['email'];

      $regMail = "/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/";
      $regName="/^[A-Za-z]{4,15}$/";

      $errors = [];

      if(!preg_match($regName ,$this->first ))
      {
        $errors[]="First name is in bad format";
      }

      if(!preg_match($regName ,$this->last ))
      {
        $errors[]="Last name is in bad format";
      }

      if(!preg_match($regMail ,$this->email ))
      {
        $errors[]="Email is in bad format";
      }

      if (empty($this->pass)){
        $errors[] ="Password is empty";
      }

      if (count($errors)>0) {
        // Header:("location:register");
        foreach ($errors as $e){
          echo $e."<br/>";
        }
        
      }
      else {

      $check_existing = "SELECT * FROM user WHERE email ='$this->email'";

      $checked = $this->execute($check_existing);

      if (mysqli_num_rows($checked)>0){
        echo "Email already in use";
      }
      else {

        $register = "INSERT INTO user VALUES ('','$this->first','$this->last','$this->pass','$this->email','2')";

        $registered = $this->execute($register);

        $last_id = mysqli_insert_id($this->getConnection());

        if ($registered) {

        $cart_sql = "INSERT INTO cart VALUES ('','$last_id')";
        $this->execute($cart_sql);

      }

      }
      
    }
    }

    // public function showCart($session) {

    //   $this->session = $session;

    //   $sql = "SELECT * FROM user INNER JOIN cart ON user.userid = cart.userid INNER JOIN cart_items ON cart.cartid = cart_items.cartid INNER JOIN product ON cart_items.productid = product.productid INNER JOIN image ON image.imageid = product.imageid WHERE user.email ='".$this->session."'";

    //   $result = $this->execute($sql);

    //   return $result;

    // }
  }