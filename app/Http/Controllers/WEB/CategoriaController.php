<?php

namespace App\Http\Controllers\WEB;

use App\Models\categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(){
        $listCategorias = Categoria::all();
        return view('categorias.index',['categoriasList'=>$listCategorias]);
    }

    public function create() {
        return view('categorias.create');
    }

    public function store(Request $request){
        $newCategoria = $request->all();
        //dd($newProduto);

        if(Categoria::create($newCategoria))
            return redirect('/categorias');
            else dd("Erro ao inserir a categoria!!");
    }

    public function show($id){
        return view('categorias.show',[
            'categoria'=>Categoria::find($id)
        ]);
    }

    public function edit($id) {
        $aluno = Categoria::find($id);
        return view('categorias.edit',compact('categorias'));
    }

     public function update(Request $request,$id){
        $newCategoria = $request->all();

        if(Categoria::findOrFail($id)->update($newCategoria))
            return redirect('/categorias');
        else dd("Erro ao atualizar a categoria!!");
    }

   public function delete($id) {
        if(Categoria::destroy($id))
             return redirect('/categorias');
        else dd("Erro ao remover a categoria!!");
   }
}
