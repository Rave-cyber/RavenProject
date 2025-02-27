<!-- resources/views/flowers/edit.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Flower</title>
</head>
<body>
    <h1>Edit Flower</h1>

    <form action="{{ route('flowers.update', $flower->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $flower->name }}" required>
        <br>
        <label>Quantity:</label>
        <input type="number" name="quantity" value="{{ $flower->quantity }}" required>
        <br>
        <label>Price:</label>
        <input type="text" name="price" value="{{ $flower->price }}" required>
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
