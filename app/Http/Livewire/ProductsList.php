<?php

namespace App\Http\Livewire;

use App\Models\Stock;
use Livewire\Component;

class ProductsList extends Component
{

    public $products = [];

    public function mount()
    {

        $this->products = Stock::all();
    }

    public function render()
    {
        return view('livewire.products-list');
    }
}
