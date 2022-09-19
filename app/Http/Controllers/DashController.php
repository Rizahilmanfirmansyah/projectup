<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\penjual;
use App\Models\pembeli;



class DashController extends Controller
{
    public function index()
    {
        $countpembeli = pembeli::count();
        $countpenjual = penjual::count();
        return view('dashboard.index', compact('countpembeli', 'countpenjual'));
    }
}
