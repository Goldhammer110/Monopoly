<?php

include 'Classes.php';

class Playfield
{
    /**
     * @var int
     */
    protected $positionStreet;

    /**
     * @var int
     */
    public $positionPlayer;

    /*   /**
     * @var bool
     */
    //protected $gameStart;

    /**
     * @return int
     */
    public function getPositionStreet(): int
    {
        return $this->positionStreet;
    }

    /**
     * @return int
     */
    public function getPositionAllPlayer(): int
    {
        return $this->positionPlayer;
    }

    /**
     * @param int $positionStreet
     */
    public function setPositionStreet(int $positionStreet): void
    {
        $this->positionStreet = $positionStreet;
    }

    /**
     * @param int $positionPlayer
     */
    public function setPositionAllPlayer(int $positionPlayer): void
    {
        $this->positionPlayer = $positionPlayer;
    }

    /*  public function gameStart()
      {
          return ($this->gameStart() = true);
      }*/
}

$start = new Playfield();
$prison = new Playfield();
$freiParken = new Playfield();
$goToPrison = new Playfield();

$Ereignisfeld = new Playfield();

$brown1 = new Playfield();
$brown2 = new Playfield();

$lightblue1 = new Playfield();
$lightblue2 = new Playfield();
$lightblue3 = new Playfield();

$pink1 = new Playfield();
$pink2 = new Playfield();
$pink3 = new Playfield();

$orange1 = new Playfield();
$orange2 = new Playfield();
$orange3 = new Playfield();

$red1 = new Playfield();
$red2 = new Playfield();
$red3 = new Playfield();

$yellow1 = new Playfield();
$yellow2 = new Playfield();
$yellow3 = new Playfield();

$green1 = new Playfield();
$green2 = new Playfield();
$green3 = new Playfield();

$blue1 = new Playfield();
$blue2 = new Playfield();

$lightblue1 = new Playfield();
$lightblue2 = new Playfield();
$lightblue3 = new Playfield();

$trainStation1 = new Playfield();
$trainStation2 = new Playfield();
$trainStation3 = new Playfield();
$trainStation4 = new Playfield();

$powerStation = new Playfield();
$waterWorks = new Playfield();

$start->setPositionStreet(1);

$brown1->setPositionStreet(2);
$Ereignisfeld->setPositionStreet(3);
$brown2->setPositionStreet(4);
$Ereignisfeld->setPositionStreet(5);
$trainStation1->setPositionStreet(6);
$lightblue1->setPositionStreet(7);
$Ereignisfeld->setPositionStreet(8);
$lightblue2->setPositionStreet(9);
$lightblue3->setPositionStreet(10);

$prison->setPositionStreet(11);

$pink1->setPositionStreet(12);
$powerStation->setPositionStreet(13);
$pink2->setPositionStreet(14);
$pink3->setPositionStreet(15);
$trainStation2->setPositionStreet(16);
$orange1->setPositionStreet(17);
$Ereignisfeld->setPositionStreet(18);
$orange2->setPositionStreet(19);
$orange3->setPositionStreet(20);

$freiParken->setPositionStreet(21);

$red1->setPositionStreet(22);
$Ereignisfeld->setPositionStreet(23);
$red2->setPositionStreet(24);
$red3->setPositionStreet(25);
$trainStation3->setPositionStreet(26);
$yellow1->setPositionStreet(27);
$yellow2->setPositionStreet(28);
$waterWorks->setPositionStreet(29);
$yellow3->setPositionStreet(30);

$goToPrison->setPositionStreet(31);

$green1->setPositionStreet(32);
$green2->setPositionStreet(33);
$Ereignisfeld->setPositionStreet(34);
$green3->setPositionStreet(35);
$trainStation4->setPositionStreet(36);
$blue1->setPositionStreet(37);
$Ereignisfeld->setPositionStreet(38);
$blue2->setPositionStreet(39);

$gameStart = new Playfield();

$gameStart->setPositionAllPlayer(1);