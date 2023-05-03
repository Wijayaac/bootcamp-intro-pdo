<?php
class Rule
{
    public function isValid(string $inputValue, $attribute): bool
    {
        return false;
    }

    public function getMessage(string $inputName): string
    {
        return $inputName;
    }
}
