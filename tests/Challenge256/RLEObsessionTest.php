<?php

use DailyProgrammer\Challenge256\RLEObsession;

class RLEObsessionTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function the_last_element_is_the_size_of_the_boolean_list()
    {
        $rle = new RLEObsession();

        $rle->inputRLI(2);

        $this->assertEquals(2, $rle->size());
        $this->assertEquals([0, 0], $rle->output());
    }

    /** @test */
    public function the_first_element_is_the_boolean_data_index_of_the_first_1()
    {
        $rle = new RLEObsession();

        $rle->inputRLI(2, 5);

        $this->assertEquals(2, $rle->index());
        $this->assertEquals(5, $rle->size());
        $this->assertEquals([0, 0, 1, 1, 1], $rle->output());
    }

    /** @test */
    public function every_other_element_is_an_index_where_the_data_changes_from_0_or_1_to_its_opposite()
    {
        $rle = new RLEObsession();

        $rle->inputRLI(2, 3, 7, 10);

        $this->assertEquals(2, $rle->index());
        $this->assertEquals([2, 3, 7], $rle->changes());
        $this->assertEquals(10, $rle->size());
        $this->assertEquals([
            0, 0, 1, 0, 0, 0, 0, 1, 1, 1
        ], $rle->output());

        $rle->inputRLI(8, 9, 10, 13, 14, 18, 19, 21, 22, 23, 24, 25, 26, 32);
        $this->assertEquals([
            0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1, 0, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1
        ], $rle->output());
    }

    /** @test */
    public function it_can_parse_input_to_rli()
    {
        $rle = new RLEObsession();

        $rle->input(0, 0, 1, 0, 0, 0, 0, 1, 1, 1);
        $this->assertEquals([2, 3, 7, 10], $rle->outputRLI());

        $rle->input(0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1, 0, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1);
        $this->assertEquals([8, 9, 10, 13, 14, 18, 19, 21, 22, 23, 24, 25, 26, 32], $rle->outputRLI());

        $rle->input(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1);
        $this->assertEquals([0, 1, 25, 26, 31, 32], $rle->outputRLI());
    }
}
