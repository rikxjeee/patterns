<?php

class NewsLetter
{
    private $title;
    private $article;

    public function __construct(string $title, string $article)
    {
        $this->title = $title;
        $this->article = $article;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getArticle()
    {
        return $this->article;
    }
}