<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
</head>
<body>
    <h1>Product</h1> 

    @if(session()->has('success'))
    <div>
        {{session('success')}}
    </div>
    @endif
    <div>
        <div>
            <a href="{{route('product.create')}}">Add new product</a>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Description</th>
                <!-- this line is for edit -->
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->qty}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->description}}</td>
                <!-- edit link -->
                <td>
                    <a href="{{route('product.edit',['product'=>$product])}}">Edit</a>
                </td>
                <td>
                    <form method = "post" action="{{route('product.destroy',['product' =>$product])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete"/>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>