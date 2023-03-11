<?php

session_start();

if (!isset($_SESSION['user'])) {
    header("location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body class="bg-light">
    <div class="container mt-5" style="max-width:500px;">
        <h1 class=" mb-3">Naw Phaw (Actress)</h1>

        <?php if (file_exists('_actions/photos/profile.jpg')): ?>
        <div class="mb-3">
            <img src="_actions/photos/profile.jpg" alt="Profile Photo" class="img-thumbnail rounded shadow"
                width="150px" height="150px">
        </div>
        <?php endif ?>

        <form action="_actions/upload.php" method="post" enctype="multipart/form-data">
            <div class="input-group">
                <input type="file" class="form-control" name="photo">
                <button class="btn btn-secondary">Upload</button>
            </div>
        </form>

        <ul class="list-group">
            <li class="list-group-item">
                <b>Email:</b> john.doe@gmail.com
            </li>
            <li class="list-group-item">
                <b>Phone:</b> (09) 458 546 398
            </li>
            <li class="list-group-item">
                <b>Address:</b> No.(7), Kamayut Tsp, Yangon.
            </li>
        </ul>
        <br>

        <a href="_actions/logout.php">Logout</a>

    </div>
</body>

</html>