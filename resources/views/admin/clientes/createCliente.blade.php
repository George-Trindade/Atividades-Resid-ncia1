<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar um novo Cliente</title>
</head>
<body>
<h2>Novo Cliente</h2> 
    <form action="{{route('clientes.store')}}" method="post">
        @csrf
        <label for="">Nome</label> <br />
        <input type="text" name="Nome"> <br />
        <label for="">CPF</label> <br />
        <input type="text" name="CPF"> <br />
        <label for="">Endereço</label> <br />
        <input type="text" name="Endereco"> <br />
        <label for="">Telefone</label> <br />
        <input type="text" name="Telefone"> <br /><br />
        <button type="submit">Salvar</button>
    </form>
    <br />  
    <a href="{{route('clientes.index')}}">  <button>Voltar</button> </a>
</body>    
</html>