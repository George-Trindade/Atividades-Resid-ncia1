<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar um Veículo</title>
</head>
<body>
<h2>Editar Serviço</h2> 
<form action="{{route('servicos.update',$servicos->id)}}" method="post">
        @method("put")
        @csrf
        <label for="">Servico</label> <br />
        <input type="text" name="servico" value="{{$servicos->servico}}"> <br />
        <label for="">Valor</label> <br />
        <input type="text" name="valor" value="{{$servicos->valor}}"> <br />
        <label for="">Cliente</label> <br />
        <input type="text" name="nomeCliente" value="{{$servicos->nomeCliente}}"> <br />
        <label for="">Veiculo</label> <br />
        <input type="text" name="nomeVeiculo" value="{{$servicos->nomeVeiculo}}"> <br /><br />
        <button type="submit">Salvar</button> 
    </form>
        <br/>
        <a href="{{route('servicos.index')}}">  <button>Voltar</button> </a>
</body>    
</html>