<?php

namespace Alura\Solid\Model;

use DateInterval;
use DateTimeInterface;

class Video
{

    protected bool $watched = false;

    protected string $name;

    protected DateInterval $duration;

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

    public function getDurationMinutes(): int
    {
        return $this->duration->i;
    }

    public function getUrl(): string
    {
        return 'http://videos.alura.com.br/' . http_build_query(['name' => $this->name]);
    }
}
