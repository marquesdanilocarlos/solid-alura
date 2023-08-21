<?php

namespace Alura\Solid\Model;

class Feedback
{


    private int $grade;
    private ?string $testimony;

    public function __construct(int $grade, ?string $testimony)
    {
        if ($grade < 9 && empty($testimony)) {
            throw new \DomainException('Depoimento obrigatório');
        }

        $this->grade = $grade;
        $this->testimony = $testimony;
    }

    public function getGrade(): int
    {
        return $this->grade;
    }

    public function getTestimony(): ?string
    {
        return $this->testimony;
    }

}