<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{

    public function index(){
        $listProfessores = Professor::all();
        return view('professors.index',['professorsList'=>$listProfessores]);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id){
        return view('professores.show',[
            'professor'=>Professor::find($id)
        ]);
    }

    public function edit(Professor $professor)
    {
        //
    }

    public function update(Request $request, Professor $professor)
    {
        //
    }

    public function destroy(Professor $professor)
    {
        //
    }
}
