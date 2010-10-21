<?php
require_once("config/login.php");

class Login {
  public function get() {
    echo HSHTPL::template("loginform");
  }

  public function post() {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (($username == LoginConfig::$username) &&
        ($password == LoginConfig::$password)) {
      echo "yay";
    } else {
      echo "nay";
    }
  }
}
?>