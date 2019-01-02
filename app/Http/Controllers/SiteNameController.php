<?php

namespace App\Http\Controllers;

use App\SiteName;
use Illuminate\Http\Request;

class SiteNameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    

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
     * @param  \App\SiteName  $siteName
     * @return \Illuminate\Http\Response
     */
    public function show(SiteName $siteName)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SiteName  $siteName
     * @return \Illuminate\Http\Response
     */
    public function edit(SiteName $siteName)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SiteName  $siteName
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiteName $siteName)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SiteName  $siteName
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiteName $siteName)
    {
        //
    }
}
