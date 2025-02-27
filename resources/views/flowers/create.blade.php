<!-- resources/views/flowers/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Flower</title>
</head>
<body>
    <h1>Add New Flower</h1>

    <form action="{{ route('flowers.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required>
        <br>
        <label>Quantity:</label>
        <input type="number" name="quantity" required>
        <br>
        <label>Price:</label>
        <input type="text" name="price" required>
        <br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
