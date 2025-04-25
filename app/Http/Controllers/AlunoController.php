<?php

namespace App\Http\Controllers;
use App\Models\Aluno;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index(){
        $listAlunos = Aluno::all();
        return view('aluno.index', compact('$listAlunos'));
    }
}
