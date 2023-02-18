<?php

namespace App\Traits;

use App\Models\MitraTimeline;

trait MitraTimelineTrait
{
    public static function defineTimelineMitra()
    {
        return MitraTimeline::MITRATIMELINE;
    }

    public static function validMitraTimeline($value)
    {
        return isset(MitraTimelineTrait::defineTimelineMitra()[(int)$value]);
    }
}
