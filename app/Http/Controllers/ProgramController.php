<?php

namespace App\Http\Controllers;

class ProgramController extends Controller
{
    public function index()
    {
        return view('program', ['namaProgram' => '']);
    }

    public function kerja()
    {
        return view('program', ['namaProgram' => 'Lowongan Kerja Sebagai Programmer BackEnd']);
    }

    public function pemerintah()
    {
        return view('program', ['namaProgram' => 'Pemerintah Kampus Merdeka']);
    }
}


