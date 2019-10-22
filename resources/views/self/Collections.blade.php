@extends ('../layouts.app')

@section ('content')
            <h1>{{Auth::user()->name}}</h1>
            <div class="card">
                    @foreach (Auth::user()->collections as $collection)
                    <div id="{{$collection->id}}">
                        <img/>
                        <p>{{$collection->name}}</p>
                        <p>{{$collection->description}}</p>
                        <form action="/my_collections/{{$collection->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="ELIMINAR" class = "btn btn-outline-danger mt-2">
                        </form>
                    </div>
                    @endforeach
            </div>
            <a href="\new_collection">New Collection</a>



@endsection
