@extends ('../layouts.app')

@section ('content')
<div>
    <nav id='navCategories' class="row justify-content-center">
        @foreach ($categories as $category)
            <button name="{{$category->name}}" 
                    title="{{$category->name}}" 
                    onclick="toggleForm(['{{$category->name}}'])">
            <img/>
            </button>
        @endforeach
        </nav>
    
    <main id="content" class="">

        @foreach ($categories as $category)
        
        <ul id="{{$category->name}}" class='card hidden'>
            <h2>{{$category->name}}</h2>
            @foreach ($category->collections as $collection)
            <li class="card">
                <img/>
                <p>{{$collection->name}}</p>
                <p>{{$collection->description}}</p>
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