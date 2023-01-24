<?php

namespace App\Services;


use App\Models\Mitra;
use App\Models\MitraTimeline;
use App\Traits\MitraTimelineTrait;

class MitraTimelineService
{
    public $mitra; # Object
    public $modelMitra;
    public $modelMitraTimeline;
    public function __construct($mitra)
    {
        $this->mitra = $mitra;
        $this->modelMitra = Mitra::class;
        $this->modelMitraTimeline = MitraTimeline::class;
    }

    public function createTimeLine()
    {
        $attribute = [];
        foreach ($this->modelMitraTimeline::MITRATIMELINE as $order => $value){
            array_push($attribute, [
                'step_id' => $order,
                'mitra_id' => $this->mitra->id,
                'status' => ($order == 1 ? 'success' : null),
                'order' => $order
            ]);
        }

        return $this->mitra->timeline()->createMany($attribute) ? true : false;
    }

    public function updateStatus($timeline, $attribute)
    {
        if (!(MitraTimelineTrait::validMitraTimeline((int)$timeline))) { return false; }

        $mitraTimeline = MitraTimeline::where('step_id', $timeline)->where('mitra_id', $this->mitra->id)->first();
        if ($mitraTimeline->count() == 0) { return false; }

        if ($mitraTimeline->update($attribute)) {
            return true;
        }

        return false;
    }
}
