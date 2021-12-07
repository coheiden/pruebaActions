<?php
namespace App\Test;

use App\Calculadora;

class CalculadoraTest extends \PHPUnit\Framework\TestCase {
	public function testSuma1()
    {
        $calc = new calculadora(3, 4);
        $this->assertEquals(7, $calc->suma());
    }

    public function testsuma2()
    {
        $calc = new calculadora(3, -4);
        $this->assertEquals(-1, $calc->suma());
    }

    public function testResta()
    {
        $calc = new calculadora(3, 4);
        $this->assertEquals(-1, $calc->resta());
    }

    public function testMultiplicar()
    {
        $calc = new calculadora(3, 4);
        $this->assertEquals(12, $calc->multiplicar());
    }
    
    public function testDividir()
    {
        $calc = new calculadora(3, 4);
        $this->assertEquals(0.75, $calc->dividir());
    }

    public function potencia()
    {
        $calc = new calculadora(3, 4);
        $this->assertEquals(81, $calc->potencia());
    }
}