<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;
use App\Models\MotivoContato;

class ContatoController extends Controller
{
    public function contato(Request $request) {
       // print_r($request->all());
        //print_r($request->input('nome'));
       

        

        /*
        $contato = new SiteContato();
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');
        $contato->save();
        */
        /*
        $contato = new SiteContato();
        $contato->fill($request->all());
        $contato->save(); */

        //print_r($contato->getAttributes());
        
        $motivo_contatos = MotivoContato::all();

        return view('site.contato', ['motivo_contatos' => $motivo_contatos]);
    }
    public function salvar(Request $request) {
        //realizar a validação do formulário
        $request->validate([ 
            'nome' => 'required',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required'

        ]);
        
        //SiteContato::create($request->all());
    }

}
