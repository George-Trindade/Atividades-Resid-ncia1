<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Ver um Cliente</title>
</head>
<body>
        <h2>{{$clientes->Nome}}</h2> 
        <label for="">CPF</label> <br />
        <input type="text" name="CPF" value="{{$clientes->CPF}}"> <br />
        <label for="">Endereço</label> <br />
        <input type="text" name="Endereco" value="{{$clientes->Endereco}}"> <br />
        <label for="">Telefone</label> <br />
        <input type="text" name="Telefone" value="{{$clientes->Telefone}}"> <br /><br />
        <a href="{{route('clientes.index')}}">  <button>Voltar</button> </a>
    </form>
</body>    
</html>