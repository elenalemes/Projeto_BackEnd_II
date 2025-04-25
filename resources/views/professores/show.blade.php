<!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Professor</title>
 </head>
 <body>
     @if ($professor)
         <h1>{{ $professor->nome }}</h1>
         <ul>
             <li>Telefone: {{ $aluno->telefone }}</li>
             <li>Data de nascimento: {{ $aluno->data_nascimento}}</li>
         </ul>
     @else
         <p>Aluno não encontrado! </p>
     @endif
     <a href="/professores">&#9664;Voltar</a>
 </body>
 </html>
