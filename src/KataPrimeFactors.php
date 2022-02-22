<?php

namespace Deg540\PHPTestingBoilerplate;
use JetBrains\PhpStorm\Pure;
use phpDocumentor\Reflection\Types\Boolean;



class KataPrimeFactors
{

    public function createList(int $numberToDecompose): array
    {
        $primeFactors = array(); //Mejor declarar aquí o ya después del if?

        if($this->isPrime($numberToDecompose)) //Es mejor poner el this o poner la función fuera?
            return $primeFactors;

        for($i = 2; $i <= $numberToDecompose; $i++)
        {
            if(($this->isPrime($i)) and ($numberToDecompose % $i == 0)) //No hace falta comprobar que es prime
            {
                array_push($primeFactors, $i);
                $numberToDecompose /= $i;
                $i--;
            }
        }

        return $primeFactors;

    }

    public function isPrime(int $number): bool //No sé qué mejor nombre ponerle a $number
    {
        for($i=$number**.5|1;$i && $number%$i--;);return!$i&&$number>1;
    }
}