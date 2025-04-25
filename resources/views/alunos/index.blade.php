<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Documento do Sistema</title>
 </head>
 <body>
     <h1>Lista de alunos:</h1>
     <ul>
     @foreach ($listAlunos as $aluno)
         <li>{{$aluno->nome}}</li>
     @endforeach
     </ul>
 </body>
 </html>
