<?php

namespace App\Http\Livewire;

use App\Models\Employee;
use App\Models\Stock;
use Livewire\Component;

class Cart extends Component
{

    public $cart = [];
    public $employees = [];

    public function mount()
    {
        $this->cart = Stock::all();
        $this->employees = Employee::all();
    }
    public function render()
    {
        return view('livewire.cart');
    }
}
