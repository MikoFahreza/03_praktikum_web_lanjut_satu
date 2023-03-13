<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
        return view('product', ['namaProduk' => '']);
    }

    public function permen()
    {
        return view('product', ['namaProduk' => 'Permen Yupi']);
    }

    public function astor()
    {
        return view('product', ['namaProduk' => 'Astor Hitam']);
    }

    public function biskuit()
    {
        return view('product', ['namaProduk' => 'Biskuit Biskuat']);
    }
}


