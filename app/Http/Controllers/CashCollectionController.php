<?php

namespace App\Http\Controllers;

use App\CashCollection;
use Illuminate\Http\Request;

class CashCollectionController extends Controller
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
    public function create($type = null)
    {
        // Has a 'type' been set on this request?
        if (is_null($type))
            return view('collections.choose');

        return view('collections.forms.create-'.$type);
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
     * @param  \App\CashCollection  $cashCollection
     * @return \Illuminate\Http\Response
     */
    public function show(CashCollection $cashCollection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CashCollection  $cashCollection
     * @return \Illuminate\Http\Response
     */
    public function edit(CashCollection $cashCollection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CashCollection  $cashCollection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CashCollection $cashCollection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CashCollection  $cashCollection
     * @return \Illuminate\Http\Response
     */
    public function destroy(CashCollection $cashCollection)
    {
        //
    }
}
