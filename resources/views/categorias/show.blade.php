<!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Categoria</title>
 </head>
 <body>
     @if ($categoria)
         <h1>{{ $categoria->nome }}</h1>
         <ul>
             <li>Nome: {{ $categoria->nome }}</li>
             <li>Descrição: {{ $categoria->descricao}}</li>
         </ul>
     @else
         <p>Categoria não encontrada! </p>
     @endif
     <a href="/categorias">&#9664;Voltar</a>
 </body>
 </html>
