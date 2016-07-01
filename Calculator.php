<?php

class Calculator
{
    
//    public function sum($a, $b)
//    {
//        return $a + $b;
//    }
//
//    public function substract($a, $b)
//    {
//        return $a - $b;
//    }
//
//    public function divide($a, $b)
//    {
//        if (!$b) {
//            throw new Exception();
//        }
//
//        return $a / $b;
//    }
//
//    public function multiply($a, $b)
//    {
//        return $a * $b;
//    }

    public function calcul($calcul)
    {
        $calcul = explode(' ', $calcul);
        $operateur = Factory::get($calcul[1]);
        if(!$operateur instanceof CalculatorInterface){
            throw new Exception();
        }
        return $operateur->operation($calcul[0], $calcul[2]);
    }
}