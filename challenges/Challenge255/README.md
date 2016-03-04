# Challenge 255

### Easy Challenge: Playing with Light Switches

##### Usage:
```php
use DailyProgrammer\Challenge255\PlayingWithLightSwitches;

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

// Returns 423 as the number of lights on.
$lightsOn = $switches->getNumberOfLightsOn();
```