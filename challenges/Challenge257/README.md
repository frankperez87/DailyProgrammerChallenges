# Challenge 257

### Easy Challenge: In what year were most presidents alive?

Link to Challenge:
https://www.reddit.com/r/dailyprogrammer/comments/49aatn/20160307_challenge_257_easy_in_what_year_were/

*Note: PHP 7 is the Minimum Requirement*

##### Usage:
```php
<?php

use DailyProgrammer\Challenge257\PresidentsAlive;

$presidents = new PresidentsAlive();

$presidents->file(__DIR__ . '/data/presidents.csv');

$this->assertInternalType('array', $presidents->output());

// Returns array of [1822, 1823, 1824, 1825, 1826, 1831, 1833, 1834, 1835, 1836, 1837, 1838, 1839, 1840, 1841, 1843, 1844, 1845]
$years = $presidents->output();

```