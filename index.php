<?php
//phpinfo();

include "includes/dbconfig.php";
include "includes/db.php";

session_start();

$db = new Db();
$result = $db->query("SELECT * FROM `posts` ORDER BY created DESC");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Simple blog</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active" id="post-new"><a href="#">Posts</a></li>
                <li><a href="#" id="post-list">About</a></li>
                <li><a href="/admin" id="categories-editor">Admin</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="col-md-12">
        <?php
        while ($row = mysqli_fetch_array($result)) {

            echo '<h1>' . $row['name'] . '</h1><p>' . $row['content'] . '</p><div><span class="badge">' . $row['created'] . '</span>
           <div class="pull-right">
                <span class="label label-default">category</span>
                <span class="label label-primary">category</span>
                <span class="label label-success">category</span>
                <span class="label label-info">category</span>
                <span class="label label-warning">category</span>
                <span class="label label-danger">category</span>
            </div>
        </div>
        <hr>';
        }
        ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
