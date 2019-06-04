<?php


class User implements SplObserver
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function update(SplSubject $subject)
    {
        echo 'Hi ' . $this->name . '! Received one Newsletter!: '.$subject->getTitle().PHP_EOL;
    }
}