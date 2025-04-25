<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Documento do Sistema</title>
 </head>
 <body>
    <h1>Lista de professores:</h1>
    <table>
        @if ($professoresList->count() > 0)
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($professoresList as $professor)
                        <tr>
                            <td><a href="/professores/{{ $professor->id }}">{{ $professor->id }}</a></td>
                            <td>{{ $professor->nome }}</td>
                            <td>{{ $professor->email }}</td>
                            <td><a href="{{ route('aluno.edit',$aluno->id) }}">ATUALIZAR</a>|
                            <a href="{{ route('aluno.delete',$aluno->id) }}">DELETAR</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Professores não encontrados! </p>
        @endif
    </table>
</body>
 </html>
