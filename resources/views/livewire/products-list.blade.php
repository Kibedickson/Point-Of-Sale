<div class="w-3/5 shadow-xl overflow-y-auto">
    <div class="max-w-2xl mx-auto py-6 px-6 lg:max-w-7xl lg:px-8 bg-gray-50 rounded-md space-y-8">
        <div class="flex justify-between text-center">
            <div class="text-2xl">Products</div>
            <input class="focus:ring-indigo-500 focus:border-indigo-500 block px-4 sm:text-sm border-gray-300 rounded-md"
                   type="text" placeholder="Search...">
        </div>

        <div class="grid grid-cols-1 gap-y-10 gap-x-6 lg:grid-cols-4">
            @foreach($products as $product)

                <div class="group shadow-md hover:cursor-pointer">
                    <div class="w-full aspect-w-1 aspect-h-1 bg-gray-500 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
                        <img src="{{ $product->media }}"
                             alt="{{ $product->description }}"
                             class="w-full h-full object-center object-cover group-hover:opacity-75">
                    </div>
                    <h3 class="mt-4 mb-2 ml-2 text-sm text-gray-700">
                        {{ $product->name }}
                    </h3>
                    <p class="mt-1 mb-2 ml-2 text-lg font-medium text-gray-900">
                        {{ $product->price }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</div>