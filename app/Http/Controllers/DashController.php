<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashController extends Controller
{
    public function index()
    {
        $countpembeli = pembeli::count();
        $countpenjual = penjual::count();
        return view('dashboard.index', compact('countpembeli', 'countpenjual'));
    }
}
