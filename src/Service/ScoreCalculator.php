<?php

namespace PersonalProjects\SOLID\Service;

use PersonalProjects\SOLID\Model\Scorable;

class ScoreCalculator
{
    public function getScore(Scorable $content)
    {
        $content->getScore();
    }
}
