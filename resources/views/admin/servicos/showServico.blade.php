<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Ver um Veículo</title>
</head>
<body>
        <h2>{{$servicos->servico}}</h2> 
        <label for="">Valor</label> <br />
        <input type="text" name="valor" value="{{$servicos->valor}}"> <br />
        <label for="">Cliente</label > <br />
        <input type="text" name="nomeCliente" value="{{$servicos->nomeCliente}}"> <br />
        <label for="">Veiculo</label> <br />
        <input type="text" name="nomeVeiculo" value="{{$servicos->nomeVeiculo}}"> <br /><br />
        <a href="{{route('servicos.index')}}">  <button>Voltar</button> </a>
    
</body>    
</html>