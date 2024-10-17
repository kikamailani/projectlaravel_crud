<?php

namespace App\Http\Controllers;

use App\Models\dataJurusan;
use Illuminate\Http\Request;

class DataJurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $jurusan = dataJurusan::where('name', 'LIKE', '%' . $request->search_jurusan . '%')
            ->orderBy('name', 'ASC')
            ->simplePaginate(5);
        return view('jurusan.index', compact('jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jurusan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'nis' => 'required|numeric',
            'type' => 'required',
        ]);

        dataJurusan::create([
            'name' => $request->name,
            'nis' => $request->nis,
            'type' => $request->type,
        ]);

        return redirect()->route('jurusan.index')->with('success', "Data user $request->name berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     */
    public function show(dataJurusan $dataJurusan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jurusan = dataJurusan::find($id);
        return view('jurusan.edit', compact('jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'nis' => 'required',
            'type' => 'required',

        ]);

        dataJurusan::where('id', $id)->update([
            'name' => $request->name,
            'nis' => $request->nis,
            'type' => $request->type,
        ]);
        return redirect()->route('jurusan.index')->with('success', 'Berhasil mengupdate akun!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteData = dataJurusan::where('id', $id)->delete();

        if ($deleteData) {
            return redirect()->back()->with('success', 'Berhasil menghapus data jurusan!');
        } else {

            return redirect()->back()->with('failed', 'Gagal menghapus data jurusan!');
        }
    }
}
