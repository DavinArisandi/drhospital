<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Dokter;

class AboutController extends Controller
{
    public function index()
    {   
        $dokter = dokter::all();
        return view ('user.about', compact('dokter'));
    }
}
