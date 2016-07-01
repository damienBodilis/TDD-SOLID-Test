<?php
class Substract implements CalculatorInterface{
    public function operation($a, $b)
    {
        return $a - $b;
    }
}