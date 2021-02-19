<?php

include_once "Employee.php";
class EmployeeManager
{
    private $employees;

    public function __construct()
    {
        $this->employees = [];
    }

    public function add($employee)
    {
        $this->employees[] = $employee;
    }
    public function getEmployees(){
        return $this->employees;
    }
}