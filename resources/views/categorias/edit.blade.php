<!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
 </head>

 <body>
     <h1>Atualizar Categoria</h1>
     <form action="{{route('categoria.update',$categoria->id)}}" method="POST">
         @csrf
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
                 <td colspan="2">
                     <input type="submit" value="Salvar"/>
                     <a href="/categorias"><button form=cancel >Cancelar</button></a>
                 </td>
             </tr>
         </table>
     </form>
 </body>
 </html>
