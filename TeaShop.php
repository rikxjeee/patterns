<?php


class TeaShop
{
    private $teaMaker;
    private $orders = [];
    public function __construct(TeaMaker $teaMaker)
    {
        $this->teaMaker = $teaMaker;
    }

    public function order(string $tea, int $table)
    {
        $this->orders[$table] = $this->teaMaker->makeTea($tea);
    }

    public function serve()
    {
        foreach ($this->orders as $table => $tea) {
            echo 'Serving ' . $tea->getType() . ' to table ' . $table.PHP_EOL;
        }
    }
}