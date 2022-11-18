<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SelectSubscription extends Component
{
    public $selectedSubscription;
    public $subscriptions;

    public function render()
    {
        return view('livewire.select-subscription');
    }
}
