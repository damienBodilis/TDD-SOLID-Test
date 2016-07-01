<?php
require_once("Calculator.php");

class CalculatorTest extends PHPUnit_Framework_TestCase
{
    protected $calculator;

    protected function setUp()
    {
        $this->calculator = new Calculator();
    }

    public function testSum()
    {
        $sum = $this->calculator->sum(1, 2);
        $this->assertEquals(3, $sum);
    }

    public function testSubstract()
    {
        $substract = $this->calculator->substract(1, 2);
        $this->assertEquals(-1, $substract);
    }

    /**
     * @dataProvider getDivideParameters
     * @
     */
    public function testDivide($a, $b, $expected)
    {
        if (!$b) {
            $this->setExpectedException(Exception::class);
        }
        $divide = $this->calculator->divide($a, $b);
        $this->assertEquals($expected, $divide);
    }

    public function testMultiply (){
        $multiply = $this->calculator->multiply(5,5);
        $this->assertEquals(25, $multiply);
    }

    public static function getDivideParameters()
    {
        return array(
            array(1, 2, 0.5),
            array(2, 2, 1),
            array(6, 2, 3),
            array(5, 0, 7),
        );
    }

}