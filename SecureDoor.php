<?php

class SecureDoor
{
    private $door;
    private $password = '123';
    public function __construct(SimpleDoor $door)
    {
        $this->door = $door;
    }

    public function open(string $password)
    {
        if ($this->password == $password){
            $this->door->open();
        }else{
            echo 'Wrong password, door remains closed.'.PHP_EOL;
        }
    }

    public function close()
    {
        $this->door->close();
    }
}