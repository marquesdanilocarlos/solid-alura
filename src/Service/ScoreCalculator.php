<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\AluraMais;
use Alura\Solid\Model\Course;
use Alura\Solid\Model\ScoreInterface;

class ScoreCalculator
{
    public function getScore(ScoreInterface $content)
    {
        return $content->getScore();
    }
}
