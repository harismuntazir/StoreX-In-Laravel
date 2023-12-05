@extends('app')
<head>
    <title>Add New Product - StoreX</title>
</head>

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('products.store') }}">
            @csrf

            <div class="box">
                <div class="form-group">
                    <label class="label" for="product_name">Product Name:</label>
                    <input type="text" class="input is-success" id="product_name" name="product_name" required>
                </div>

                <div class="form-group">
                    <label class="label" for="product_description">Product Description:</label>
                    <textarea class="textarea is-success" id="product_description" name="product_description"></textarea>
                </div>

                <div class="form-group">
                    <label class="label" for="product_buy_price">Product Buy Price:</label>
                    <input type="number" class="input is-success" id="product_buy_price" name="product_buy_price" step="0.01">
                </div>

                <div class="form-group">
                    <label class="label" for="product_sell_price">Product Sell Price:</label>
                    <input type="number" class="input is-success" id="product_sell_price" name="product_sell_price" step="0.01">
                </div>

                <div class="form-group">
                    <label class="label" for="product_quantity">Product Quantity:</label>
                    <input type="number" class="input is-success" id="product_quantity" name="product_quantity" min="0">
                </div>

                <div class="block m-5">
                    <button type="submit" class="button is-success">Add Product</button>
                </div>
            </div>
        </form>
    </div>
@endsection
