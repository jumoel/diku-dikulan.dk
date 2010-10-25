<?php
require_once("../config/database.php");
require_once("../dkulib/time.php");
require_once("../dkulib/markdown.php");

class Main {
  function index() {
    $dbh = new PDO(DatabaseConfig::$connectionstring);
    $sql = "SELECT * FROM news ORDER BY id DESC LIMIT 10 ;";
    $query = $dbh->prepare($sql);
    $query->execute();

    $result = $query->fetchAll();

    $content = "";

    foreach($result as $row) {
      $content .=
        HSHTPL::template("newsitem", array("id" => $row["id"],
                                           "slug" => $row["slug"],
                                           "title" => $row["title"],
                                           "timestamp" => Time::relative_time($row["timestamp"]),
                                           "content" => Markdown($row["content"])));
    }
    
    echo HSHTPL::template("frontpage", $content);
  }

  function om() {
    echo HSHTPL::template("om-os");
  }
}

?>