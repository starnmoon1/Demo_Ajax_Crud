<?php
class Employee
{
    public const BASE_SALARY = 300;

    public function getSalary($factor)
    {
        return self::BASE_SALARY * $factor;
    }
}

    class Manager extends Employee
{
    public function getSalary($factor){
        return self::BASE_SALARY *$factor *2;
    }
}
$man = new Manager();
echo $man->getSalary(3);



?>