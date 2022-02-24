<?php
class Dao {
private $host = "us-cdbr-east-05.cleardb.net";
private $db = "heroku_f3d6b64b4b5dc57";
private $user = "b2a8f42a243fc3";
private $pass = "db8b4cb1";
public function getConnection () {
return
new PDO("mysql:host={$this->host};dbname={$this->db}"
}
...
}
