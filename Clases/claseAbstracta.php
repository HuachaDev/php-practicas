<?php

abstract class SocialMedia
{
    abstract public function post(): string;
    abstract public function comments(): string;

    public $labels;
    public $id=0;

    public function __construct(array $labels)
    {
        return $this->labels = $labels;
    }

    public function trends(int $id = null) : string
    {
        return $this->labels[$id ?? $this->id];
    }

    public function __toString()
    {
        return $this->trends();
    }
}

class TiktokMedia  extends SocialMedia
{
    public function post(): string
    {   
        return "https://www.tiktok.com/es/";
    }

    public function comments(): string
    {
        return "https://www.tiktok.com/es/comments/" . rand(0,9);
    }
}

class TwitterMedia extends SocialMedia
{
    public function post(): string
    {
        return "https://twitter.com/?lang=es/";
    }

    public function comments(): string
    {
        return "https://www.tiktok.com/es/comments/" . rand(0,9);
    }
}