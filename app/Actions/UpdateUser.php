<?php

namespace App\Actions;

use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateUser
{

    public function handle(User $user, UserUpdateRequest $request) : void
    {
        $user->update($request->all());
    }
}
