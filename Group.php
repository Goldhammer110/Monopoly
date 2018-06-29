<?php
/**
 * Created by PhpStorm.
 * User: praktikant
 * Date: 28.06.18
 * Time: 11:20
 */

class Group
{
    /**
     * @var Field[]
     */
    protected $fields;

    /**
     * Group constructor.
     * @param Field[] $fields
     */
    public function __construct(array $fields)
    {
        $this->fields = $fields;
    }

    /**
     * @return Field[]
     */
    public function getFields(): array
    {
        return $this->fields;
    }

}