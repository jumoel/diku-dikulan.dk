<?php
require_once("../dkulib/auth.php");

class Control {
  public function tower() {
    AuthLib::authed();

    echo HSHTPL::template("tower");
  }

  public function crash() {
    session_start();

    unset($_SESSION["authed"]);
    unset($_SESSION["auth"]);

    session_destroy();

    header("Location: /");
  }
}
?>