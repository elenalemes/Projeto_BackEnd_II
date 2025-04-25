<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Documento do Sistema</title>
 </head>
 <body>
    <h1>Lista de categorias:</h1>
    <table>
        @if ($categoriasList->count() > 0)
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categoriasList as $categoria)
                        <tr>
                            <td><a href="/categorias/{{ $categoria->id }}">{{ $categoria->id }}</a></td>
                            <td>{{ $categoria->nome }}</td>
                            <td>{{ $categoria->descricao }}</td>
                            <td><a href="{{ route('categoria.edit',$categoria->id) }}">ATUALIZAR</a>|
                            <a href="{{ route('categoria.delete',$categoria->id) }}">DELETAR</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Categorias não encontradas! </p>
        @endif
    </table>
</body>
 </body>
 </html>
