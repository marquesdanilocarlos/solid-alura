<?php

namespace Alura\Solid\Model;

interface ScoreInterface
{
    public function getScore(): float;

    public function watch(): void;
}