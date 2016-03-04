# Challenge 254

### Easy Challenge: Atbash Cipher

Link to Challenge: 
https://www.reddit.com/r/dailyprogrammer/comments/45w6ad/20160216_challenge_254_easy_atbash_cipher/

*Note: PHP 7 is the Minimum Requirement*

##### Usage:
```php
<?php

use DailyProgrammer\Challenge254\AtbashCipher;

$atbash = new AtbashCipher();

/**
 * Encoding A String
 */
 
// Returns String: 'zyxwvutsrqponmlkjihgfedcba'
$result = $atbash->encode('abcdefghijklmnopqrstuvwxyz');

// Returns String: 'ullyzi'
$result = $atbash->encode('foobar');

// Returns String: '/i/wzrobkiltiznnvi'
$result = $atbash->encode('/r/dailyprogrammer'); 

/**
 * Decoding A String
 */
 
// Returns String: 'abcdefghijklmnopqrstuvwxyz'
$result = $atbash->decode('zyxwvutsrqponmlkjihgfedcba');

// Returns String: 'this is an example of the atbash cipher'
$result = $atbash->decode('gsrh rh zm vcznkov lu gsv zgyzhs xrksvi');

// Returns String: 'This Is An Example Of The Atbash Cipher'
$result = $atbash->decode('Gsrh Rh Zm Vcznkov Lu Gsv Zgyzhs Xrksvi');

```