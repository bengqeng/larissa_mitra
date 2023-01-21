<?php
namespace App\Http\Traits;
use App\Models\Mitra;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

trait MitraTrait {
    public function defineTypeMitra()
    {
        return Mitra::TYPEMITRA;
    }

    public function listMitra()
    {
        return $this->defineTypeMitra();
    }

    public function validMitra($value)
    {
        return in_array(Str::lower($value), $this->listMitra());
    }
}
