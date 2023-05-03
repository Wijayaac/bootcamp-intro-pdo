<?php

require_once "./Rule.php";

class RequiredRule extends Rule
{
    public function isValid($inputValue, $attribute): bool
    {
        if (isset($inputValue) && $inputValue !== "") {
            return true;
        }
        return false;
    }

    public function getMessage($inputName): string
    {
        return "{$inputName} must be filled in";
    }
}
