<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Post extends Component
{
    public $num1;
    public $num2;
    public $sum;
    public $message;

    public function sum() {
      $this->sum = $this->num1 + $this->num2;
    }

    public function message($msg) {
      $this->message = $msg;
    }

    public function render()
    {
        return view('livewire.post');
    }
}
