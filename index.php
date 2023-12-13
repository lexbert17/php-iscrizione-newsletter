<?php
include_once __DIR__ . "/function.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">

    <form action="function.php" method="POST">
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">

            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</body>
</html>

