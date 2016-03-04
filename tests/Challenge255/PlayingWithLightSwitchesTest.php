<?php

use DailyProgrammer\Challenge255\PlayingWithLightSwitches;

class PlayingWithLightSwitchesTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_can_define_a_number_of_switches()
    {
        $switches = new PlayingWithLightSwitches(10);

        $this->assertEquals(10, $switches->getNumberOfSwitches());
    }

    /** @test */
    public function it_can_flip_switches_on()
    {
        $switches = new PlayingWithLightSwitches(10);

        $switches->flipBetween(3, 6);
        $switches->flipBetween(0, 4);
        $switches->flipBetween(7, 3);
        $switches->flipBetween(9, 9);

        $this->assertEquals(7, $switches->getNumberOfLightsOn());
    }

    /** @test */
    public function it_can_flip_switches_off()
    {
        $switches = new PlayingWithLightSwitches(10);

        $switches->flipBetween(0, 9);
        $switches->flipBetween(0, 3);

        $this->assertEquals(4, $switches->getNumberOfLightsOff());
    }

    /** @test */
    public function it_can_solve_the_challenge()
    {
        $switches = new PlayingWithLightSwitches(1000);

        $switches->flipBetween(616, 293);
        $switches->flipBetween(344, 942);
        $switches->flipBetween(27, 524);
        $switches->flipBetween(716, 291);
        $switches->flipBetween(860, 284);
        $switches->flipBetween(74, 928);
        $switches->flipBetween(970, 594);
        $switches->flipBetween(832, 772);
        $switches->flipBetween(343, 301);
        $switches->flipBetween(194, 882);
        $switches->flipBetween(948, 912);
        $switches->flipBetween(533, 654);
        $switches->flipBetween(242, 792);
        $switches->flipBetween(408, 34);
        $switches->flipBetween(162, 249);
        $switches->flipBetween(852, 693);
        $switches->flipBetween(526, 365);
        $switches->flipBetween(869, 303);
        $switches->flipBetween(7, 992);
        $switches->flipBetween(200, 487);
        $switches->flipBetween(961, 885);
        $switches->flipBetween(678, 828);
        $switches->flipBetween(441, 152);
        $switches->flipBetween(394, 453);

        $this->assertEquals(423, $switches->getNumberOfLightsOn());
    }
}
