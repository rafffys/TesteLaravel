<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests\PessoaRequest;
use App\Pessoa;
use App\Equipe;

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
        session()->flash('flash_message','Pessoa salva com sucesso!');
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
        $equipes = Equipe::pluck('nome', 'id')->all();
    	return view('pessoas.create',compact('pessoa','equipes'));
    }

    public function edit(Pessoa $pessoa)
    {
        $equipes = Equipe::pluck('nome', 'id')->all();
    	return view('pessoas.edit',compact('pessoa','equipes'));
    }

    public function update(PessoaRequest $request,Pessoa $pessoa)
    {
    	$pessoa->update($request->all());
        session()->flash('flash_message','Pessoa salva com sucesso!');

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
        session()->flash('flash_message','Pessoa removida com sucesso!');
        
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
