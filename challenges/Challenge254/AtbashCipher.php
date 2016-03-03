<?php

namespace DailyProgrammer\Challenge254;

class AtbashCipher
{
    public function encode(string $string) : string
    {
        $alphabet = $this->alphabet();

        return $this->cipher($string, $alphabet);
    }

    public function decode(string $string) : string
    {
        return $this->encode($string);
    }

    private function alphabet() : array
    {
        $alphabet = range('a', 'z');
        $alphabet_reverse = range('z', 'a');

        $combined = array_combine($alphabet, $alphabet_reverse);

        return $combined;
    }

    private function cipher(string $string, array $map) : string
    {
        $new_string = '';

        for ($i = 0; $i <= strlen($string); $i++) {
            $character = substr($string, $i, 1);
            $new_string .= $this->cipherCharacter($character, $map);
        }

        return $new_string;
    }

    private function cipherCharacter(string $character, array $map)
    {
        $new_character = strtolower($character);

        if (isset($map[$new_character])) {
            $new_character = $map[$new_character];
        }

        if (ctype_upper($character)) {
            $new_character = strtoupper($new_character);
            return $new_character;
        }

        return $new_character;
    }
}