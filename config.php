<?php



$player = array($player1, $player2, $player3, $player4);

/*
* Die Spielfelder
*/

$Ecken = array($start, $prison, $freiParken, $goToPrison);

$Field1 = array($brown1, $brown2);

$Field2 = array($lightblue1, $lightblue2, $lightblue3);

$Field3 = array($pink1, $pink2, $pink3);

$Field4 = array($orange1, $orange2, $orange3);

$Field5 = array($red1, $red2, $red3);

$Field6 = array($yellow1, $yellow2, $yellow3);

$Field7 = array($green1, $green2, $green3);

$Field8 = array($blue1, $blue2);

$Ereignisfeld = array( "leer"); // @todo Ereignisfelder einfügen

$trainStation = array($trainStation1, $trainStation2, $trainStation3, $trainStation4);

$Field9 = array($powerStation, $waterWorks);

/*
 * Spielfeldseite Nr. 1
 */

$playfield = [
    0 => [
        0 => $Ecken[0],
        1 => $Field1[0],
        2 => $Ereignisfeld,
        3 => $Field1[1],
        4 => $Ereignisfeld,
        5 => $trainStation[0],
        6 => $Field2[0],
        7 => $Ereignisfeld,
        8 => $Field2[1],
        9 => $Field2[2],
        10 => $Ecken[1],
    ],
];


/*
 * Spielfeldseite Nr. 2
 */
$playfield = [
    1 => [
       0 => $Field3[0],
       1 => $Field9[0],
       2 => $Field3[1],
       3 => $Field3[2],
       4 => $trainStation[1],
       5 => $Field4[0],
       6 => $Ereignisfeld,
       7 => $Field4[1],
       8 => $Field4[2],
       9 => $Ecken[2],
    ],
];
/*
 * Spielfeldseite Nr. 3
 */
$playfield = [
    2 => [
        0 => $Field5[0],
        1 =>  $Ereignisfeld,
        2 =>  $Field5[1],
        3 =>  $Field5[2],
        4 =>  $trainStation[2],
        5 =>  $Field6[0],
        6 =>  $Field6[1],
        7 =>  $Field9[1],
        8 =>  $Field6[2],
        9 =>  $Ecken[3],
    ],
];

/*
 *  Spielfeldseite Nr. 4
 */
$playfield = [
    3 => [
        0 =>  $Field7[0],
        1 =>  $Field7[1],
        2 =>  $Ereignisfeld,
        3 =>  $Field7[2],
        4 =>  $trainStation[3],
        5 =>  $Ereignisfeld,
        6 =>  $Field8[0],
        7 =>  $Ereignisfeld,
        8 =>  $Field8[1],
    ],
];

/*
 * Die Mieten vom braunen Feldpaar
 */

$taxesBrown1_alone = 2;
$taxesBrown2_alone = 4;

$taxesBrown1_withoutHouse_allFields = 4;
$taxesBrown2_withoutHouse_allFields = 8;

$taxesBrown1_1House = 10;
$taxesBrown1_2House = 30;
$taxesBrown1_3House = 90;
$taxesBrown1_4House = 160;
$taxesBrown1_Hotel = 250;

$taxesBrown2_1House = 20;
$taxesBrown2_2House = 60;
$taxesBrown2_3House = 180;
$taxesBrown2_4House = 320;
$taxesBrown2_Hotel = 450;

/*
 * Die Mieten vom Hellblauem Feldpaar
 */

$taxeslightblue1_alone = 6;
$taxeslightblue2_alone = 6;
$taxeslightblue3_alone = 8;

$taxeslightblue1_withoutHouse_allFields = 12;
$taxeslightblue2_withoutHouse_allFields = 12;
$taxeslightblue3_withoutHouse_allFields = 16;

$taxeslightblue1_1House = 30;
$taxeslightblue1_2House = 90;
$taxeslightblue1_3House = 270;
$taxeslightblue1_4House = 400;
$taxeslightblue1_Hotel = 550;

$taxeslightblue2_1House = 30;
$taxeslightblue2_2House = 90;
$taxeslightblue2_3House = 270;
$taxeslightblue2_4House = 400;
$taxeslightblue2_Hotel = 550;

$taxeslightblue3_1House = 40;
$taxeslightblue3_2House = 100;
$taxeslightblue3_3House = 300;
$taxeslightblue3_4House = 450;
$taxeslightblue3_Hotel = 600;

/*
 * Die Mieten vom pinkem Feldpaar
 */

$taxespink1_alone = 10;
$taxespink2_alone = 10;
$taxespink3_alone = 12;

$taxespink1_withoutHouse_allFields = 20;
$taxespink2_withoutHouse_allFields = 20;
$taxespink3_withoutHouse_allFields = 24;

$taxespink1_1House = 30;
$taxespink1_2House = 90;
$taxespink1_3House = 270;
$taxespink1_4House = 400;
$taxespink1_Hotel = 550;

$taxespink2_1House = 30;
$taxespink2_2House = 90;
$taxespink2_3House = 270;
$taxespink2_4House = 400;
$taxespink2_Hotel = 550;

$taxespink3_1House = 40;
$taxespink3_2House = 100;
$taxespink3_3House = 300;
$taxespink3_4House = 450;
$taxespink3_Hotel = 600;

