<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view(('profile'))
        ->with('nama', 'Miko Yusrizal Fahreza')
        ->with('nim', '2141720083')
        ->with('kelas', 'TI-2H')
        ->with('absen', '17');
    }
}