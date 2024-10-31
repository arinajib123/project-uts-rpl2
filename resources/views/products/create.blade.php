<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Product</title>
    <!-- Add Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 py-10">
    <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-center mb-6">Create a Product</h1>

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

        <!-- Create Product Form -->
        <form method="post" action="{{ route('product.store') }}">
            @csrf
            @method('post')

            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                <input type="text" name="name" placeholder="Product Name" class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:border-blue-500" />
            </div>

            <div class="mb-4">
                <label for="qty" class="block text-gray-700 font-bold mb-2">Quantity</label>
                <input type="text" name="qty" placeholder="Quantity" class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:border-blue-500" />
            </div>

            <div class="mb-4">
                <label for="price" class="block text-gray-700 font-bold mb-2">Price</label>
                <input type="text" name="price" placeholder="Price" class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:border-blue-500" />
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
                <input type="text" name="description" placeholder="Description" class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:border-blue-500" />
            </div>

            <div class="flex justify-center">
                <input type="submit" value="Submit" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 cursor-pointer" />
            </div>
        </form>
    </div>
</body>
</html>
