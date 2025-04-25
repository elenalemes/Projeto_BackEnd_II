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
                            <td>
                                <a href="/alunos/{{ $aluno->id }}">{{ $luno->id }}
                                </a>
                            </td>
                            <td>{{ $aluno->nome }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Alunos não encontradas! </p>
        @endif
    </table>
 </body>
 </html>
