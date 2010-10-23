<?php
require_once("../config/database.php");

class DBv2 {
  public static function up($empty = FALSE) {
    if ($empty == TRUE) {
      $dbh = new PDO(DatabaseConfig::$connectionstring_empty);
    }
    else {
      $dbh = new PDO(DatabaseConfig::$connectionstring);
    }
    echo "Created DB connection\n";

    $query = 
      "ALTER TABLE news ADD COLUMN timestamp TEXT;";
    
    $dbh->exec($query);

    echo "Executed query\n";

    $dbh = NULL;

    echo "Done\n";
  }

  public static function down() {
    echo "Not implemented.\n";
    echo "See http://www.sqlite.org/faq.html#q11";
  }
} 
?>