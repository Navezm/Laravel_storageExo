<?php

namespace App\Http\Controllers;

use App\Models\Poopeedo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PoopeedoController extends Controller
{
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

    public function edit($id)
    {
        $show = Poopeedo::find($id);
        return view('pages.edit', compact('show'));
    }

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
        Storage::delete('public/'.$img->src);
        Storage::put('public', $request->file('src'));
        $img->src = $request->file('src')->hashName();
        $img->save();
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
