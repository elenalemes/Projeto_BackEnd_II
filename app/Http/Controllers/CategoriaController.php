<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(){
        $listCategorias = Categoria::all();
        return view('categorias.index',['categoriasList'=>$listCategorias]);
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
        return view('categorias.show',[
            'categoria'=>Categoria::find($id)
        ]);
    }

    public function edit(categoria $categoria)
    {
        //
    }

    public function update(Request $request, categoria $categoria)
    {
        //
    }


    public function destroy(categoria $categoria)
    {
        //
    }
}
