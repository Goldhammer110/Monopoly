<?php
/**
 * Created by PhpStorm.
 * User: praktikant
 * Date: 27.06.18
 * Time: 11:27
 */

class TrainStation extends Field
{

    /**
     * @var int
     */
    protected $price;

    /**
     * TrainStation constructor.
     * @param string $name
     * @param int $price
     */
    public function __construct(string $name, int $price)
    {
        parent::__construct($name);
        $this->price = $price;
    }

}