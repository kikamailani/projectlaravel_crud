<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $akun = User::where('name', 'LIKE', '%' . $request->search_kelola_akun . '%')
            ->orderBy('name', 'ASC')
            ->simplePaginate(5);
        return view('user.index', compact('akun'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email|unique:users',
            'role' => 'required',
            'password' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,


            'password' => bcrypt($request->password)
        ]);

        return redirect()->route('akun.data')->with('success', "Data user $request->name berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $akun = User::find($id);
        return view('user.edit', compact('akun'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email|unique:users,email,' . $id,
            'role' => 'required',
            'password' => 'nullable|min:6',
        ]);

        $akun = User::findOrFail($id);

        $akun->name = $request->name;
        $akun->email = $request->email;
        $akun->role = $request->role;

        if ($request->filled('password')) {
            $akun->password = bcrypt($request->password);
        }

        $akun->save();

        return redirect()->route('akun.data')->with('success', 'Berhasil mengupdate akun!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteData = User::where('id', $id)->delete();

        if ($deleteData) {
            return redirect()->back()->with('success', 'Berhasil menghapus data akun!');
        } else {
            return redirect()->back()->with('failed', 'Gagal menghapus data akun!');
        }
    }
}
