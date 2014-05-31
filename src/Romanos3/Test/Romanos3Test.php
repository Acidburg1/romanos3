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

//
    public function testDevuelve9() {
        $this->assertEquals('IX', $this->romanos3->devuelve("9"));
    }

    public function testDevuelve10() {
        $this->assertEquals('X', $this->romanos3->devuelve("10"));
    }

//
    public function testDevuelve11() {
        $this->assertEquals('XI', $this->romanos3->devuelve("11"));
    }

    public function testDevuelve15() {
        $this->assertEquals('XV', $this->romanos3->devuelve("15"));
    }

    public function testDevuelve55() {
        $this->assertEquals('LV', $this->romanos3->devuelve("55"));
    }

}
