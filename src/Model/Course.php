<?php

namespace PersonalProjects\SOLID\Model;

use DomainException;

class Course
{
    private $name;
    private $videos;
    private $feedbacks;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->videos = [];
        $this->feedbacks = [];
    }

    public function getFeedback(int $score, ?string $comment): void
    {
        if ($score < 9 && empty($comment)) {
            throw new DomainException('Comment required');
        }

        $this->feedbacks[] = [$score, $comment];
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
}
