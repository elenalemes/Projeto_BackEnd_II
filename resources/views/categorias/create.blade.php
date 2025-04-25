<!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
 </head>

 <body>
     <h1>Crie uma nova Categoria</h1>
     <form action="/categoria" method="POST">
         @csrf
         {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> --}}
         <table>
             <tr>
                 <td>Nome:</td>
                 <td><input type="text" name="nome"/></td>
             </tr>
             <tr>
                 <td>Descrição:</td>
                 <td><textarea name="descricao" id="" cols="30" rows="10"></textarea></td>
             </tr>
             <tr align="center">
                 <td colspan="2"><input type="submit" value="Criar"/></td>
             </tr>
             <tr align="center">
                 <td colspan="2"><a href="/categorias" style="display: inline">&#9664;&nbsp;Voltar</a></td>
             </tr>
         </table>
     </form>
 </body>

 </html>
