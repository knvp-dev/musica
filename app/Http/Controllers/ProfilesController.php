<?php

namespace App\Http\Controllers;

use App\User;

class ProfilesController extends Controller
{
    /**
     * ProfilesController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth')->except('show', 'activate');
    }

    /**
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(User $user)
    {
        return view('pages.profiles.show', ['account' => $user]);
    }

    /**
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(User $user)
    {
        if ($user->can('update', auth()->user())) {
            return view('pages.profiles.edit', ['account' => $user]);
        }

        return redirect('/')
            ->with('message', 'This is not your profile!');
    }

    /**
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(User $user)
    {
        if ($user->can('update', auth()->user())) {
            $user->update(request()->all());
        }

        return redirect(route('profile', $user));
    }

    /**
     * @param User $user
     * @param $token
     * @return \Illuminate\Http\RedirectResponse
     */
    public function activate(User $user, $token)
    {
        if ($user->token === $token) {
            $user->activate();

            return redirect(route('profile', $user))
                ->with('message', 'Your account has been activated!');
        }

        return redirect(route('profile', $user))
            ->with('message', 'Your token is invalid or has expired.');
    }
}
