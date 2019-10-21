@extends ('../layouts.app')

@section ('content')
            <div class="card">
                    @foreach ($categories as $category)
                    <div id="{{$category->id}}">
                        <img/>
                        <p>{{$category->name}}</p>
                        <p>{{$category->description}}</p>
                        <form action="/home/Category/{{$category->id}}/delete" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="ELIMINAR" class = "btn btn-outline-danger mt-2">
                        </form>
                    </div>
                    <div id = "category_edit_form-{{$category->id}}" class="hidden">
                    <form action="/home/Category/{{$category->id}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                        <div class="form-group">
                            <input type="text" name="name" value="{{$category->name}}">
                            <textarea class="form-control" required id="description" name="description" rows="3">{{$category->description}}</textarea>
                        </div>
                        <a id="category_cancel_button-{{$category->id}}" onclick="toggleHide(['category_edit_form-{{$category->id}}','category_edit_button-{{$category->id}}',])" 
                                class="btn btn-outline-success mt-4">
                                CANCELAR
                        </a>
                        <input type="submit" value="OK" class = "btn btn-outline-success mt-4">
                    </form>

                    </div>
                    <button id="category_edit_button-{{$category->id}}" onclick="toggleHide(['category_edit_form-{{$category->id}}',
                        '{{$category->id}}',
                        'category_edit_button-{{$category->id}}'])" 
                        class="btn btn-outline-success">
                        EDITAR
                    </button>
                    @endforeach
                    <form id="crear" action="/home/Category" method="POST" class="hidden" accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf
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



@endsection