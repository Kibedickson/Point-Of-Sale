<x-app-layout>
    <div class="h-screen flex flex-col">
        <x-navigation></x-navigation>
        <div class="flex flex-1">
            @livewire('running-orders')
            @livewire('cart')
            @livewire('products-list')
        </div>
    </div>
</x-app-layout>
