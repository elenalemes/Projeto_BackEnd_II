<!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
 </head>

 <body>
     <h1>Crie um novo Professor</h1>
     <form action="/professor" method="POST">
         @csrf
         {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> --}}
         <table>
             <tr>
                 <td>Nome:</td>
                 <td><input type="text" name="nome"/></td>
             </tr>
             <tr>
                 <td>E-mail:</td>
                 <td><textarea name="email" id="" cols="30" rows="10"></textarea></td>
             </tr>
             <tr>
                <td>Telefone:</td>
                <td><input type="text" name="telefone"/></td>
            </tr>
             <tr>
                 <td>Data de Nascimento:</td>
                 <td><input type="text" name="data_nascimento"/></td>
             </tr>
             <tr>
                 <td>CPF:</td>
                 <td><input type="number" name="cpf"/></td>
             </tr>
             <tr>
                 <td>RG:</td>
                 <td><input type="checkbox" name="rg"/></td>
             </tr>
             <tr>
                <td>Naturalidade:</td>
                <td><input type="checkbox" name="naturalidade"/></td>
            </tr>
            <tr>
                <td>Nacionalidade:</td>
                <td><input type="checkbox" name="nacionalidade"/></td>
            </tr>
             <tr align="center">
                 <td colspan="2"><input type="submit" value="Criar"/></td>
             </tr>
             <tr align="center">
                 <td colspan="2"><a href="/professores" style="display: inline">&#9664;&nbsp;Voltar</a></td>
             </tr>
         </table>
     </form>
 </body>

 </html>
