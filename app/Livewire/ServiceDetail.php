<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class ServiceDetail extends Component
{
    public $service;
    public function mount($slug)
    {
        $this->service = Service::where('slug', $slug)->first();
    }
    public function render()
    {
        $service = $this->service;
        return view('livewire.service-detail', compact('service'));
    }
}
