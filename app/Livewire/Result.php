<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Attributes\Url;
use Livewire\Component;

class Result extends Component
{
    #[Url]
    public $order_id = null;
    public $order = [];

    public function mount()
    {
        $this->order = Order::with('payments', 'shippings')
            ->findOrFail($this->order_id);
    }

    public function render()
    {
        return view('livewire.result');
    }
}
