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