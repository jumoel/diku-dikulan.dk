<?php
require_once("../config/database.php");

class DBv1 {
  public static function up() {
    $dbh = new PDO(DatabaseConfig::$connectionstring);
    echo "Created DB connection\n";

    $query = 
      "CREATE TABLE news("
      . "  id INTEGER PRIMARY KEY AUTOINCREMENT"
      . ", title TEXT"
      . ", slug TEXT"
      . ", content TEXT"
      . ");";
    
    $dbh->exec($query);

    echo "Executed query\n";

    $dbh = NULL;

    echo "Done\n";
  }

  public static function down() {
    $dbh = new PDO(DatabaseConfig::$connectionstring);

    $query = 
      "DROP TABLE news;";
    
    $dbh->exec($query);

    $dbh = NULL;
  }
} 
?>