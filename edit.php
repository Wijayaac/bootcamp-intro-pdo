<?php


// TODO
// get person data here so we can use it in form

require_once "./Database.php";

$database = new Database();
$personId = $_GET["id"];
$selectedPerson = $database->selectSpecified($personId);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Person Data</title>
</head>

<body>
    <h1>Edit <?= $selectedPerson["name"] ?> data</h1>
    <form action="/intro-pdo/update" method="POST">
        <input type="hidden" name="id" value="<?= $personId ?>">
        <div class="field">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="<?= $selectedPerson["name"] ?>">
        </div>
        <div class="field">
            <label for="age">Age</label>
            <input type="text" name="age" id="age" value="<?= $selectedPerson["age"] ?>">
        </div>
        <div class="field">
            <input type="radio" name="gender" value="male" id="male" <?php if ($selectedPerson["gender"] === "male") : ?>checked <?php endif ?>>
            <label for="male">Male</label>
            <input type="radio" name="gender" value="female" id="female" <?php if ($selectedPerson["gender"] === "female") : ?>checked <?php endif ?>>
            <label for="female">Female</label>
        </div>
        <div class="field">
            <label for="height">Height</label>
            <input type="text" name="height" id="height" value="<?= $selectedPerson["height"] ?>">
        </div>
        <div class="field">
            <label for="weight">Weight</label>
            <input type="text" name="weight" id="weight" value="<?= $selectedPerson["weight"] ?>">
        </div>
        <div class="field">
            <label for="waist">Waist Size</label>
            <input type="text" name="waist" id="waist" value="<?= $selectedPerson["waist"] ?>">
        </div>
        <a href="/intro-pdo">Back</a>
        <button>Update</button>
    </form>
</body>

</html>