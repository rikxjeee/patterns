<?php


class ChatRoom
{
    public function displayMessage(User $user, string $message)
    {
        echo date('M d, y H:i').PHP_EOL;
        echo $user->getName() . ' says:'.PHP_EOL;
        echo $message;
        echo '***************************************'.PHP_EOL;
    }
}