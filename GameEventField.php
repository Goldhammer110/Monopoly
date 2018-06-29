<?php
/**
 * Created by PhpStorm.
 * User: praktikant
 * Date: 28.06.18
 * Time: 11:08
 */

class GameEventField extends Field
{
    /**
     * @var array
     */
    protected $events;

    /**
     * GameEvents constructor.
     * @param string $name
     * @param array $events
     */
    public function __construct(string $name, array $events)
    {
        parent::__construct($name);
        $this->event = $events;
    }

    /**
     * @return array
     */
    public function getEvents(): array
    {
        return $this->events;
    }


}
