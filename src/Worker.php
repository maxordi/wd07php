<?php

namespace App;

class Worker
{
private $name;
private $age;
private $salary;


    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }

    private function checkAge($age)
    {
        if ($age > 0 and $age <= 100) {
            return true;
        } else {
            return false;
        }
    }

    public function getSalary()
        {
            return $this->salary;
        }
    public function setSalary($salary)
        {
            $this->salary = $salary;
        }
}