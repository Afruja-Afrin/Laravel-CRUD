<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Edit the product</h1>
    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <form method="POST" action="{{ route('products.update', ['product' => $product]) }}">
    @csrf
    @method('PUT')

    <div>
        <label>Name:</label>
        <input type="text" name="name" value="{{ $product->name }}">
    </div>

    <div>
        <label>Quantity:</label>
        <input type="text" name="quantity" value="{{ $product->quantity }}">
    </div>

    <div>
        <label>Price:</label>
        <input type="text" name="price" value="{{ $product->price }}">
    </div>

    <div>
        <label>Description:</label>
        <input type="text" name="description" value="{{ $product->description }}">
    </div>

    <div>
        <input type="submit" value="Update product">
    </div>
</form>
    <!-- Your content goes here -->
    <script src="script.js"></script>
</body>

</html>