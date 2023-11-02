<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BookingComponent extends Component
{
    public $category = 1, $start_date = '', $end_date = '', $room_number = 1;

    public function updatedCategory(?int $value)
    {
        return dd($value);
    }
    public function render()
    {
        return view('livewire.booking-component', ['categorias' => \App\Category::all()]);
    }
}
