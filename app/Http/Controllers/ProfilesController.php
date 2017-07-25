<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('show','activate');
    }

    public function show(User $user){
    	return view('pages.profiles.show', [ 'account' => $user]);
    }

    public function edit(User $user){
        return view('pages.profiles.edit', [ 'account' => $user]);
    }

    public function update(User $user){
        $user->update(request()->all());
        return redirect(route('profile', $user));
    }

    public function activate(User $user, $token){
    	if($user->token === $token){
    		$user->activate();
    		return redirect(route('profile', $user))
                    ->with('message', 'Your account has been activated!');
    	}

    	return redirect(route('profile', $user))
                    ->with('message', 'Your token is invalid or has expired.');
    }
}
