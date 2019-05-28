<?php


class HandOfTheQueen implements Character
{

    private $name;
    private $salary;
    private $role;

    public function __construct(string $name, float $salary, string $role)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->role = $role;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSalary()
    {
       return $this->salary;
    }

    public function getRole()
    {
       return $this->role;
    }
}