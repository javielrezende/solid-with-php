<?php

namespace PersonalProjects\SOLID\Service;

use PersonalProjects\SOLID\Model\SpecialVideo;
use PersonalProjects\SOLID\Model\Course;

class ScoreCalculator
{
    public function getScore($content)
    {
        if ($content instanceof Course) {
            return 100;
        } else if ($content instanceof SpecialVideo) {
            return $content->duration() * 2;
        } else {
            throw new \DomainException('Only courses and special videos have scores');
        }
    }
}
