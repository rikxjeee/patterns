<?php


class Wildling implements Character
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

    public function getName(): string
    {
        return $this->name;
    }

    public function getSalary(): float
    {
        return $this->salary;
    }

    public function getRole(): string
    {
        return $this->role;
    }
}