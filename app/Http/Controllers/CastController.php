<?php

namespace App\Http\Controllers;

use App\Models\Cast;
use Illuminate\Http\Request;


class CastController extends Controller
{
    public function index()
    {
        $casts = Cast::all();
        return view('casts.index', ['casts' => $casts]);
    }

    public function create()
    {
        return view('casts.create');
    }

    public function store(Request $request)
    {
        Cast::create([
            'nama' => $request->input('nama'),
            'umur' => $request->input('umur'),
            'bio' => $request->input('bio'),
        ]);

        return redirect()->route('cast.index');
    }

    public function show($id)
    {
        $cast = Cast::find($id);
        return view('casts.show', ['cast' => $cast]);
    }

    public function edit($id)
    {
        $cast = Cast::find($id);
        return view('casts.edit', ['cast' => $cast]);
    }

    public function update(Request $request, $id)
    {
        $cast = Cast::find($id);
        $cast->update([
            'nama' => $request->input('nama'),
            'umur' => $request->input('umur'),
            'bio' => $request->input('bio'),
        ]);

        return redirect()->route('cast.index');
    }

    public function destroy($id)
    {
        $cast = Cast::find($id);
        $cast->delete();
        return redirect()->route('cast.index');
    }
}
