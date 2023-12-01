@extends('app')

@section('content')
    <div class="container">
        <div class=" mt-5">
            <div class="button">
                <a href="{{ route('profile.edit') }}">
                    Update Profile
                </a>
            </div>

            <div class="button">
                <a href="#">
                    Coming Soon
                </a>
            </div>

            <div class="button">
                <a href="#">
                    Edit Any Product
                </a>
            </div>

        </div>

        <div class=" mt-5">
            <div class="button">
                <a href="{{ route('products.create') }}">
                    Add New Product
                </a>
            </div>

            <div class="button">
                <a href="{{ route('products.list') }}">
                    View All Products
                </a>
            </div>

            <div class="button">
                <a href="#">
                    Edit Any Product
                </a>
            </div>

        </div>
    </div>
@endsection
