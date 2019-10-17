@extends ('../layouts.app')

@section ('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header container-fluid">
                <div class="row justify-content-center">
                    @foreach ($categories as $category)
                        <button name="{{$category->name}}" title="{{$category->name}}" onclick="toggleForm()">
                        <img/>
                        </button>
                    @endforeach
                <div class="card-body container-fluid">
                    <div class="row justify-content-center">
                    @foreach ($categories as $category)
                    @foreach ($category->collections as $collection)
                    <div class="col">
                        <img/>
                        <p>{{$collection->name}}</p>
                        <p>{{$collection->description}}</p>
                    </div>
                    @endforeach
                    @endforeach
                    </div>
                    </div>
                </div>
                </div>
                <div class="card-footer container-fluid">
                    <div class="row justify-content-center">
                        <button onclick="toggleForm()"> NOVEDADES </button>
                        <button onclick="toggleForm()"> RECOMENDADOS </button>
                        <button onclick="toggleForm()"> FAVORITOS </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection