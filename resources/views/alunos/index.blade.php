<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Documento do Sistema</title>
 </head>
 <body>
     <h1>Lista de alunos:</h1>
     <table>
        @if ($alunosList ->count() > 0)
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alunosList as $aluno)
                        <tr>
                            <td><a href="/alunos/{{ $aluno->id }}">{{ $aluno->id }}</a></td>
                            <td>{{ $aluno->nome }}</td>
                            <td>{{ $aluno->serie }}</td>
                            <td>{{ $aluno->matricula }}</td>
                            <td><a href="{{ route('aluno.edit',$aluno->id) }}">ATUALIZAR</a>|
                            <a href="{{ route('aluno.delete',$aluno->id) }}">DELETAR</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Alunos não encontrados! </p>
        @endif
    </table>
 </body>
 </html>
