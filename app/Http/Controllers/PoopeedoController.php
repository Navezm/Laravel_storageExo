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
        $DB = Poopeedo::all();
        return view('pages.backOffice', compact('DB'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $show = Poopeedo::find($id);
        return view('pages.edit', compact('show'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->request);
        Storage::put('public', $request->file('src'));
        $newEntry = new Poopeedo;
        $newEntry->src = $request->file('src')->hashName();
        $newEntry->save();
        return redirect()->back();
    }

    public function update($id, Request $request)
    {
        $img = Poopeedo::find($id);
        Storage::delete('public/storage/'.$img->src);
        $img->delete();
        Storage::put('public', $request->file('src'));
        $newEntry = new Poopeedo;
        $newEntry->src = $request->file('src')->hashName();
        $newEntry->save();
        return redirect('/');
    }

    public function destroy($id)
    {
        $destroy = Poopeedo::find($id);
        Storage::delete('public/storage/'.$destroy->src);
        $destroy->delete();
        return redirect()->back();
    }
}
