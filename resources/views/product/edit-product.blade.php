@extends('app')

@section('content')
    <div class="container">
        <h1 class="subtitle is-3">Editing {{ $product->product_name }} - StoreX</h1>

        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="box">
                <div class="form-group">
                    <label class="label" for="product_name">Product Name:</label>
                    <input type="text" class="input is-success" id="product_name" name="product_name" value="{{ $product->product_name }}" required>
                </div>

                <div class="form-group">
                    <label class="label" for="product_description">Product Description:</label>
                    <textarea class="textarea is-success" id="product_description" name="product_description">{{ $product->product_description }}</textarea>
                </div>

                <div class="form-group">
                    <label class="label" for="product_buy_price">Product Buy Price:</label>
                    <input type="number" class="input is-success" id="product_buy_price" name="product_buy_price" value="{{ $product->product_buy_price }}" step="0.01">
                </div>

                <div class="form-group">
                    <label class="label" for="product_sell_price">Product Sell Price:</label>
                    <input type="number" class="input is-success" id="product_sell_price" name="product_sell_price" value="{{ $product->product_sell_price }}" step="0.01">
                </div>

                <div class="form-group">
                    <label class="label" for="product_quantity">Product Quantity:</label>
                    <input type="number" class="input is-success" id="product_quantity" name="product_quantity" value="{{ $product->product_quantity }}" min="0">
                </div>

                <button type="submit" class="button is-primary m-5">Update Product</button>
            </div>
        </form>
    </div>
@endsection
