<?php
require_once("../dkulib/auth.php");
require_once("../config/database.php");
require_once("../lib/lib-lib.php");

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

  public function create() {
    AuthLib::authed();

    $method = $_SERVER["REQUEST_METHOD"];

    if ($method == "GET") {
      echo HSHTPL::template("newform");
      
    } else if ($method == "POST") {
      $dbh = new PDO(DatabaseConfig::$connectionstring);

      $sql =
        "INSERT INTO news ("
        . "  title"
        . ", slug"
        . ", content"
        . ") VALUES ("
        . "  :title"
        . ", :slug"
        . ", :content"
        . ");";

      $query = $dbh->prepare($sql);

      $title = $_POST["blogtitle"];
      $slug = LIBLIB::slugify($title);;
      $content = $_POST["blogcontent"];

      $query->execute(array(":title" => $title,
                            ":slug" => $slug,
                            ":content" => $content));

      
      header("Location: /kontrol/taarn");
      exit();
    }
  }

}
?>