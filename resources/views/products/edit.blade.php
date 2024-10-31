<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <!-- Add Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-100 to-gray-300 py-10">
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-4xl font-bold text-center text-blue-600 mb-6">Edit Product</h1>

        <!-- Error Handling -->
        @if($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Edit Product Form -->
        <form method="post" action="{{ route('product.update', ['product' => $product]) }}">
            @csrf
            @method('put')

            <!-- Product Name -->
            <div class="mb-6">
                <label for="name" class="block text-gray-800 font-semibold mb-2">Product Name</label>
                <input type="text" name="name" placeholder="Product Name" value="{{ $product->name }}" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <!-- Quantity -->
            <div class="mb-6">
                <label for="qty" class="block text-gray-800 font-semibold mb-2">Quantity</label>
                <input type="number" name="qty" placeholder="Quantity" value="{{ $product->qty }}" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <!-- Price -->
            <div class="mb-6">
                <label for="price" class="block text-gray-800 font-semibold mb-2">Price</label>
                <input type="text" name="price" placeholder="Price" value="{{ $product->price }}" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <!-- Description -->
            <div class="mb-6">
                <label for="description" class="block text-gray-800 font-semibold mb-2">Description</label>
                <textarea name="description" placeholder="Description" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">{{ $product->description }}</textarea>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center">
                <input type="submit" value="Update" class="bg-blue-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-600 transition duration-300 cursor-pointer" />
            </div>
        </form>
    </div>
</body>
</html>
