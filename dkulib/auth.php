<?php
require_once("../lib/lib-lib.php");
require_once("../config/auth.php");

class AuthLib {
  // Checks if the client is authed and redirects them if they're not
  public static function authed() {
    $client_ip = LIBLIB::client_ip();
    session_start();

    if ($client_ip != FALSE && $_SESSION["authed"] == TRUE) {
      $hash = sha1(AuthConfig::$spice . $client_ip);

      if ($_SESSION["auth"] == $hash) {
        return;
      }
    }

    header("Location: /404");
    exit();
  }
}

?>