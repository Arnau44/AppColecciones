@extends ('../layouts.app')

@section ('content')
    <main class="card">
        <form action="" method="post">
        <p id='name'>{{$item->name}}</p>
        <input type="text" value="{{$item->name}}" id="name-form" class="form-control hidden">
        <a href="#" onclick="toggleHide(['name', 'name-form'])"><i class="far fa-edit"></i></a>

        <h2>{{$item->collection->name}}</h2>
        <h3>{{$item->collection->user->name}}</h3>
        
        
            @csrf
            @method('PUT') 
            <p id='description'>{{$item->description}}</p>
            <textarea name="description" id="description-form" class="form-control hidden">{{$item->description}}</textarea>
        </form>
        <a href="#" onclick="toggleHide(['description', 'description-form'])"><i class="far fa-edit"></i></a>
    </main>
    <h2>Comentarios</h2>

@endsection