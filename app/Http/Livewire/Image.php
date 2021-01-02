<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Image as Images;
use Livewire\WithFileUploads;

class Image extends Component
{
    public $photos =[];

    use WithFileUploads;

    public function uploadImage() {
      foreach ($this->photos as $key => $photo) {
        $this->photos[$key] = $photo->store('images/multiple', 'public');
      }
      $this->photos = json_encode($this->photos);
      Images::create(['photos'=>$this->photos]);
      session()->flash('message', 'Photos Added :)');
      $this->emit('imagesAdded');

    }

    public function render()
    {
        return view('livewire.image');
    }
}
