@extends('layouts.admin')

@section('content')
<h1>Add New Furniture</h1>
<form action="{{ route('furniture.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea name="description" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <label>Price</label>
        <input type="number" name="price" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection