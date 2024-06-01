<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cast;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cast = Cast::all();

        return view('cast.tampil', ['cast' => $cast]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cast.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama' => 'required|min:5',
                'Umur' => 'required',
                'Bio' => 'required'
            ],
            [
                'nama.required' => 'nama harus di isi tidak boleh kosong',
                'Umur.required' => 'Umur harus di isi tidak boleh kosong',
                'Bio.required' => 'Bio harus di isi tidak boleh kosong'

            ]
        );

        $cast = new Cast;

        $cast->nama = $request->input('nama');
        $cast->Umur = $request->input('Umur');
        $cast->Bio = $request->input('Bio');

        $cast->save();

        return redirect('/cast');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cast = Cast::find($id);

        return view('cast.detail', ['cast' => $cast]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cast = Cast::find($id);

        return view('cast.edit', ['cast' => $cast]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'nama' => 'required|min:5',
                'Umur' => 'required',
                'Bio' => 'required'
            ],
            [
                'nama.required' => 'nama harus di isi tidak boleh kosong',
                'Umur.required' => 'Umur harus di isi tidak boleh kosong',
                'Bio.required' => 'Bio harus di isi tidak boleh kosong'

            ]
        );

        Cast::where('id', $id)
            ->update(
                [
                    'nama' => $request->input('nama'),
                    'Umur' => $request->input('Umur'),
                    'Bio' => $request->input('Bio'),
                ]
            );

        return redirect('/cast');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Cast::where('id', $id)->delete();

        return redirect('/cast');
    }
}
