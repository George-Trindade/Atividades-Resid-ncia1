@if(session('message'))
    <script>
    alert("Ação concluída com sucesso!");
    </script>
@endif
<h1>Lista de Veiculos</h1> 
@foreach($veiculos as $veiculo)
        <label for="">Veiculo {{$veiculo->id}}:</label> <br />
        <input type="text" name="marca"value="{{$veiculo->modelo}}"> 
        <label for="">Cor:</label> 
        <input type="text" name="cor" value="{{$veiculo->cor}}"> <br /><br />
        <a href="{{route('veiculos.show',$veiculo->id)}}"><button>View</button></a>
        <a>||</a>
        <a href="{{route('veiculos.edit',$veiculo->id)}}"><button>Edit</button></a><br/>
        <form action="{{route('veiculos.destroy',$veiculo->id)}}" method="post"><br>
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">Deletar</button></a><br>
        </form>
        -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-<br>  
@endforeach
<a href="{{ route('veiculos.create') }}"><button>Add new veiculo</button></a>
<a href="{{route('dashboard')}}"><button>Home</button></a><br/>