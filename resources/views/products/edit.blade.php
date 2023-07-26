<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>
    <h1>Edit the product</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form method="put" action="{{route('product.update', ['product' => $product])}}">
    @csrf
    @method('put')
        <div>
            <label>Name</label>
            <input type="text" name ="name" placeholder="Name" value="{{$product->name}}">
        </div>
        <div>
            <label>Quantity</label>
            <input type="text" name ="qty" placeholder="Qty" value="{{$product->qty}}">
        </div>
        <div>
            <label>Price</label>
            <input type="text" name ="price" placeholder="Price" value="{{$product->price}}">
        </div>
        <div>
            <label>Description</label>
            <input type="text" name ="description" placeholder="Description" value="{{$product->description}}">
        </div>
        <div>
            <input type="submit" value="Update">
        </div>
    </form>
</body>
</html>