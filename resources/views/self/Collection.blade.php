@extends ('../layouts.app')

@section ('content')
            <div class="card">
                    @foreach ($collection->items as $item)
                    <div id="{{$collection->id}}">
                        <img/>
                        <p>{{$item->name}}</p>
                        <p>{{$item->description}}</p>
                        <form action="/home/Collection/{{$item->id}}" method="post">
                            @csrf
                            @method('DELETE') 
                            <input type="submit" value="ELIMINAR" class = "btn btn-outline-danger mt-2">
                        </form>
                    </div>
                    @endforeach
                    <form id="crear" action="" method="post" class="hidden">
                        @csrf
                        <input type="submit" value="CREAR" class = "btn btn-outline-success">
                    </form>
                    <button id="" onclick="toggleForm(['crear'])"></button>
            </div>



@endsection