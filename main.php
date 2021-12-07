<?php

// Modules

require_once 'vendor/autoload.php';

// Logic

class CalcNumber
{
    protected int $a;
    protected int $b;

    public function __construct(int $a, int $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
    public function calcPlus()
    {
        echo "Result: ", $this->a + $this->b, ' - ';
    }
    public function calcMin()
    {
        echo "Result: ", $this->a - $this->b, ' - ';
    }
    public function calcMult()
    {
        echo "Result: ", $this->a * $this->b, ' - ';
    }
};

$calcNum = new CalcNumber(rand(1, 10), rand(1, 10));

$calcNum->calcPlus();
$calcNum->calcMin();
$calcNum->calcMult();

// || \\

