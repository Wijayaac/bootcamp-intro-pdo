<?php

// TODO
// Get the id here so we can use it

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Delete</title>
</head>

<body>
    <div>
        <h1>Delete confirmation</h1>
        <p>Are you sure to delete it ?</p>
        <a href="/intro-pdo">Back</a>
        <form action="/intro-pdo/delete.php">
            <input type="hidden" name="id">
            <button>Yes</button>
        </form>
    </div>
</body>

</html>