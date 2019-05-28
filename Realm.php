<?php


class Realm
{
    /**
     * @var Character array
     */
    private $employees = [];

    public function addEmployee(Character $employee)
    {
        $this->employees[] = $employee;
    }

    public function getEmployeeList(): string
    {
        $string = '';
        $employees = $this->employees;
        foreach ($employees as $employee){
            $string .= $employee->getName().PHP_EOL;
        }
        return $string;
    }
}