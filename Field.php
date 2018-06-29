<?php
/**
 * Created by PhpStorm.
 * User: praktikant
 * Date: 28.06.18
 * Time: 11:02
 */

abstract class Field
{
    /**
     * @var bool
     */
    protected $isBought;

    /**
     * @var Player|null
     */
    protected $owner;

    /**
     * @var string
     */
    protected $name;

    /**
     * Field constructor.
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

    /**
     * @param Player $player
     * @return void
     */
    abstract public function playerReachesField(Player $player):void;


    /**
     * @param null|Player $owner
     */
    public function setOwner(?Player $owner): void
    {
        $this->owner = $owner;
    }

    /**
     * @return null|Player
     */
    public function getOwner(): ?Player
    {
        return $this->owner;
    }

    /**
     * @return bool
     */
    public function isBought(): bool
    {
        return $this->isBought;
    }

    /**
     * @param bool $isBought
     */
    public function setIsBought(bool $isBought): void
    {
        $this->isBought = $isBought;
    }


}