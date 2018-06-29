<?php

include 'Classes.php';
include 'config.php';
include 'HtmlOutput.php';

printPageHeader('Monopoly');
printDiceForm();
printPageFooter();

/*
if(isset($_POST["ausfuehren"])) {

    $Dice1 = array("1", "2", "3", "4", "5", "6");

    shuffle($Dice1);

    /* echo "Die gewürfelte Zahl von Würfel 1 ist $Dice1[0]. ";

    $Dice2 = array("1", "2", "3", "4", "5", "6");

    shuffle($Dice2);

    /* echo "Die gefürfelte Zahl von Würfel 2 ist $Dice2[0]. ";

       $Dice_Result = $Dice1[0]+$Dice2[0];

    echo "Die insgesamt gewürfelte Zahl ist  $Dice_Result "; */
}
$Dice_Result = $Dice1[0] + $Dice2[0];

if ($Dice_Result == 2 && $Player[0]) {
    $Player1 = [2];
}
if ($Dice_Result == 3 && $Player[0]) {
    $Player1 = $Spielfeld [0][3];
}
if ($Dice_Result == 4 && $Player[0]) {
    $Player1 = [3];
}
if ($Dice_Result == 5 && $Player[0]) {
    $Player1 = [4];
}
if ($Dice_Result == 6 && $Player[0]) {
    $Player1 = [6];
}
if ($Dice_Result == 7 && $Player[0]) {
    $Player1 = [7];
}
if ($Dice_Result == 8 && $Player[0]) {
    $Player1 = [8];
}
if ($Dice_Result == 9 && $Player[0]) {
    $Player1 = [9];
}
if ($Dice_Result == 10 && $Player[0]) {
    $Player1 = [10];
}







