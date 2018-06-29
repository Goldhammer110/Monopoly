<?php

include 'Classes.php';

class Player
{
    /**
     * @var int
     */
    //protected $money;
    public $money;

    /**
     * @var string
     */
    public $name;

    /**
     * Player constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function addMoney($money): void
    {
        $this->money += $money;
    }

    public function substractMoney($money): void
    {
        $this->money -= $money;
    }

    public function hasMoney(): bool
    {
        return ($this->money > 0);
    }

}


$player1 = new Player("Harry Potter");
$player2 = new Player("Albus Dumbledore");
$player3 = new Player("Hermine Granger");
$player4 = new Player("Tom Riddle");

if ($player1 && $player2 && $player3 && $player4 == $positionstreet = '1') {
    $player1->addMoney('1500');
    $player2->addMoney('1500');
    $player3->addMoney('1500');
    $player4->addMoney('1500');
}

