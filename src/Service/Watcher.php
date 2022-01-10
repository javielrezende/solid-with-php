<?php

namespace PersonalProjects\SOLID\Service;

use PersonalProjects\SOLID\Model\Watchable;

class Watcher
{
    public function watch(Watchable $course)
    {
        $course->watch();
    }
}
