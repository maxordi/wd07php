<?php

namespace App;

class Worker4
{
    private $name;
    private $age;
    private $salary;

    public function __construct($name, $age, $salary)
    {
        //Устанавливаем значения свойств:
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
    public function getSalary()
    {
        return $this->salary;
    }
    public function proizved()
    {
        return $this->salary * $this->age;
    }
}