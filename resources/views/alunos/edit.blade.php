<!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
 </head>

 <body>
     <h1>Atualizar Aluno</h1>
     <form action="{{route('aluno.update',$aluno->id)}}" method="POST">
         @csrf
         <table>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome"/></td>
            </tr>
            <tr>
                <td>Telefone:</td>
                <td><textarea name="telefone" id="" cols="30" rows="10"></textarea></td>
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
           <tr>
               <td>Serie:</td>
               <td><input type="checkbox" name="serie"/></td>
           </tr>
           <tr>
               <td>Turno:</td>
               <td><input type="checkbox" name="turno"/></td>
           </tr>
           <tr>
               <td>Matrícula:</td>
               <td><input type="checkbox" name="matricula"/></td>
           </tr>
             <tr align="center">
                 <td colspan="2">
                     <input type="submit" value="Salvar"/>
                     <a href="/alunos"><button form=cancel >Cancelar</button></a>
                 </td>
             </tr>
         </table>
     </form>
 </body>
 </html>
