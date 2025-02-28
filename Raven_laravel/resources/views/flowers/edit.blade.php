@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Flower</h2>
    <form action="{{ route('flowers.update', $flower) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" value="{{ $flower->name }}" required>
        </div>
        <div class="mb-3">
            <label>Quantity:</label>
            <input type="number" name="quantity" class="form-control" value="{{ $flower->quantity }}" required>
        </div>
        <div class="mb-3">
            <label>Price:</label>
            <input type="text" name="price" class="form-control" value="{{ $flower->price }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
