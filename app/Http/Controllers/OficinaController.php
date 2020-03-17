<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Oficina;

class OficinaController extends Controller
{
    public function listar()
    {
        return view('admin.oficina.listar');
    }

    public function adicionar()
    {
        return view('admin.oficina.form');
    }

    public function material()
    {
        return view('admin.oficina.material');
    }

    public function quem_somos()
    {
        return view('admin.oficina.quemsomos');
    }
}
