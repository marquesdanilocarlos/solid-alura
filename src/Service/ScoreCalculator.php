<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\AluraMais;
use Alura\Solid\Model\Course;

class ScoreCalculator
{
    public function getScore($conteudo)
    {
        if ($conteudo instanceof Course) {
            return 100;
        } else if ($conteudo instanceof AluraMais) {
            return $conteudo->getDurationMinutes() * 2;
        } else {
            throw new \DomainException('Apenas Cursos e videos Alura+ possuem pontuações');
        }
    }
}
