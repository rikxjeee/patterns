<?php


class NewsProvider implements SplSubject
{
    private $subscribers = [];

    private $news;

    public function attach(SplObserver $observer)
    {
        $this->subscribers [] = $observer;
    }

    public function detach(SplObserver $observer)
    {
        $key = array_search($observer,$this->subscribers, true);
        if($key){
            unset($this->subscribers[$key]);
        }
    }

    public function notify()
    {
        foreach ($this->subscribers as $subscriber){
            $subscriber->update($this);
        }
    }

    public function addNewsLetter(NewsLetter $news)
    {
        $this->news = $news;
        $this->notify();
    }

    public function getNews()
    {
        return $this->news;
    }
}