<?php

namespace App\Services;

use App\Models\UserVerify;

class VerifyUserService
{
    public $token;
    public function __construct($token)
    {
        $this->token = $token;
    }

    public function call()
    {
        $user = UserVerify::where('token', $this->token)->where('confirmed', true)->where('confirmed_at', '')->orWhereNull('confirmed_at');
        if ($user->count() == 0) { return false; }

        if($user->first()->update([ 'confirmed_at' => now(), 'confirmed' => true ])){
            return true;
        }

        return false;
    }
}
