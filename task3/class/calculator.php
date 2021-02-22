<?php

class calculator
{
    var $a;
    var $b;

    function checkopration($oprator)
    {
        switch($oprator)
        {
            case '+':
            return $this->firstInput + $this->secondInput;
            break;

            case '-':
            return $this->firstInput - $this->secondInput;
            break;

            case '*':
            return $this->firstInput * $this->secondInput;
            break;

            case '/':
            return $this->firstInput / $this->secondInput;
            break;

            default:
            return "Sorry Operator Not Available";
        }   
    }
    function getresult($a, $b, $c)
    {
        $this->firstInput = $a;
        $this->secondInput = $b;
        return $this->checkopration($c);
    }
}



?>