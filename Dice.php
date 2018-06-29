<?php

class Dice
{
    /**
     * @var int
     */
    protected $minValue;

    /**
     * @var int
     */
    protected $maxValue;

    /**
     * Dice constructor.
     * @param int $minValue
     * @param int $maxValue
     */
    public function __construct(int $minValue, int $maxValue)
    {
        $this->minValue = $minValue;
        $this->maxValue = $maxValue;
    }

    /**
     * @return int
     */
    public function getMinValue(): int
    {
        return $this->minValue;
    }

    /**
     * @return int
     */
    public function getMaxValue(): int
    {
        return $this->maxValue;
    }

    /**
     * @return int
     */
    public function getRandomValue(): int
    {
        return rand($this->getMinValue(), $this->getMaxValue());
    }

}
/*
$dice = new Dice(2,12);

echo "min:{$dice->getMinValue()}".PHP_EOL;
echo "max:{$dice->getMaxValue()}".PHP_EOL;

for($i = 0; $i < 10; $i++)
{
    echo "rand:{$dice->getRandomValue()}" . PHP_EOL;
}
*/






/* if(isset($_POST["ausfuehren"])) {

    $Dice1 = array("1", "2", "3", "4", "5", "6");

    shuffle($Dice1);

        // echo "Die gewürfelte Zahl von Würfel 1 ist $Dice1[0]. ";

    $Dice2 = array("1", "2", "3", "4", "5", "6");

    shuffle($Dice2);

        /* echo "Die gefürfelte Zahl von Würfel 2 ist $Dice2[0]. ";

    $Dice_Result = $Dice1[0]+$Dice2[0];

    public $Dice_Result_text "Die insgesamt gewürfelte Zahl ist  $Dice_Result ";
    }

    $diceClass = new Dice();

    echo $Dice_Class->Dice_Result_text; */

?>