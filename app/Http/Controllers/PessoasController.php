<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests\PessoaRequest;
use App\Pessoa;

class PessoasController extends Controller
{
    public function index()
    {
    	$pessoas = Pessoa::All();
    	if (Request::WantsJson())
    	{
    		return $pessoas;
    	}
    	else
    	{
    		return view('pessoas.index',compact('pessoas'));
    	}
    }

    public function store(PessoaRequest $request)
    {
    	$pessoa = Pessoa::create($request->all());
    	if (Request::WantsJson())
    	{
    		return $pessoa;
    	}
    	else
    	{
    		return redirect('pessoas');
    	}
    }

    public function show(Pessoa $pessoa)
    {
    	if (Request::WantsJson())
    	{
    		return $pessoa;
    	}
    	else
    	{
    		return view('pessoas.show',compact('pessoa'));
    	}
    }

    public function create()
    {
    	$pessoa = new Pessoa();
    	return view('pessoas.create',compact('pessoa'));
    }

    public function edit(Pessoa $pessoa)
    {
    	return view('pessoas.edit',compact('pessoa'));
    }

    public function update(PessoaRequest $request,Pessoa $pessoa)
    {
    	$pessoa->update($request->all());
    	if (Request::WantsJson())
    	{
    		return $pessoa;
    	}
    	else
    	{
    		return redirect('pessoas');
    	}
    }

    public function destroy(Pessoa $pessoa)
    {
    	$deleted = (string) $pessoa->delete();
    	if (Request::WantsJson())
    	{
    		return $deleted;
    	}
    	else
    	{
    		return redirect('pessoas');
    	}
    }
}
