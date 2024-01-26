@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1>Product List</h1>

        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addProductModal">
            Add Product
        </button>

        <table class="table" id="productsTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>
                            <button type="button" class="btn btn-info" data-toggle="modal"
                                data-target="#viewProductModal{{ $product->id }}">
                                View
                            </button>
                        </td>
                    </tr>

                    @include('admin.products.partials.view_modal', ['product' => $product])
                @endforeach
            </tbody>
        </table>

        @include('admin.products.partials.add_modal')

    </div>
@endsection
