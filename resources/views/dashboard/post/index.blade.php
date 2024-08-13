@extends('dashboard.layout')

@section('content')
    <h1>Listado | Post </h1>

    <a href="{{route('post.create') }}">Crear</a>

    <table>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Categoria</th>
                <th>Posted</th>
                <th>Acciones </th>
            </tr>
        </thead> 
        <tbody>
           @foreach ($posts as $p)
           <tr>
            <td>{{$p->title}} </td>
            <td> {{$p->category->title}} </td>
            <td>{{$p->posted}} </td>
            <td>
                <a href="{{route('post.edit',$p->id) }}">Editar</a>
                <a href="{{route('post.show',$p) }}">Ver</a>
                <form action="{{route('post.destroy',$p->id) }}" method="post">
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
     
    {{$posts->links()}}
@endsection