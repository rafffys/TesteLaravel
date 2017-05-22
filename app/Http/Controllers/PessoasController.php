<?php

namespace App\Http\Controllers;

use App\Http\Requests\PessoaRequest;
use App\Pessoa;

class PessoasController extends Controller
{
    public function index()
    {
    	return Pessoa::All();
    }

    public function store(PessoaRequest $request)
    {
    	return Pessoa::create($request->all());
    }

    public function show(Pessoa $pessoa)
    {
    	return $pessoa;
    }

    public function update(PessoaRequest $request,Pessoa $pessoa)
    {
    	$pessoa->update($request->all());
    	return $pessoa;
    }

    public function destroy(Pessoa $pessoa)
    {
    	return (string) $pessoa->delete();
    }
}
