@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Flower Inventory</h2>
    <a href="{{ route('flowers.create') }}" class="btn btn-primary mb-3">Add Flower</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($flowers as $flower)
            <tr>
                <td>{{ $flower->name }}</td>
                <td>{{ $flower->quantity }}</td>
                <td>${{ number_format($flower->price, 2) }}</td>
                <td>
                    <a href="{{ route('flowers.edit', $flower) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('flowers.destroy', $flower) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
