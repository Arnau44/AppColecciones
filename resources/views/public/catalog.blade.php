@extends ('../layouts.app')

@section ('content')
<div>
    <nav id='navCategories' class="row justify-content-center">
        @foreach ($categories as $category)
            <button name="{{$category->name}}" 
                    title="{{$category->name}}" 
                    onclick="hideExcept(['{{$category->name}}'],'.category')">
            <img/>
            </button>
        @endforeach
        </nav>
    
    <main id="content" class="">

        @foreach ($categories as $category)
        
        <ul id="{{$category->name}}" class='category card'>
            <h2>{{$category->name}}</h2>
            @foreach ($category->collections as $collection)
            <li class="card">
                <img/>
                <p>{{$collection->name}}</p>
                <p>{{$collection->description}}</p>
                <p>{{$collection->user->name}}</p>
                <a href="/home/collection/{{$collection->id}}">ver</a>
            </li>
        
            @endforeach
        </ul>
        @endforeach
               
                <div class="card-footer container-fluid">
                    <div class="row justify-content-center">
                        <button onclick="toggleForm()"> NOVEDADES </button>
                        <button onclick="toggleForm()"> RECOMENDADOS </button>
                        <button onclick="toggleForm()"> FAVORITOS </button>
                    </div>
                </div>
    </main>
</div>



@endsection