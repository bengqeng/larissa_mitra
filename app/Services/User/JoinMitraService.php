<?php

namespace App\Services\User;

use Illuminate\Support\Arr;

class JoinMitraService
{
    protected $data = [];
    protected $status = false;
    protected $result;
    protected $user;

    function __construct($data, $user)
    {
        $this->data = $data;
        $this->user = $user;
    }

    public function call()
    {
        $init = $this->userCanAddMitra();

        if ($init['status']) {
            $this->result = $init['user']->mitras()->create($this->mitraAttribute($this->data));
        }

        return ['success' => $init['status'], 'message' => $init['message'], 'data' => $this->result];
    }

    private function userCanAddMitra()
    {
        $message = '';
        $can = true;
        if ($this->user->mitras()->Activemitra()->count() > 0) {
            $can = false;
            $message = 'Gagal! Anda sudah memiliki satu mitra active';
        }

        return ['status' => $can, 'message' => $message, 'user' => $this->user];
    }

    private function mitraAttribute($attr)
    {
        $attr = Arr::only($attr, ['type', 'location', 'mitra_name']);
        return Arr::add($attr, 'status', true);
    }
}
