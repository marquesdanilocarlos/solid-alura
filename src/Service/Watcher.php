<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\AluraMais;
use Alura\Solid\Model\Course;
use Alura\Solid\Model\ScoreInterface;

class Watcher
{
    public function watch(ScoreInterface $content)
    {
        $content->watch();
    }
}
