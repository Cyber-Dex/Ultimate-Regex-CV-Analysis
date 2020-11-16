<?php

namespace App\Http\Controllers;

use App\Models\Recruitis;
use Illuminate\Http\Request;

class RecruitisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        return view('recruitis.index');
    }

    public function logIn(Request $request)
    {
        $recruitis = new \App\Custom\Recruitis\Recruitis($request['username'], $request['password'], $request['device_id'], $request['device_name']);
        $recruitis->logIn();
        return view('recruitis.dash', [
            'system' => $recruitis
        ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recruitis  $recruitis
     * @return \Illuminate\Http\Response
     */
    public function show(Recruitis $recruitis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recruitis  $recruitis
     * @return \Illuminate\Http\Response
     */
    public function edit(Recruitis $recruitis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recruitis  $recruitis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recruitis $recruitis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recruitis  $recruitis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recruitis $recruitis)
    {
        //
    }
}
