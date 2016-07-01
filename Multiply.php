<?php
class Multiply implements CalculatorInterface{
    public function operation($a, $b)
    {
        return $a * $b;
    }
}