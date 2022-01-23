<div class="w-2/5 shadow-xl overflow-y-auto">
    <div class="h-full flex flex-col bg-gray-50 rounded-md">
        <div class="flex-1 py-6 overflow-y-auto px-4 sm:px-6">
            <div class="flex items-start justify-between">
                <h2 class="text-2xl font-medium text-gray-900" id="slide-over-title">
                    Cart
                </h2>
                <div class="ml-3 h-7 flex items-center">
                    <button type="button" class="-m-2 p-2 text-gray-400 hover:text-gray-500" data-tooltip="Empty Cart">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="mt-4 flex justify-between">
                <select class="pr-4 focus:ring-indigo-500 focus:border-indigo-500 block px-4 sm:text-sm border-gray-300 rounded-md">
                    <option value="" selected disabled>Waiter</option>
                    @foreach($employees as $employee)
                        <option wire:key="{{ $employee->id }}" class="pb-4 text-gray-800 font-medium text-base border-bg-red-500" value="{{ $employee->id }}">{{ $employee->name }}</option>
                    @endforeach
                </select>
                <select class="pl-4 focus:ring-indigo-500 focus:border-indigo-500 block px-4 sm:text-sm border-gray-300 rounded-md">
                    <option value="" selected disabled>Customer</option>
                    @foreach($employees as $employee)
                        <option wire:key="{{ $employee->id }}" class="pb-4 text-gray-800 font-medium text-base border-bg-red-500" value="{{ $employee->id }}">{{ $employee->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mt-8">
                <div class="flow-root">
                    <div class="-my-6 divide-y divide-gray-200">
                        @foreach($cart as $item)
                            <div class="py-6 flex">
                                <div class="flex-shrink-0 w-24 h-24 border border-gray-200 rounded-md overflow-hidden">
                                    <img src="{{ $item->media }}"
                                         alt="{{ $item->description }}"
                                         class="w-full h-full object-center object-cover">
                                </div>

                                <div class="ml-4 flex-1 flex flex-col">
                                    <div>
                                        <div class="flex justify-between text-base font-medium text-gray-900">
                                            <h3>
                                                {{ $item->name }}
                                            </h3>
                                            <p class="ml-4">
                                                ${{ $item->price }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex-1 flex items-end justify-between text-sm">
                                        <div class="flex space-x-4">
                                            <div class="text-gray-700 text-base font-medium">
                                                <h3>Qty: {{ $item->id }}</h3>
                                            </div>
                                            <span class="hover:cursor-pointer hover:ring-2 hover:ring-indigo-500 rounded-full p-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                     viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M12 4v16m8-8H4"/>
                                                </svg>
                                            </span>
                                            <span class="hover:cursor-pointer hover:ring-2 hover:ring-indigo-500 rounded-full p-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                     viewBox="0 0 24 24" stroke="currentColor">
                                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M20 12H4"/>
                                                </svg>
                                            </span>
                                        </div>

                                        <div class="flex">
                                            <div class="font-medium text-base text-red-500 hover:text-red-600 hover:ring-2 hover:ring-red-300 p-1 rounded-md">
                                                Remove
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="border-t border-gray-200 py-6 px-4 sm:px-6 space-y-3">
            <div class="flex justify-between text-base font-medium text-gray-900">
                <p>Discount</p>
                <input class="focus:ring-indigo-500 focus:border-indigo-500 block px-4 sm:text-sm border-gray-300 rounded-md"
                       type="number">
            </div>
            <div class="flex justify-between text-base font-medium text-gray-900">
                <p>Subtotal</p>
                <p>$262.00</p>
            </div>
            <div class="mt-6">
                <div class="flex justify-center items-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 hover:cursor-pointer">
                    Place
                    Order
                </div>
            </div>
        </div>
    </div>
</div>