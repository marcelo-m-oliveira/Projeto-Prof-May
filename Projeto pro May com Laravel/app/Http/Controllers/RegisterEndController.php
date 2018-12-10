<?php

namespace App\Http\Controllers;

use App\Endereco;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\RegisterController;

class RegisterEndController extends Controller
{

    public function index(){
        $endereco = Endereco::all();
        return view('auth.cadastroEnd');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'rua' => 'required|string|max:255',
            'num' => 'required|int|',
            'cep' => 'required|int|email|max:8|unique:users',
            'bairro' => 'required|string|max:255',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Endereco
     */
    public function store(Request $request)
    {
        $endereco = new Endereco();
        $endereco->rua    = $request->input('rua');
        $endereco->numero = $request->input('num');
        $endereco->cep    = $request->input('cep');
        $endereco->bairro = $request->input('bairro');

        $endereco->user_id = '1';
        $endereco->save();

        return redirect()->route('home');
    }
}
