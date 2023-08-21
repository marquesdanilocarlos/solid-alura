<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\AluraMais;
use Alura\Solid\Model\Course;

class Watcher
{
    public function watchCourse(Course $course)
    {
        foreach ($course->getVideos() as $video) {
            $video->watch();
        }
    }

    public function watchAluraMais(AluraMais $aluraMais)
    {
        $aluraMais->watch();
    }
}
