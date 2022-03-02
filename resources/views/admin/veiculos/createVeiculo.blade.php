<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar um novo Veículo</title>
</head>
<body>
<h2>Novo Veículo</h2> 
    <form action="{{route('veiculos.store')}}" method="post">
        @csrf
        <label for="">Modelo</label> <br />
        <input type="text" name="modelo"> <br />
        <label for="">Marca</label> <br />
        <input type="text" name="marca"> <br />
        <label for="">Ano</label> <br />
        <input type="text" name="ano"> <br />
        <label for="">Placa</label> <br />
        <input type="text" name="placa"> <br />
        <label for="">Cor</label> <br />
        <input type="text" name="cor"> <br /><br />
        <button type="submit">Salvar</button>
    </form>
    <br />  
    <a href="{{route('veiculos.index')}}">  <button>Voltar</button> </a>
</body>    
</html>