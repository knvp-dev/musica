<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class InstrumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     * @internal param Request $request
     */
    public function store(User $user)
    {
        $user->assignInstrument(request()->all());
    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function show(User $user)
    {
        return view('pages.profiles.instruments.index', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @param $instrument_id
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function destroy(User $user, $instrument_id)
    {
        $user->unassignInstrument($instrument_id);
    }
}
