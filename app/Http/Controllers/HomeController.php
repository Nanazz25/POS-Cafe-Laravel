<?php

namespace App\Http\Controllers;

use App\Models\Menu; // Import model Menu

class HomeController extends Controller
{
    public function index()
    {
        $menus = Menu::all(); // Ambil semua menu dari database
        return view('dashboard.home', compact('menus')); // Kirim ke view
    }
}
