<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Documento do Sistema</title>
 </head>
 <body>
     <h1>Lista de Categorias:</h1>
     <ul>
     @foreach ($listCategorias as $ccategoria)
         <li>{{$categoria->nome}}</li>
     @endforeach
     </ul>
 </body>
 </html>
