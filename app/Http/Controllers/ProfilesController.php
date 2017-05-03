<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('activate');
    }

    public function show(User $user){
    	return view('pages.profiles.show', [ 'profileUser' => $user]);
    }

    public function activate(User $user, $token){
    	if($user->token === $token){
    		$user->activate();
    		return redirect('/')->with('message', 'Your account has been activated!');
    	}

    	return redirect('/')->with('message', 'Your token is invalid or has expired.');
    }
}
