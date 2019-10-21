@extends ('../layouts.app')

@section ('content')
<div>
    <form action="/home/item/create" method="post">
        {{ csrf_field() }}
    <input type="text" name="name">
    <label for="name">Name</label>
    <textarea name="description" id="" cols="40" rows="3"></textarea>
    
    <input type="submit" value="Enviar">
    </form>
    <h1>{{$collection->name}}</h1>
    <h2>{{$collection->user->name}}</h2>
    <p>{{$collection->description}}</p>
    <ul>
        @foreach ($items as $item)
            <li class='card'>
            {{ $item->name }} 
            <form action="/home/item/{{$item->id}}" method="POST">
            @csrf
            @method('DELETE') 
                <input type="submit" value="X">
            </form>
            <a href="">ver</a>
            </li>   
        @endforeach
    </ul>
</div>
@endsection