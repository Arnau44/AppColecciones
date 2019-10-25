<?php
use App\Category;
$categories = Category::all();
?>
@extends ('../layouts.app')

@section ('content')

<form action="" method="POST">
{{ csrf_field() }}
<select id="categories" name="category_id">
@foreach ($categories as $category)
<option value="{{$category->id}}">{{$category->name}}</option>
@endforeach
</select>
</form>

@endsection