<?php


class Employee
{
    private $name;
    private $birthday;
    private $address;
    private $position;

    function __construct($name)
    {
        $this->name = $name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setBirthday($date){
        $this->birthday = $date;
    }

    public function setAddress($address){
        $this->address = $address;
    }

    public function setPosition($position){
        $this->position = $position;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

}