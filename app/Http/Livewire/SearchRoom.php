<?php

namespace App\Http\Livewire;

use App\Room;
use Livewire\Component;

class SearchRoom extends Component
{
    public $start_date, $end_date, $room_number, $capacity;
    protected $queryString = ['start_date', 'end_date', 'capacity', 'room_number'];

    public $rooms;

    public function __construct() {
        $this->capacity = request()->input('capacity');
        $this->room_number = request()->input('room-number');
        $this->start_date = request()->input('start-date');
        $this->end_date = request()->input('end-date');
    }

    public function mounted(){
        $this->rooms = Room::where('capacity', $this->capacity);
        // ->where()
    }

    public function render()
    {
        return view('livewire.search-room')->layout('layouts.public')->section('contenido');
    }
}
