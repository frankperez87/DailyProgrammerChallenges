<?php

use DailyProgrammer\Challenge257\PresidentsAlive;

class PresidentsAliveTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_can_parse_a_csv()
    {
        $presidents = new PresidentsAlive();

        $presidents->file(__DIR__ . '/data/presidents.csv');

        $this->assertInternalType('array', $presidents->output());

        $this->assertEquals([
            1822, 1823, 1824, 1825, 1826, 1831, 1833, 1834, 1835, 1836, 1837, 1838, 1839, 1840, 1841, 1843, 1844, 1845
        ], $presidents->output());
    }
}
