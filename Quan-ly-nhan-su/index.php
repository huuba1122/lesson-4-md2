<?php
include_once "Employee.php";
include_once "EmployeeManager.php";


$employee1 = new Employee('person One');
$employee2 = new Employee('person Two');
$employee1->setBirthday("2000");
$employee2->setBirthday("2001");
$employee1->setAddress("ha noi");
$employee2->setAddress("hai phong");
$employee1->setPosition('manager');
$employee2->setPosition('worker');
$employeeManager = new EmployeeManager();
$employeeManager->add($employee1);
$employeeManager->add($employee2);
$employees = $employeeManager->getEmployees();

foreach ($employees as $employee){
    echo $employee->getName()." ";
    echo $employee->getBirthday()." ";
    echo $employee->getAddress()." ";
    echo $employee->getPosition()."<br>";
}
