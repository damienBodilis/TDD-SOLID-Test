<?php

class Calculator
{
    public function sum($a,$b)
    {
        return $a + $b;
    }

    public function substract($a, $b) {
        return $a - $b;
    }

    public function divide($a, $b) {
        if (!$b){
            throw new Exception();
        }

        return $a / $b;
    }

    public function multiply($a, $b) {
        return $a *$b;
    }
}