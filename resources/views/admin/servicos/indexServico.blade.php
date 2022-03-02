@if(session('message'))
    <script>
    alert("Ação concluída com sucesso!");
    </script>
@endif
<h1>Lista de Serviços</h1> 
@foreach($servicos as $servico)
        <label for="">Serviço {{$servico->id}}:</label> <br />
        <input type="text" name="marca"value="{{$servico->servico}}"> 
        <label for="">Valor:</label> 
        <input type="text" name="cor" value="{{$servico->valor}}"> <br /><br />
        <a href="{{route('servicos.show',$servico->id)}}"><button>View</button></a>
        <a>||</a>
        <a href="{{route('servicos.edit',$servico->id)}}"><button>Edit</button></a><br/>
        <form action="{{route('servicos.destroy',$servico->id)}}" method="post"><br>
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">Deletar</button></a><br>
        </form>
        -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-<br>  
@endforeach
<a href="{{ route('servicos.create') }}"><button>Add new Servico</button></a>
<a href="{{route('dashboard')}}"><button>Home</button></a><br/>