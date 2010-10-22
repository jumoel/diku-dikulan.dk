<?php
require_once("../config/login.php");
require_once("../config/auth.php");
require_once("../lib/lib-lib.php");

class Login {
  public function get() {
    echo HSHTPL::template("loginform");
  }

  public function post() {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $client_ip = LIBLIB::client_ip();
    echo $client_ip;

    if (($username == LoginConfig::$username) &&
        ($password == LoginConfig::$password) &&
        ($client_ip != FALSE)) {

      session_start();

      $_SESSION["auth"] = sha1(AuthConfig::$spice . $client_ip);
      $_SESSION["authed"] = TRUE;

      header("Location: /kontroltaarn");
    } else {
      // Security through obscurity :D
      //header("Location: /404");
      exit();
    }
  }
}
?>