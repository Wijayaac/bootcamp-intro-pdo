<?php

// Helpers
require_once "./helpers/get_input.php";
// Database
require_once "./Database.php";
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
$validation->makeRule("name", $nameRule);
$validation->makeRule("age", $ageRule);
$validation->makeRule("gender", $genderRule);
$validation->makeRule("height", $heightRule);
$validation->makeRule("weight", $weightRule);
$validation->makeRule("waist", $waistRule);


if (!$validation->isFails()) {
    $database = new Database();
    $data = [
        "name" => get_input("name"),
        "age" => get_input("age"),
        "gender" => get_input("gender"),
        "height" => get_input("height"),
        "weight" => get_input("weight"),
        "waist" => get_input("waist"),
    ];
    $id = get_input("id");

    $database->update($id, $data);
}
