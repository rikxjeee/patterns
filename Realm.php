<?php


class Realm implements Character
{
    /**
     * @var Character[] array
     */
    private $employees = [];

    public function addCharacter(Character $employee)
    {
        $this->employees[] = $employee;
    }

    public function getName(): string
    {
        $string = '';
        $employees = $this->employees;
        foreach ($employees as $employee){
            $string .= $employee->getName().PHP_EOL;
        }
        return $string;
    }
}