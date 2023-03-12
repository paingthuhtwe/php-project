<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body class="bg-light">
    <div class="container text-center mt-5 py-4 px-3 bg-white border rounded shadow" style="max-width: 320px;">
        <h1 class="h3 mb-3">Register</h1>
        <form action="_actions/create.php" method="post">
            <div class="mb-2">
                <input type="text" class="form-control" name="name" placeholder="Name" required>
            </div>
            <div class="mb-2">
                <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
            <div class="mb-2">
                <input type="text" class="form-control" name="phone" placeholder="Phone" required>
            </div>
            <div class="mb-2">
                <textarea name="address" class="form-control" placeholder="Address" required></textarea>
            </div>
            <div class="mb-2">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <button class="w-100 btn btn-primary mb-2">Regisger</button>
            <a href="index.php">Login</a>
        </form>
    </div>
</body>

</html>