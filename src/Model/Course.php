<?php

namespace PersonalProjects\SOLID\Model;

use DomainException;

class Course implements Scorable, Watchable
{
    private $videos;
    private $feedbacks;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->videos = [];
        $this->feedbacks = [];
    }

    public function getFeedback(Feedback $feedback): void
    {
        $this->feedbacks[] = $feedback;
    }

    public function addVideo(Video $video)
    {
        if ($video->duration() < 3) {
            throw new DomainException('Very short video');
        }

        $this->videos[] = $video;
    }

    public function getVideos(): array
    {
        return $this->videos;
    }

    public function getScore(): int
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
