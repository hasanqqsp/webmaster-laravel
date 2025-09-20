@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Products</h1>
    <a href="{{ url('/admin/products/create') }}" class="mb-4 inline-block bg-blue-500 text-white px-4 py-2 rounded">Add New Product</a>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded-lg shadow">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 border-b">ID</th>
                    <th class="px-4 py-2 border-b">Image</th>
                    <th class="px-4 py-2 border-b">Title</th>
                    <th class="px-4 py-2 border-b">Price</th>
                    <th class="px-4 py-2 border-b">Description</th>
                    <th class="px-4 py-2 border-b">Category</th>
                    <th class="px-4 py-2 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2 border-b">{{ $product->id }}</td>
                    <td class="px-4 py-2 border-b">
                        @if($product->imageUrl)
                            <img src="{{ $product->imageUrl }}" alt="{{ $product->title }}" class="h-12 w-12 object-cover rounded">
                        @else
                            <span class="text-gray-400">No Image</span>
                        @endif
                    </td>
                    <td class="px-4 py-2 border-b">{{ $product->title }}</td>
                    <td class="px-4 py-2 border-b">${{ number_format($product->price, 2) }}</td>
                    <td class="px-4 py-2 border-b">{{ $product->description }}</td>
                    <td class="px-4 py-2 border-b">{{ $product->category->name ?? 'N/A' }}</td>
                    <td class="px-4 py-2 border-b">
                        <a href="{{ url('/admin/products/' . $product->id . '/edit') }}" class="inline-block bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded mr-2">Edit</a>
                        <form action="{{ url('/admin/products/' . $product->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this product?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection