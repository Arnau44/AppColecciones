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
@foreach ($items as $item)
    <li>
        {{ $item->name }} {{ $item->collection->name }}
    <form action="/home/item/{{$item->id}}" method="POST">
        @csrf
        @method('DELETE') 
            <input type="submit" value="X">
        </form>
    </li>   
@endforeach
</div>
@endsection