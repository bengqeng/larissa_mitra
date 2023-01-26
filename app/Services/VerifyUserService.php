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
        $userVerify = UserVerify::with('user')->where('token', $this->token)->where('confirmed', true)->where('confirmed_at', '')->orWhereNull('confirmed_at');
        if ($userVerify->count() == 0) { return false; }

        if(!$userVerify->first()->user->markEmailAsVerified()) { return false; }

        if(!$userVerify->first()->update([ 'confirmed_at' => now(), 'confirmed' => true ])) { return false; }

        return true;
    }
}
