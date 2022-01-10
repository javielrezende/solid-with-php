<?php

namespace PersonalProjects\SOLID\Model;

class SpecialVideo extends Video implements Scorable
{
    private string $category;

    public function __construct(string $name, string $category)
    {
        parent::__construct($name);
        $this->category = $category;
    }

    public function getUrl(): string
    {
        return str_replace(' ', '-', strtolower($this->category));
    }

    public function getScore(): int
    {
        return $this->duration() * 2;
    }
}
