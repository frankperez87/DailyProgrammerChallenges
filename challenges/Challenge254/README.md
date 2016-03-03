# Challenge 254

### Easy Challenge: Atbash Cipher

##### Usage:
```php
use DailyProgrammer\Challenge254\AtbashCipher;

$atbash = new AtbashCipher();

/**
 * Encoding A String
 */
 
$result = $atbash->encode('abcdefghijklmnopqrstuvwxyz'); // returns 'zyxwvutsrqponmlkjihgfedcba'
$result = $atbash->encode('foobar'); // returns 'ullyzi'
$result = $atbash->encode('/r/dailyprogrammer'); // returns '/i/wzrobkiltiznnvi'

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