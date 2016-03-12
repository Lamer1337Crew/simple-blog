<?php
//phpinfo();

include "includes/dbconfig.php";
include "includes/db.php";

session_start();

$db = new Db();
$result = $db->query("SELECT * FROM `posts` ORDER BY created DESC");
print_r($result);
