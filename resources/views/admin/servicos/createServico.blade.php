<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar um novo Serviço</title>
</head>
<body>
<h2>Novo Serviço</h2> 
    <form action="{{route('servicos.store')}}" method="post">
        @csrf
        <label for="">Servico</label> <br />
        <input type="text" name="servico"> <br />
        <label for="">Valor</label> <br />
        <input type="text" name="valor"> <br />
        <label for="">Cliente</label> <br />
        <input type="text" name="nomeCliente"> <br />
        <label for="">Veiculo</label> <br />
        <input type="text" name="nomeVeiculo"> <br /><br />
        <button type="submit">Salvar</button>
    </form>
    <br />  
    <a href="{{route('servicos.index')}}">  <button>Voltar</button> </a>
</body>    
</html>