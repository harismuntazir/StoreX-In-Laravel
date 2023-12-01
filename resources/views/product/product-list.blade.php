@extends('app')

@section('content')
    <div class="container">
        <h1 class="subtitle is-3">All Product List Available - StoreX</h1>

        @include('tools.search-bar')

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Sell Price</th>
                <th>Quantity</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>
                        <a href="{{ route('products.product', $product->id) }}">
                            {{ $product->product_name }}
                        </a>
                    </td>
                    <td>{{ $product->product_sell_price }}</td>
                    <td>{{ $product->product_quantity }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No products found.</td>
                </tr>
            @endforelse
            </tbody>
        </table>

        {{-- Pagination Links --}}
        @if($products->hasPages())
            <div class="pagination-wrapper">
                {{ $products->links('vendor.pagination.default') }}
            </div>
        @endif

    </div>
@endsection
