<?php
interface command
{
    public function execute();
    public function undo();
    public function redo();
}