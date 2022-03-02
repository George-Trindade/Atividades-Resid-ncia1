<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Ver um Veículo</title>
</head>
<body>
        <h2>{{$veiculos->modelo}}</h2> 
        <label for="">Marca</label> <br />
        <input type="text" name="marca"value="{{$veiculos->marca}}"> <br />
        <label for="">Ano</label> <br />
        <input type="text" name="ano" value="{{$veiculos->ano}}"> <br />
        <label for="">Placa</label> <br />
        <input type="text" name="placa" value="{{$veiculos->placa}}"> <br />
        <label for="">Cor</label> <br />
        <input type="text" name="cor" value="{{$veiculos->cor}}"> <br /><br />
        <a href="{{route('veiculos.index')}}">  <button>Voltar</button> </a>
    
</body>    
</html>