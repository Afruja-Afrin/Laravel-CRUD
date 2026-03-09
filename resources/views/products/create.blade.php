<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Title</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Create a product</h1>
    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        @method('post')
        <div>
            <label>Name:</label>
            <input type="text" id="name" name="name" placeholder="Name" required>
        </div>
        <div>
            <label>Quantity:</label>
            <input type="text" id="quantity" name="quantity" placeholder="Quantity">
        </div>
        <div>
            <label>Price:</label>
            <input type="text" id="price" name="price" placeholder="Price">
        </div>
        <div>
            <label>Description:</label>
            <input type="text" id="description" name="description" placeholder="Description">
        </div>
        <div>
            <input type="submit" value="Save a New Product">
        </div>
    </form>
    <!-- Your content goes here -->
    <script src="script.js"></script>
</body>

</html>