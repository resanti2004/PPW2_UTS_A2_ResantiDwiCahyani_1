<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pemain;

class PemainController extends Controller
{
    public function index()
    {
        $data_pemain = \App\Models\pemain::all();

        return view('main.table', compact('data_pemain'));
    }
}
