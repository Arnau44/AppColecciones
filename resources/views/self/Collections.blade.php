@extends ('../layouts.app')

@section ('content')
            <div class="card">
                    @foreach ($collections as $collection)
                    <div id="{{$collection->id}}">
                        <img/>
                        <p>{{$collection->name}}</p>
                        <p>{{$collection->description}}</p>
                        <form action="/home/Collections/{{$collection->id}}" method="post">
                            @csrf
                            @method('DELETE') 
                            <input type="submit" value="ELIMINAR" class = "btn btn-outline-danger mt-2">
                        </form>
                    </div>
                    @endforeach
            </div>



@endsection