<?php

namespace App\Services;


use App\Models\User;
use Illuminate\Support\Arr;

class PublicJoinMitraService
{
    protected $data = [];
    protected $status = false;
    protected $result;
    function __construct($data)
    {
        $this->data = $data;
    }

    public function call()
    {
        $init = $this->userCanJoinMitra();
        $result = null;

        if ($init['status']) {
            $this->result = $init['user']->mitras()->create($this->mitraAttribute($this->data));
        }

        return ['success' => $init['status'], 'message' => $init['message'], 'data' => $this->result];
    }

    private function userCanJoinMitra()
    {
        $message = '';
        $can = true;
        $user = User::where('email', $this->data['email'])->first();
        if ($user === null) {
            $user = $this->createUser(Arr::only($this->data, ['full_name', 'email', 'password', 'phone_number', 'address']));
        } else {
            if ($user->mitras()->Activemitra()->count() > 0) {
                $can = false;
                $message = 'Email yang Anda masukkan telah terdaftar';
            }
        }

        return ['status' => $can, 'message' => $message, 'user' => $user];
    }

    private function createUser($attribute)
    {
        return User::create($attribute);
    }

    private function mitraAttribute($attr)
    {
        $attr = Arr::only($attr, ['type', 'location', 'mitra_name']);
        return Arr::add($attr, 'status', true);
    }
}
