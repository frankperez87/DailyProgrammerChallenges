<?php

namespace DailyProgrammer\Challenge255;


class PlayingWithLightSwitches
{
    private $switches;

    public function __construct(int $switches)
    {
        $this->switches = array_fill(0, $switches, 0);
    }

    public function getNumberOfSwitches() : int
    {
        return count($this->switches);
    }

    public function flipBetween($start, $end)
    {
        foreach($this->switches as $switch => $status) {
            if($this->switchesShouldBeFlipped($start, $end, $switch)) {
                $this->switches[$switch] = $this->flip($switch);
            }
        }
    }

    public function getNumberOfLightsOn() : int
    {
        $lightsOn = array_filter($this->switches, function($value) {
            return $value === 1;
        });

        return count($lightsOn);
    }

    public function getNumberOfLightsOff() : int
    {
        $lightsOff = array_filter($this->switches, function($value) {
            return $value === 0;
        });

        return count($lightsOff);
    }

    private function flip($switch)
    {
        return 1 - $this->switches[$switch];
    }

    private function switchesShouldBeFlipped($start, $end, $switch)
    {
        return $this->withinRange($start, $end, $switch) || $this->withinInvertedRange($start, $end, $switch);
    }

    private function withinRange($start, $end, $switch)
    {
        return $switch >= $start && $switch <= $end;
    }

    private function withinInvertedRange($start, $end, $switch)
    {
        return $start > $end && ($switch >= $end && $switch <= $start);
    }
}