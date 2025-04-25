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

}
