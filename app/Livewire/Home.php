<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $services = Service::orderBy('title')->get();
        return view('livewire.home', compact('services'));
    }
}
