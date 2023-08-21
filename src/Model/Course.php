<?php

namespace Alura\Solid\Model;

class Course implements ScoreInterface
{
    private string $name;
    private array $videos;

    /** @var Feedback[] */
    private array $feedbacks;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->videos = [];
        $this->feedbacks = [];
    }

    public function addFeedback(Feedback $feedback): void
    {
        $this->feedbacks[] = $feedback;
    }

    public function addVideo(Video $video)
    {
        if ($video->getDurationMinutes() < 3) {
            throw new \DomainException('Video muito curto');
        }

        $this->videos[] = $video;
    }

    /** @return Video[] */
    public function getVideos(): array
    {
        return $this->videos;
    }

    public function getScore(): float
    {
        return 100;
    }

    public function watch(): void
    {
        foreach ($this->getVideos() as $video) {
            $video->watch();
        }
    }

}
