<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar um Cliente</title>
</head>
<body>
<h2>Editar Cliente</h2> 
    <form action="{{route('clientes.update',$clientes->id)}}" method="post">
        @method("put")
        @csrf
        <label for="">Nome</label> <br />
        <input type="text" name="Nome" value="{{$clientes->Nome}}"> <br />
        <label for="">CPF</label> <br />
        <input type="text" name="CPF" value="{{$clientes->CPF}}"> <br />
        <label for="">Endereço</label> <br />
        <input type="text" name="Endereco" value="{{$clientes->Endereco}}"> <br />
        <label for="">Telefone</label> <br />
        <input type="text" name="Telefone" value="{{$clientes->Telefone}}"> <br /><br />
        <button type="submit">Salvar</button> 
    </form>
    <br />  
    <a href="{{route('clientes.index')}}">  <button>Voltar</button> </a>
</body>    
</html>