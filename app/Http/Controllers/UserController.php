<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserSignupRequest;
use App\Http\Controllers\Auth\AuthController;

class UserController extends Controller
{
    public function updateProfile(UserSignupRequest $request)
    {
        $user = User::where('id', '=', Auth::user()->id)
        ->update([
            'username'    => $request->input('username'),
            'email'       => $request->input('email'),
            'profile_bio' => $request->input('profile_bio'),
        ]);

        if (! is_null($user)) {
            return redirect('/dashboard/profile')->with(
                'status', 
                'Sucessfully updated!'
            );
        }

        return redirect('/dashboard/profile')->with(
            'status', 
            'Oops! Something went wrong!'
        );
    }
}
