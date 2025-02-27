<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flower Inventory</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"> <!-- Bootstrap Icons -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="d-flex flex-column align-items-center justify-content-center vh-100">

    <h1 class="text-center">Flower Inventory</h1>

    <a href="{{ route('flowers.create') }}" class="btn btn-primary mb-3">Add New Flower</a>

    <div class="d-flex justify-content-center w-100">
        <table class="table table-bordered text-center w-50">
            <tr class="table-dark">
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>

            @foreach ($flowers as $flower)
                <tr>
                    <td>{{ $flower->name }}</td>
                    <td>{{ $flower->quantity }}</td>
                    <td>{{ $flower->price }}</td>
                    <td>
                        <a href="{{ route('flowers.edit', $flower->id) }}" class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil-square"></i> Edit
                        </a>
                        <form action="{{ route('flowers.destroy', $flower->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="bi bi-trash3-fill"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

</body>
</html>
