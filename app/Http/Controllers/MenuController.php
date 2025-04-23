<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{

    public function index()
    {
        $menus = Menu::all(); // Ambil semua menu dari database
        return view('dashboard.home', compact('menus')); // Kirim ke view
    }

    public function create()
    {
        return view('dashboard.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama_menu' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
        ]);

        // Simpan data menu
        Menu::create([
            'nama_menu' => $request->nama_menu,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
        ]);

        // Redirect atau kembali ke halaman yang sesuai
        return redirect()->route('menus.index')->with('success', 'Menu berhasil ditambahkan!');
    }


    public function edit($id)
    {
        // Ambil data menu berdasarkan ID
        $menu = Menu::findOrFail($id);

        // Tampilkan view dengan data menu untuk di-edit
        return view('dashboard.edit', compact('menu'));
    }


    public function update(Request $request, $id)
    {
        // Validasi input
        $validated = $request->validate([
            'nama_menu' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'harga' => 'required|numeric',
        ]);

        // Cari menu berdasarkan ID dan update data
        $menu = Menu::findOrFail($id);
        $menu->update([
            'nama_menu' => $request->nama_menu,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
        ]);

        // Redirect setelah berhasil update
        return redirect()->route('menus.index')->with('success', 'Menu updated successfully');
    }


    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();

        return redirect()->route('menus.index')->with('success', 'Menu berhasil dihapus!');
    }
}
