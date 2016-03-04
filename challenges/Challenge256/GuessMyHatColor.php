<?php

namespace DailyProgrammer\Challenge256;

class GuessMyHatColor
{
    private $users = [];

    public function addUserWithHatColor(string $color)
    {
        $this->users[] = $color;
    }

    public function getNumberOfUsers() : int
    {
        return count($this->users);
    }

    public function guessColorForUser(int $index, string $color) : bool
    {
        return $this->users[$index] === $color;
    }

    public function getColorForUser(int $index) : string
    {
        return $this->users[$index];
    }

    public function getColorsForUsersAheadOf(int $index) : array
    {
        $colors = [];

        $start = $index + 1;
        $end = $this->getNumberOfUsers();

        for($i = $start; $i < $end; $i++) {
            $colors[] = $this->getColorForUser($i);
        }

        return $colors;
    }
}