<?php

namespace Alura\Solid\Model;

class Course
{
    private string $name;
    private array $videos;
    private array $feedbacks;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->videos = [];
        $this->feedbacks = [];
    }

    public function setFeedback(int $grade, ?string $testimony): void
    {
        if ($grade < 9 && empty($testimony)) {
            throw new \DomainException('Depoimento obrigatório');
        }

        $this->feedbacks[] = [$grade, $testimony];
    }

    public function addVideo(Video $video)
    {
        if ($video->durationMinutes() < 3) {
            throw new \DomainException('Video muito curto');
        }

        $this->videos[] = $video;
    }

    /** @return Video[] */
    public function getVideos(): array
    {
        return $this->videos;
    }
}
