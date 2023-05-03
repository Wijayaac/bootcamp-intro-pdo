<?php
require_once "./helpers/get_input.php";
require_once "./Database.php";

$id = get_input("id");
if ($id) {
    $database = new Database();

    $database->delete($id);
}
