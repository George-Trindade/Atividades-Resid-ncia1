@if(session('message'))
    <script>
    alert("Ação concluída com sucesso!");
    </script>
@endif
<h1>Lista de Clientes</h1> 
@foreach($clientes as $cliente)
<label for="">Cliente {{$cliente->id}}:</label> <br />
    <input type="text" name="Nome" value="{{$cliente->Nome}}"> 
    <label for="">CPF:</label> 
    <input type="text" name="CPF" value="{{$cliente->CPF}}"> <br /><br />
    <a href="{{route('clientes.show',$cliente->id)}}"><button>View</button></a>
    <a>||</a>
    <a href="{{route('clientes.edit',$cliente->id)}}"><button>Edit</button></a>
    <form action="{{route('clientes.destroy',$cliente->id)}}" method="post"><br>
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Deletar</button></a><br>
    </form>
    -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-<br>   
@endforeach
<a href="{{ route('clientes.create') }}"><button>Add new cliente</button></a><br>
