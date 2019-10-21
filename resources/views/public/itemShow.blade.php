@extends ('../layouts.app')

@section ('content')
    <main class="card">
        <h1>{{$item->name}}</h1>
        <h2>{{$item->collection->name}}</h2>
        <h3>{{$item->collection->user->name}}</h3>
        <p>{{$item->description}}</p>
    </main>
    <h2>Comentarios</h2>

@endsection