<?php

namespace PersonalProjects\SOLID\Service;

use PersonalProjects\SOLID\Model\SpecialVideo;
use PersonalProjects\SOLID\Model\Course;

class Watcher
{
    public function watch(Course $course)
    {
        foreach ($course->getVideos() as $video) {
            $video->assistir();
        }
    }

    public function watchSpecialVideo(SpecialVideo $specialVideo)
    {
        $specialVideo->watch();
    }
}
