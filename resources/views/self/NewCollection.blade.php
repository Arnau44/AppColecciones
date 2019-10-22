@extends ('../layouts.app')

@section ('content')
<main>

<h1>New Collection</h1>

<div class="card">

    <form action="" method="POST" class="form">
        <label for="name" class="form-label">Collection Name</label>
        <input type="text" name="name" class="form-control">
        <label for="description" class="form-label">Collection Description</label>
        <textarea name="description" id=""  class="form-control"></textarea>
        <input type="submit" value="Create Collection">
    </form>

</div>
<h2>Items</h2>
<div class="card">

    <form action="" method="POST" class="form">
        <label for="name" class="form-label">Item Name</label>
        <input type="text" name="name" class="form-control">
        <label for="description" class="form-label">Item Description</label>
        <textarea name="description" id=""  class="form-control"></textarea>
        <input type="submit" value="Create Item">
    </form>

</div>

</main>

@endsection
