<?php

// TODO
// Get the id here so we can use it

$personId = $_GET["id"];
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
        <form action="/intro-pdo/delete" method="POST">
            <input type="hidden" name="id" value="<?= $personId ?>">
            <a href="/intro-pdo">Back</a>
            <button>Yes</button>
        </form>
    </div>
</body>

</html>