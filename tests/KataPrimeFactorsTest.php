<?php
declare(strict_types=1);
namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\KataPrimeFactors;
use PHPUnit\Framework\TestCase;


final class KataPrimeFactorsTest extends TestCase
{
    public function arrangeAndAct($numberToTest): array //CamelCase or Snake
    {
        $kataPrimeFactors = new KataPrimeFactors();

        return $kataPrimeFactors->createList($numberToTest);

    }
    /**
     * @test
     */
    /*
     * No sabía como hacer esto
    public function when_negative_number_given_print_error()
    {
        $result = arrange_and_act(-5);

        $this->assertEquals(array(), $result);
    }
    */
    /**
     * @test
     */
    public function when_1_given_return_empty_list()
    {
        $result = $this->arrangeAndAct(1);

        $this->assertEquals(array(), $result);
    }
    /**
     * @test
     */
    /*Qué nombre poner*/
    public function when_4_given_return_2_2()
    {
        $result = $this->arrangeAndAct(4);

        $this->assertEquals(array(2,2), $result);
    }
    /**
     * @test
     */
    public function when_11_given_return_empty_list()
    {
        $result = $this->arrangeAndAct(1);

        $this->assertEquals(array(), $result);
    }
    /**
     * @test
     */
    /*Qué nombre poner*/
    public function when_28_given_return_2_2_7()
    {
        $result = $this->arrangeAndAct(28);

        $this->assertEquals(array(2,2,7), $result);
    }
    /**
     * @test
     */
    /*Qué nombre poner*/
    public function when_78_given_return_2_3_13()
    {
        $result = $this->arrangeAndAct(78);

        $this->assertEquals(array(2,3,13), $result);
    }
}
