<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EquipeRequest;
use App\Equipe;

class EquipesController extends Controller
{
    public function index()
    {
    	return Equipe::all();
    }

    public function store(EquipeRequest $request)
    {
    	return Equipe::create($request->all());
    }

    public function show(Equipe $equipe)
    {
    	return $equipe;
    }

    public function update(EquipeRequest $request, Equipe $equipe)
    {
    	$equipe->update($request->all());
    	return $equipe;
    }

    public function destroy(Equipe $equipe)
    {
    	return (string) $equipe->delete();	
    }
}
