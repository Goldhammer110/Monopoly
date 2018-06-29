<?php

class GameEvents
{
    /**
     * @var string
     */
    protected $name;
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
        $this->name = $name;
        $this->event = $events;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function getEvents(): array
    {
        return $this->events;
    }


}