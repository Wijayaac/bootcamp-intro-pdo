<?php
class NumberRule extends Rule
{
    protected $min;
    protected $max;
    public function isValid($inputValue, $attribute): bool
    {
        $numberInput = intval($inputValue);
        if ($attribute["min"] !== "" && $attribute["max"] !== "") {
            $this->min = $attribute["min"];
            $this->max = $attribute["max"];
        }

        if ($numberInput >= $this->min && $numberInput <= $this->max) {
            return true;
        }
        return false;
    }

    public function getMessage($inputName): string
    {
        return "{$inputName} must be filled with number on range {$this->min} - {$this->max}";
    }
}
