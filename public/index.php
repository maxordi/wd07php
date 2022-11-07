<?php

include_once __DIR__. '/../vendor/autoload.php';
include_once __DIR__. '/../src/web_routes.php';

//$dotenv = Dotenv\Dotenv::createImmutable(__DIR__."/../");
//$dotenv->safeLoad();
//$user = \App\Models\User::findById(1);
//App\Core\Debugger::debug($user);


// Задача №1

//$worker1 = new App\Worker();
//$worker1->name = 'Иван';
//$worker1->age = 25;
//$worker1->salary = 1000;
//
//$worker2 = new \App\Worker();
//$worker2->name = 'Вася';
//$worker2->age = 26;
//$worker2->salary = 2000;
//
//echo $sum_salary = $worker1->salary + $worker2->salary;
//echo "<br>";
//echo $sum_salary = $worker1->age + $worker2->age;

// Задача №2 и №3

$worker1 = new App\Worker();
$worker1->setName('Иван');
$worker1->setAge(25);
$worker1->setSalary(1000);

$worker2 = new \App\Worker();
$worker2->setName('Вася');
$worker2->setAge(26);
$worker2->setSalary(2000);
echo ' Cумма зарплат Ивана и Васи: ';
echo $sum_salary = $worker1->getSalary() + $worker2->getSalary();
echo "<br>";
echo ' Cумма возрастов Ивана и Васи: ';
echo $sum_age = $worker1->getAge() + $worker2->getAge();


// Задача №4
echo "<br>";
echo ' Произвидение возраста и зарплаты Димы: ';

$worker4 = new \App\Worker4('Дима', 25, 1000);

echo $worker4->proizved();

// Задача №5
echo "<br>";

$worker5 = new \App\Worker5();
$worker5->setName('Иван');
$worker5->setAge(25);
$worker5->setSalary(1000);

$worker6 = new \App\Worker5();
$worker6->setName('Вася');
$worker6->setAge(26);
$worker6->setSalary(2000);

echo ' Cумма зарплат Ивана и Васи: ';
echo $sum_salary = $worker5->getSalary() + $worker6->getSalary();
echo "<br>";

$student = new \App\Student();
$student->setName('Максим');
$student->setAge(31);
$student->setKurs(1);
$student->setStipendiya(320);

//Задача №6
$driver = new \App\Driver('Дима', 5,'B');

echo $driver->getName();
echo $driver->getStage();
echo $driver->getCategory();