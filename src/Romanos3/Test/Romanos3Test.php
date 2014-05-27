<?php

namespace Romanos3\Test;

use Romanos3\Romanos3;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Romanos3Test
 *
 * @author acidburg
 */
class Romanos3Test extends \PHPUnit_Framework_TestCase {

    /**
     *
     * @var Romanos3
     */
    private $romanos3;

    protected function setUp() {
        parent::setUp();
        $this->romanos3 = new Romanos3();
    }

    function testSetup() {
        $this->assertTrue(true);
    }

    public function testContador1() {
        $this->assertEquals(1, $this->romanos3->contador("1"));
    }

    public function testContador2() {
        $this->assertEquals(2, $this->romanos3->contador("2"));
    }

    public function testContador3() {
        $this->assertEquals(3, $this->romanos3->contador("3"));
    }

    public function testContador4() {
        $this->assertEquals(1, $this->romanos3->contador("4"));
    }

    public function testContador5() {
        $this->assertEquals(0, $this->romanos3->contador("5"));
    }

    public function testContador6() {
        $this->assertEquals(1, $this->romanos3->contador("6"));
    }

    public function testContador7() {
        $this->assertEquals(2, $this->romanos3->contador("7"));
    }

    public function testContador8() {
        $this->assertEquals(3, $this->romanos3->contador("8"));
    }

    public function testContador9() {
        $this->assertEquals(1, $this->romanos3->contador("9"));
    }

    public function testTocaLimite1() {
        $this->assertEquals('0', $this->romanos3->tocaLimite("1"));
    }

    public function testTocaLimite2() {
        $this->assertEquals('0', $this->romanos3->tocaLimite("2"));
    }

    public function testTocaLimite3() {
        $this->assertEquals('0', $this->romanos3->tocaLimite("3"));
    }

    public function testTocaLimite4() {
        $this->assertEquals('5', $this->romanos3->tocaLimite("4"));
    }

    public function testTocaLimite5() {
        $this->assertEquals('0', $this->romanos3->tocaLimite("5"));
    }

    public function testTocaLimite6() {
        $this->assertEquals('5', $this->romanos3->tocaLimite("6"));
    }

    public function testTocaLimite7() {
        $this->assertEquals('0', $this->romanos3->tocaLimite("7"));
    }

    public function testTocaLimite8() {
        $this->assertEquals('0', $this->romanos3->tocaLimite("8"));
    }

    public function testTocaLimite9() {
        $this->assertEquals('10', $this->romanos3->tocaLimite("9"));
    }

    public function testDevuelve1() {
        $this->assertEquals('I', $this->romanos3->devuelve("1"));
    }

    public function testDevuelve2() {
        $this->assertEquals('II', $this->romanos3->devuelve("2"));
    }

    public function testDevuelve3() {
        $this->assertEquals('III', $this->romanos3->devuelve("3"));
    }

    public function testDevuelve4() {
        $this->assertEquals('IV', $this->romanos3->devuelve("4"));
    }

    public function testDevuelve5() {
        $this->assertEquals('V', $this->romanos3->devuelve("5"));
    }

    public function testDevuelve6() {
        $this->assertEquals('VI', $this->romanos3->devuelve("6"));
    }

    public function testDevuelve7() {
        $this->assertEquals('VII', $this->romanos3->devuelve("7"));
    }

    public function testDevuelve8() {
        $this->assertEquals('VIII', $this->romanos3->devuelve("8"));
    }

    public function testDevuelve9() {
        $this->assertEquals('IX', $this->romanos3->devuelve("9"));
    }

    public function testDevuelve10() {
        $this->assertEquals('X', $this->romanos3->devuelve("10"));
    }

}
