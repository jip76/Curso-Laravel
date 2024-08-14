@extends('dashboard.layout')

@section('content')
    <h1>Listado | Post </h1>

    <a href="{{route('category.create') }}">Crear</a>

    <table>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Acciones</th>
                
            </tr>
        </thead> 
        <tbody>
           @foreach ($categories as $c)
           <tr>
            <td>{{$c->title}} </td>
            
            <td>
                <a href="{{route('category.edit',$c->id) }}">Editar</a>
                <a href="{{route('category.show',$c) }}">Ver</a>
                <form action="{{route('category.destroy',$c->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
                
                
            </td>
        </tr>
           @endforeach
        </tbody>
    </table>
    <br/>
     
    {{$categories->links()}}
@endsection