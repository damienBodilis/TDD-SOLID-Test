<?php
class Divide implements CalculatorInterface{
    public function operation($a, $b)
    {
        return $a / $b;
    }
}