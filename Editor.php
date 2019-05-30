<?php


class Editor
{
    /**
     * @var WriteState
     */
    private $state;

    public function __construct()
    {
        $this->state = new WhiteText();
    }

    public function setColor(WriteState $state)
    {
        $this->state = $state;
    }

    public function type($text)
    {
        echo sprintf('Text color is set to %s.', $this->state->getColor()).PHP_EOL;
        $this->state->write($text);
    }
}