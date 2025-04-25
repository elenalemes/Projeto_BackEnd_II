<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Usuários</title>
 </head>
 <body>
         @if ($users)
             <h1>{{$user->name}}</h1>
             <p>{{$user->email}}</p>
         @else
             <p>Usuários não encontrados! </p>
         @endif
         <a href="/users">Voltar</a>
 </body>
 </html>
