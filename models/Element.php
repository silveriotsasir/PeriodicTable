<?php

/**
 * Created by PhpStorm.
 * User: Silverio
 * Date: 25/01/2017
 * Time: 8:53
 */
class Element
{
    private $id;
    private $name;
    private $symbol;
    private $mass;
    private $element_group;
    private $period;

    /**
     * element constructor.
     * @param $id
     * @param $name
     * @param $symbol
     * @param $mass
     * @param $element_group
     * @param $period
     */

    public function __construct($id, $name, $symbol, $mass, $element_group, $period)
    {
        $this->id = $id;
        $this->name = $name;
        $this->symbol = $symbol;
        $this->mass = $mass;
        $this->element_group = $element_group;
        $this->period = $period;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * @param mixed $symbol
     */
    public function setSymbol($symbol)
    {
        $this->symbol = $symbol;
    }

    /**
     * @return mixed
     */
    public function getMass()
    {
        return $this->mass;
    }

    /**
     * @param mixed $mass
     */
    public function setMass($mass)
    {
        $this->mass = $mass;
    }

    /**
     * @return mixed
     */
    public function getElementGroup()
    {
        return $this->element_group;
    }

    /**
     * @param mixed $element_group
     */
    public function setElementGroup($element_group)
    {
        $this->element_group = $element_group;
    }

    /**
     * @return mixed
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * @param mixed $period
     */
    public function setPeriod($period)
    {
        $this->period = $period;
    }



}