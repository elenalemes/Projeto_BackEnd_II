<!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Aluno</title>
 </head>
 <body>
     @if ($aluno)
         <h1>{{ $aluno->nome }}</h1>
         <ul>
             <li>Telefone: {{ $aluno->telefone }}</li>
             <li>Data de nascimento: {{ $aluno->data_nascimento}}</li>
         </ul>
     @else
         <p>Aluno não encontrado! </p>
     @endif
     <a href="/alunos">&#9664;Voltar</a>
 </body>
 </html>
