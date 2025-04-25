<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Documento do Sistema</title>
 </head>
 <body>
     <h1>Lista de Professores:</h1>
     <ul>
     @foreach ($listProfessors as $professor)
         <li>{{$professor->nome}}</li>
     @endforeach
     </ul>
 </body>
 </html>
