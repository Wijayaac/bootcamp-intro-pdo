<?php
// helper function
function get_input(string $inputName): string
{
    $result = $defaultValue;

    if (isset($_POST[$inputName]) && $_POST[$inputName] !== "") {
        $result = $_POST[$inputName];
    }

    return $result;
}
