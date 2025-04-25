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


    public function create() {
        return view('professores.create');
    }

    public function store(Request $request){
        $newProfessor = $request->all();
        //dd($newProduto);

        if(Professor::create($newProfessor))
            return redirect('/professores');
            else dd("Erro ao inserir o professor!!");
    }

    public function show($id){
        return view('professores.show',[
            'professor'=>Professor::find($id)
        ]);
    }

    public function edit($id) {
        $aluno = Professor::find($id);
        return view('professores.edit',compact('professores'));
    }

     public function update(Request $request,$id){
        $newProfessor = $request->all();

        if(Professor::findOrFail($id)->update($newProfessor))
            return redirect('/professores');
        else dd("Erro ao atualizar o perfil do professor!!");
    }

   public function delete($id) {
        if(Professor::destroy($id))
             return redirect('/professores');
        else dd("Erro ao remover o professor!!");
   }
}
