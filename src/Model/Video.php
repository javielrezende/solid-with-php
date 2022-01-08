<?php

namespace PersonalProjects\SOLID\Model;

use DateInterval;

class Video
{
    protected bool $watched;

    protected string $name;

    protected DateInterval $duracao;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->watched = false;
        $this->duration = \DateInterval::createFromDateString('0');
    }

    public function watch(): void
    {
        $this->watched = true;
    }

    public function duration(): int
    {
        return $this->duration->i;
    }

    public function getUrl(): string
    {
        return 'http://videos.alura.com.br/' . http_build_query(['name' => $this->name]);
    }
}
