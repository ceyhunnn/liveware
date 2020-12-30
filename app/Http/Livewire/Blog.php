<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Blog extends Component
{
    public $name;
    public $message;
    public $status;
    public $colors=[];
    public $company;

    public function render()
    {
        return view('livewire.blog');
    }
}
