<?php

namespace DailyProgrammer\Challenge256;

class RLEObsession
{
    private $parameters = [];

    public function input(...$binary_input)
    {
        $this->parameters = [];

        $value = 0;

        foreach($binary_input as $binary_key => $binary_value) {
            if($this->changeInValue($value, $binary_value)) {
                $value = $binary_value;
                $this->parameters[] = $binary_key;
            }
        }

        $this->parameters[] = count($binary_input);
    }

    public function inputRLI(...$parameters)
    {
        $this->parameters = $parameters;
    }

    public function index()
    {
        if(count($this->parameters) > 1) {
            return reset($this->parameters);
        }

        return null;
    }

    public function size() : int
    {
        return end($this->parameters);
    }

    public function changes()
    {
        $changes = [];

        if(count($this->parameters) > 1) {
            for($i = 0; $i < count($this->parameters) - 1; $i++) {
                $changes[] = $this->parameters[$i];
            }
        }

        return $changes;
    }

    public function output() : array
    {
        $fill = 0;

        $output = array_fill(0, $this->size(), $fill);

        $end = count($output);

        foreach($this->changes() as $change) {

            $start = $change;

            $fill = 1 - $fill;

            for($i = $start; $i < $end; $i++) {
                $output[$i] = $fill;
            }

        }

        return $output;
    }

    public function outputRLI() : array
    {
        return $this->parameters;
    }

    private function changeInValue($value, $binary_value)
    {
        return $value !== $binary_value;
    }
}