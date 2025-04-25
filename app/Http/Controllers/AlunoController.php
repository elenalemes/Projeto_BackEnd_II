<?php

namespace App\Http\Controllers;
use App\Models\Aluno;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index(){
        $listAlunos = Aluno::all();
        return view('alunos.index',['alunosList'=>$listAlunos]);
    }

    public function show($id){
        return view('alunos.show',['aluno'=>Aluno::find($id)]);
    }

    public function store(Request $request){
        $newAluno = $request->all();
        //dd($newProduto);

        if(Aluno::create($newAluno))
            return redirect('/alunos');
        else dd("Erro ao inserir o aluno!!");
    }

    public function create() {
        return view('alunos.create');
    }

    public function update(Request $request,$id){
        $newAluno = $request->all();

        if(Aluno::findOrFail($id)->update($newAluno))
            return redirect('/alunos');
        else dd("Erro ao atualizar o aluno!!");
    }

    public function edit($id) {
        $aluno = Aluno::find($id);
        return view('alunos.edit',compact('alunos'));
    }

   public function delete($id) {
        if(Aluno::destroy($id))
             return redirect('/alunos');
        else dd("Erro ao remover o aluno!!");
   }
}
