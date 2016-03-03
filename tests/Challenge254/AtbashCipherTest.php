<?php

use DailyProgrammer\Challenge254\AtbashCipher;

class AtbashCipherTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_can_encode_a_string()
    {
        $atbash = new AtbashCipher();

        $result = $atbash->encode('abcdefghijklmnopqrstuvwxyz');
        $this->assertEquals('zyxwvutsrqponmlkjihgfedcba', $result);

        $result = $atbash->encode('foobar');
        $this->assertEquals('ullyzi', $result);

        $result = $atbash->encode('/r/dailyprogrammer');
        $this->assertEquals('/i/wzrobkiltiznnvi', $result);
    }

    /** @test */
    public function it_can_decode_a_string()
    {
        $atbash = new AtbashCipher();

        $result = $atbash->decode('zyxwvutsrqponmlkjihgfedcba');
        $this->assertEquals('abcdefghijklmnopqrstuvwxyz', $result);

        $result = $atbash->decode('gsrh rh zm vcznkov lu gsv zgyzhs xrksvi');
        $this->assertEquals('this is an example of the atbash cipher', $result);

        $result = $atbash->decode('Gsrh Rh Zm Vcznkov Lu Gsv Zgyzhs Xrksvi');
        $this->assertEquals('This Is An Example Of The Atbash Cipher', $result);
    }
}