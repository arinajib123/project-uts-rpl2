<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <!-- Add Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <h1 class="text-4xl font-bold text-center mb-6">Product List</h1>

    <!-- Add Product Button -->
    <div class="mb-4 flex justify-end">
        <a href="{{ route('product.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Add Product
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded-lg shadow-md overflow-hidden">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="py-2 px-4 text-left">ID</th>
                    <th class="py-2 px-4 text-left">Name</th>
                    <th class="py-2 px-4 text-left">Qty</th>
                    <th class="py-2 px-4 text-left">Price</th>
                    <th class="py-2 px-4 text-left">Description</th>
                    <th class="py-2 px-4">Edit</th>
                    <th class="py-2 px-4">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr class="border-b">
                    <td class="py-2 px-4">{{ $product->id }}</td>
                    <td class="py-2 px-4">{{ $product->name }}</td>
                    <td class="py-2 px-4">{{ $product->qty }}</td>
                    <td class="py-2 px-4">{{ $product->price }}</td>
                    <td class="py-2 px-4">{{ $product->description }}</td>
                    <td class="py-2 px-4 text-center">
                        <a href="{{ route('product.edit', ['product' => $product]) }}" class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600">
                            Edit
                        </a>
                    </td>
                    <td class="py-2 px-4 text-center">
                        <form action="{{ route('product.destroy', ['product' => $product]) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
