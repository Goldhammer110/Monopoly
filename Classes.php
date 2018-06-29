<?php

include "BuySystem.php";
include "Dice.php";
include "Field.php";
include "GameEventField.php";
include "GameEvents.php";
include "Group.php";
include 'Player.php';
include "Playfield.php";
include "Street.php";
include 'TrainStation.php';


$dice = new Dice(2, 12);

echo "min:{$dice->getMinValue()}" . PHP_EOL;
echo "max:{$dice->getMaxValue()}" . PHP_EOL;

for ($i = 0; $i < 10; $i++) {
    echo "rand:{$dice->getRandomValue()}" . PHP_EOL;
}

// $street = new Street(positionPlayfield);

// echo "kp:{$street->getPositionPlayfield()}".PHP_EOL; 

