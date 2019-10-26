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
                    <div id = "collection_edit_form-{{$collection->id}}" class="hidden">
                    <form action="/home/Collections/{{$collection->id}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                        <div class="form-group">
                            <select id="category" name="category_id">
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            <input type="text" name="name" value="{{$collection->name}}">
                            <textarea class="form-control" required id="description" name="description" rows="3">{{$collection->description}}</textarea>
                        </div>
                        <a id="collection_cancel_button-{{$collection->id}}" onclick="toggleHide(['collection_edit_form-{{$collection->id}}','collection_edit_button-{{$collection->id}}',])"
                                class="btn btn-outline-success mt-4">
                                CANCELAR
                        </a>
                        <input type="submit" value="OK" class = "btn btn-outline-success mt-4">
                    </form>

                    </div>
                    <button id="colection_edit_button-{{$collection->id}}" onclick="toggleHide(['collection_edit_form-{{$collection->id}}',
                        '{{$collection->id}}',
                        'collection_edit_button-{{$collection->id}}'])"
                        class="btn btn-outline-success">
                        EDITAR
                    </button>
                    @endforeach
                    <form id="crear" action="/home/Collections" method="POST" class="hidden" accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf
                        <label>Category</label>
                        <select id="category" name="category_id">
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        <label>Name</label>
                        <input type="text" name="name">
                        <label>Description</label>
                        <textarea name="description"></textarea>
                        <label>Image</label>
                        <input type="file" name="image">
                        <input type="submit" value="CREAR" class = "btn btn-outline-success">
                    </form>
                    <button id="" onclick="toggleHide(['crear'])">CREAR</button>
            </div>
            <a href="\new_collection">New Collection</a>



@endsection
