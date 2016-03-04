<?php

use DailyProgrammer\Challenge256\GuessMyHatColor;

class GuessMyHatColorTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_can_setup_users_with_hats()
    {
        $users = new GuessMyHatColor();

        $users->addUserWithHatColor('Black');
        $users->addUserWithHatColor('White');
        $users->addUserWithHatColor('Black');
        $users->addUserWithHatColor('Black');
        $users->addUserWithHatColor('White');
        $users->addUserWithHatColor('White');
        $users->addUserWithHatColor('Black');
        $users->addUserWithHatColor('White');
        $users->addUserWithHatColor('White');
        $users->addUserWithHatColor('White');

        $this->assertEquals(10, $users->getNumberOfUsers());
    }

    /** @test */
    public function it_can_guess_the_color_of_their_hat()
    {
        $users = new GuessMyHatColor();

        $users->addUserWithHatColor('Black');
        $users->addUserWithHatColor('White');
        $users->addUserWithHatColor('Black');
        $users->addUserWithHatColor('Black');

        $this->assertTrue($users->guessColorForUser(0, 'Black'));
        $this->assertFalse($users->guessColorForUser(1, 'Black'));
        $this->assertTrue($users->guessColorForUser(2, 'Black'));
        $this->assertTrue($users->guessColorForUser(3, 'Black'));
    }

    /** @test */
    public function it_can_get_the_color_for_a_specific_user()
    {
        $users = new GuessMyHatColor();

        $users->addUserWithHatColor('Black');
        $users->addUserWithHatColor('White');
        $users->addUserWithHatColor('Black');
        $users->addUserWithHatColor('Black');

        $this->assertEquals('Black', $users->getColorForUser(0));
        $this->assertEquals('White', $users->getColorForUser(1));
        $this->assertEquals('Black', $users->getColorForUser(2));
        $this->assertEquals('Black', $users->getColorForUser(3));
    }

    /** @test */
    public function it_can_see_colors_for_the_users_ahead()
    {
        $users = new GuessMyHatColor();

        $users->addUserWithHatColor('Black');
        $users->addUserWithHatColor('White');
        $users->addUserWithHatColor('Black');
        $users->addUserWithHatColor('Black');

        $this->assertEquals([], $users->getColorsForUsersAheadOf(3));
        $this->assertEquals(['Black'], $users->getColorsForUsersAheadOf(2));
        $this->assertEquals(['Black', 'Black'], $users->getColorsForUsersAheadOf(1));
        $this->assertEquals(['White', 'Black', 'Black'], $users->getColorsForUsersAheadOf(0));
    }
}
