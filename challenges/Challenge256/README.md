# Challenge 256

### Intermediate Challenge: Guess my hat color

Link to Challenge:
https://www.reddit.com/r/dailyprogrammer/comments/48l3u9/20160302_challenge_256_intermediate_guess_my_hat/

*Note: PHP 7 is the Minimum Requirement*

##### Usage:
```php
<?php

use DailyProgrammer\Challenge256\GuessMyHatColor;

require dirname(__DIR__, 2) . '/vendor/autoload.php';

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

$currentUser = $users->getNumberOfUsers() - 1;

$end = 0;

$game = true;

$numberOfMistakesAllowed = 1;
$mistakes = 0;

do {

    $colorsSeen = $users->getColorsForUsersAheadOf($currentUser);
    
    if(!empty($colorsSeen)) {
        echo 'Colors Ahead Of Current User: ' . implode(', ', $colorsSeen) . PHP_EOL;
    }

    $color = readline('Guess your hat color {Black, White}: ');

    if($users->guessColorForUser($currentUser, $color)) {

        echo 'Your Guess is Correct.' . PHP_EOL . PHP_EOL;
        $currentUser--;

        if($currentUser < $end) {
            $game = false;
            echo 'You Win. You beat the game.' . PHP_EOL;
        }

    } else {
        $mistakes++;
        if($mistakes > $numberOfMistakesAllowed) {
            echo 'Game Over. You ran out of chances.' . PHP_EOL;
            $game = false;
        } else {
            echo 'Oops, try again.' . PHP_EOL;
        }
    }

} while($game);
```


### Hard Challenge: RLE Obsession

Link: 
https://www.reddit.com/r/dailyprogrammer/comments/48w88o/20160304_challenge_256_hard_rle_obsession/

##### Usage:
```php
use DailyProgrammer\Challenge256\RLEObsession;

$rle = new RLEObsession();

$rle->input(0, 0, 1, 0, 0, 0, 0, 1, 1, 1);

// Outputs [2, 3, 7, 10]
$output = $rle->outputRLI();

$rle->input(0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1, 0, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1);

// Outputs [8, 9, 10, 13, 14, 18, 19, 21, 22, 23, 24, 25, 26, 32]
$output = $rle->outputRLI();

$rle->input(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1);

// Outputs [0, 1, 25, 26, 31, 32]
$output = $rle->outputRLI();
```