<?php
interface Character
{
    public function __construct(string $name, float $salary, string $role);
    public function getName();
    public function getSalary();
    public function getRole();
}