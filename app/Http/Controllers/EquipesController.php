<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests\EquipeRequest;
use App\Equipe;

class EquipesController extends Controller
{
    public function index()
    {
    	$equipes = Equipe::all();
        if (Request::wantsJson())
        {
            return $equipes;
        }
        else
        {
            return view('equipes.index',compact('equipes'));
        }
    }

    public function create()
    {
        $equipe = new Equipe();
        return view('equipes.create',compact('equipe'));
    }

    public function edit(Equipe $equipe)
    {
        return view('equipes.edit',compact('equipe'));
    }

    public function store(EquipeRequest $request)
    {
        $equipe = Equipe::create($request->all());
        if (Request::wantsJson())
        {
            return $equipe;
        }
        else
        {
            return redirect('equipes');
        }
    }

    public function show(Equipe $equipe)
    {
        if (Request::wantsJson())
        {
    	   return $equipe;
        }
        else
        {
            return view('equipes.show',compact('equipe'));
        }
    }

    public function update(EquipeRequest $request, Equipe $equipe)
    {
    	$equipe->update($request->all());
        if (Request::wantsJson())
        {
    	   return $equipe;
        }
        else
        {
            return redirect('equipes');
        }
    }

    public function destroy(Equipe $equipe)
    {
        $deleted = (string) $equipe->delete();
        if (Request::wantsJson())
        {
    	   return $deleted;	
        }
        else
        {
            return redirect('equipes');
        }
    }
}
