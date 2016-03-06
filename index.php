<?php
//phpinfo();

include "includes/dbconfig.php";
include "includes/db.php";

session_start();

$db = new Db();
$result = $db->query('SELECT * FROM users');
print_r($result);
