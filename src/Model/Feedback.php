<?php

namespace PersonalProjects\SOLID\Model;

use DomainException;

class Feedback
{
    private int $score;
    private string|null $comment;

    public function __construct(int $score, ?string $comment)
    {
        $this->canComment($score, $comment);

        $this->score = $score;
        $this->comment = $comment;
    }

    private function canComment(int $score, ?string $comment): void
    {
        if ($score < 9 && empty($comment)) {
            throw new DomainException('Comment required');
        }
    }

    public function getScore(): int
    {
        return $this->score;
    }

    public function getComment(): string|null
    {
        return $this->comment;
    }
}
