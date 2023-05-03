<?php
// TODO
// Flow -> form -> validation -> database -> mysqlconnection

// validation
require_once "./Validation.php";

$validation = new Validation();
// Rules
$nameRule = [
    ["name" => "required"]
];

$ageRule = [
    ["name" => "required"],
    ["name" => "number", "attribute" => ["min" => 10, "max" => 80]]
];

$genderRule = [
    ["name" => "required"],
];

$heightRule = [
    ["name" => "required"],
    ["name" => "number", "attribute" => ["min" => 80, "max" => 220]]
];
$weightRule = [
    ["name" => "required"],
    ["name" => "number", "attribute" => ["min" => 10, "max" => 250]]
];
$waistRule = [
    ["name" => "required"],
    ["name" => "number", "attribute" => ["min" => 5, "max" => 300]]
];

// Check validation

$name = $validation->makeRule("name", $nameRule);
$age = $validation->makeRule("age", $ageRule);
$gender = $validation->makeRule("gender", $genderRule);
$height = $validation->makeRule("height", $heightRule);
$weight = $validation->makeRule("weight", $weightRule);
$waist = $validation->makeRule("waist", $waistRule);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Persons</title>
</head>

<body>
    <?php if ($validation && count($validation->getErrors()) > 0) : ?>
        <ul>
            <?php foreach ($validation->getErrors() as $error) : ?>
                <li style="color: red;"><?= $error ?></li>
            <?php endforeach ?>
        </ul>
    <?php endif ?>
</body>

</html>