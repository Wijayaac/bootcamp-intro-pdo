<?php

require_once "./RequiredRule.php";
require_once "./NumberRule.php";

class Validation
{
    public $errors = [];

    public function makeRule($inputName, $rules)
    {
        $inputValue = $_POST[$inputName];

        $requiredRule = new RequiredRule();
        $numberRule = new NumberRule();

        foreach ($rules as $rule) {
            if ($rule["name"] === "required") {
                if (!$requiredRule->isValid($inputValue, [])) {
                    array_push($this->errors, $requiredRule->getMessage($inputName));
                }
            } elseif ($rule["name"] === "number") {
                if (!$numberRule->isValid($inputValue, $rule["attribute"])) {
                    array_push($this->errors, $numberRule->getMessage($inputName));
                }
            }
        }
    }

    public function isFails()
    {
        if (count($this->errors) > 0) {
            return true;
        }
        return false;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }
}
