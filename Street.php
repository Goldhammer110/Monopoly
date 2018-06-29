<?php

class Street extends Field
{


    /**
     * @var Group
     */
    protected $group;

    /**
     * @var int
     */
    protected $price;

    /**
     * @var int
     */
    protected $buildingCount;

    /**
     * @var int
     */
    protected $pricePerHouse;

    /**
     * Street constructor.
     * @param string $name
     * @param Group $group
     * @param int $price
     * @param int $pricePerHouse
     */
    public function __construct(string $name, Group $group, int $price, int $pricePerHouse)
    {
        parent::__construct($name);
        $this->group = $group;
        $this->price = $price;
        $this->pricePerHouse = $pricePerHouse;
    }


    /**
     * @return Group
     */
    public function getGroup(): Group
    {
        return $this->group;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @return int
     */
    public function getBuildingCount(): int
    {
        return $this->buildingCount;
    }

    /**
     * @return int
     */
    public function getPricePerHouse(): int
    {
        return $this->pricePerHouse;
    }

    /**
     * @param int $buildingCount
     */
    public function setBuildingCount(int $buildingCount): void
    {
        $this->buildingCount = $buildingCount;
    }


    public function playerReachesField(Player $player):void
    {
        if($this->isBought){
            if($this->owner != $player){
                //price * 2 wenn 0 Häuser
                //array von Preisen + Hauspreis * Häuser
            }
            elseif($this->owner = $player){
                ""
            }
        }
        else{
            //Feld kaufen: Ja oder Nein
        }
    }
    protected function doesCurrentOwnerOwnGroup():bool
    {
        $isOwnerOfAll = true;
        foreach($this->group->getFields() as $field){
            if ($this->owner != $field->getOwner()){
                $isOwnerOfAll = false;
            }
        }
        return $isOwnerOfAll;
    }
}