<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog admin panel</title>
    <link rel="shortcut icon" href="../img/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>

<div class="container">

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Admin panel</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">New</a></li>
                    <li><a href="#">Posts</a></li>
                    <li><a href="#">Temp</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="form-group">
        <label for="usr">Title:</label>
        <input type="text" class="form-control" id="title">
    </div>
    <div class="form-group">
        <textarea class="form-control" rows="10" placeholder="What's up?" required></textarea>
    </div>
    <div class="form-group">
        <button type="button" id="send-post" class="btn btn-success">Publish blog-post</button>
    </div>


</div>

<script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script>
    $(document).on('ready', function () {
        $('.navbar-nav li').on('click', function () {
            $('.navbar-nav li').removeClass('active');
            $(this).addClass('active');
        })
    })
</script>

</body>
</html>