<?php


class TextEditor
{
    private $text = '';

    public function write(string $text)
    {
        $this->text .=$text . ' ';
    }

    public function save()
    {
        return new ContentStorage($this->text);
    }

    public function restore(ContentStorage $storage)
    {
        $this->text = $storage->getContent();
    }

    public function getContent()
    {
        return $this->text;
    }
}