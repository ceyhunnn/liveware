<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Dblog as Dblogs;

class Dblog extends Component
{
    public $title;
    public $photo;
    public $content;

    use WithFileUploads;

    public function dblogadd(){
      $validate = $this->validate([
        'title' => 'required',
        'photo' => 'required',
        'content' => 'required|min:30',
      ]);

      $photo = $this->photo->store('images/dblogs', 'public');
      $validate['photo'] =$photo;

      Dblogs::create($validate);
      session()->flash('message', 'Dblog Added :)');
      $this->emit('dblogAdded');

    }

    public function render()
    {
        return view('livewire.dblog');
    }
}
