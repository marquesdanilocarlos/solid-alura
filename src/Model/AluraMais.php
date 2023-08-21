<?php

namespace Alura\Solid\Model;

class AluraMais extends Video implements ScoreInterface
{
    private string $category;
    protected string $url = "http://mais.alura.com.br/";

    public function __construct(string $name, string $category)
    {
        parent::__construct($name);
        $this->category = $category;
    }

    public function getUrl(): string
    {
        return $this->url . str_replace(' ', '-', strtolower($this->category));
    }

    public function getScore(): float
    {
        return $this->getScore() * 2;
    }


}
