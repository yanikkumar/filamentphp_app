<?php

namespace App\Livewire;

use App\Models\Service as ModelService;
use Livewire\Component;

class Service extends Component
{
    public function render()
    {
        $services = ModelService::orderBy('title')->get();

        return view('livewire.service', compact('services'));
    }
}
