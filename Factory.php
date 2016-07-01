<?php
class Factory{

    public static function get($calcul){
        if ($calcul === '+'){
            return new Sum();
        }
        if ($calcul === '-'){
            return new Substract();
        }
        if ($calcul === '*'){
            return new Multiply();
        }
        if ($calcul === '/'){
            return new Divide();
        }
        return false;
    }
}