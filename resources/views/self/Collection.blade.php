@extends ('../layouts.app')

@section ('content')
            <div class="card">
                    @foreach ($Collection->Items as $Item)
                    <div id="{{$collection->id}}">
                        <img/>
                        <p>{{$Item->name}}</p>
                        <p>{{$Item->description}}</p>
                        <form action="/home/Collection/{{$Item->id}}" method="post">
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