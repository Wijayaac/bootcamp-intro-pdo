<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Person Data</title>
</head>

<body>
    <h1>Input new data</h1>
    <form action="/intro-pdo/insert" method="POST">
        <div class="field">
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>
        <div class="field">
            <label for="age">Age</label>
            <input type="text" name="age" id="age">
        </div>
        <div class="field">
            <input type="radio" name="gender" value="male" id="male" checked>
            <label for="male">Male</label>
            <input type="radio" name="gender" value="female" id="female">
            <label for="female">Female</label>
        </div>
        <div class="field">
            <label for="height">Height</label>
            <input type="text" name="height" id="height">
        </div>
        <div class="field">
            <label for="weight">Weight</label>
            <input type="text" name="weight" id="weight">
        </div>
        <div class="field">
            <label for="waist">Waist Size</label>
            <input type="text" name="waist" id="waist">
        </div>
        <a href="/intro-pdo">Back</a>
        <button>save</button>
    </form>
</body>

</html>