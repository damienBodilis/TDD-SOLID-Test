<?php
class Sum implements CalculatorInterface{
    public function operation($a, $b)
    {
        return $a + $b;
    }
}