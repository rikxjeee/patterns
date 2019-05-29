<?php
class User
{
    /**
     * @var ChatRoom
     */
    private $chatRoom;
    /**
     * @var string
     */
    private $name;

    public function __construct(ChatRoom $chatRoom, string $name)
    {
        $this->chatRoom = $chatRoom;
        $this->name = $name;
    }

    public function sendMessage(string $message)
    {
        $this->chatRoom->displayMessage($this, $message);
    }

    public function getName()
    {
        return $this->name;
    }
}