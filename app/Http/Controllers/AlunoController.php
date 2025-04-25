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
        return view('alunos.show',[
            'aluno'=>Aluno::find($id)
        ]);
    }
}
