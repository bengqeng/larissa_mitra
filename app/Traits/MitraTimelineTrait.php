<?php
namespace App\Traits;

use App\Models\MitraTimeline;

trait MitraTimelineTrait {
    public function defineTimelineMitra()
    {
        return MitraTimeline::MITRATIMELINE;
    }

    public function validMitraTimeline($value)
    {
        return isset(MitraTimelineTrait::defineTimelineMitra()[(int)$value]);
    }
}
