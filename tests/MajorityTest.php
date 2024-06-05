<?php

use PHPUnit\Framework\TestCase;
use src\Majority;

class MajorityTest extends TestCase {
    public function testCheckSeniority() {
        $majority = new Majority();
        $this->assertEquals("Minor", $majority->checkSeniority(17));
        $this->assertEquals("Adult", $majority->checkSeniority(18));
        // $this->assertEquals("Adult", $majority->checkSeniority(19));
        $this->assertEquals("Invalid age", $majority->checkSeniority(-1));
        $this->assertEquals("Minor", $majority->checkSeniority(0));
    }
}