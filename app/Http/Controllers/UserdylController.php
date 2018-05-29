<?php

namespace App\Http\Controllers;

use App\userdyl;
use Illuminate\Http\Request;

class UserdylController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('userdyl.index');
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
     * @param  \App\userdyl  $userdyl
     * @return \Illuminate\Http\Response
     */
    public function show(userdyl $userdyl)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\userdyl  $userdyl
     * @return \Illuminate\Http\Response
     */
    public function edit(userdyl $userdyl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\userdyl  $userdyl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, userdyl $userdyl)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\userdyl  $userdyl
     * @return \Illuminate\Http\Response
     */
    public function destroy(userdyl $userdyl)
    {
        //
    }
}
