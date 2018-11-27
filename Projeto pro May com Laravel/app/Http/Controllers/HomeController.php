<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class HomeController extends Controller
{
    public function index()
    {
        $registros = Produto::where([
            'ativo' => 'S'
            ])->get();

        return view('produto.index', compact('registros'));
    }

    public function produto($id = null)
    {
        if( !empty($id) ) {
            $registro = Produto::where([
                'id'    => $id,
                'ativo' => 'S'
                ])->first();

            if( !empty($registro) ) {
                return view('produto.produto', compact('registro'));
            }
        }
        return redirect()->route('index');
    }
}
