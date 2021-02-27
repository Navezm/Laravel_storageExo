<?php

namespace App\Http\Controllers;

use App\Models\Poopeedo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PoopeedoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $DB = Poopeedo::all();
        return view('welcome', compact('DB'));
    }

    public function bo()
    {
        return view('pages.backOffice');
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
        Storage::put('public/img', $request->file('file'));
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Poopeedo  $poopeedo
     * @return \Illuminate\Http\Response
     */
    public function show(Poopeedo $poopeedo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Poopeedo  $poopeedo
     * @return \Illuminate\Http\Response
     */
    public function edit(Poopeedo $poopeedo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Poopeedo  $poopeedo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Poopeedo $poopeedo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Poopeedo  $poopeedo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poopeedo $poopeedo)
    {
        //
    }
}
