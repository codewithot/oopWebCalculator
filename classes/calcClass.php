<?php
class Calc {
    public $operator;
    public $num1;
    public $num2;

//    constructor method assigns string and integers to variables operator, num1 & num2
    public function __construct(string $one, int $two, int $three)
    {
        $this->operator = $one;
        $this->num1 = $two;
        $this->num2 = $three;
    }

    public function calculator() {
        switch ($this->operator) {
            case 'add':
                return $this->num1 + $this->num2;
                break;
            case 'sub':
                return $this->num1 - $this->num2;
                break;
            case 'div':
                return $this->num1 / $this->num2;
                break;
            case 'mul':
                return $this->num1 * $this->num2;
                break;
            default:
                echo 'error';
                break;
        }

    }
}