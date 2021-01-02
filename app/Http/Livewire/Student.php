<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Student as Students;

class Student extends Component
{
    public $name;
    public $email;
    public $phone;
    public $search;

    public function resetInputFields() {
      $this->name = '';
      $this->email = '';
      $this->phone = '';
    }

    public function store(){
      $validate = $this->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required|max:30',
      ]);

      Students::create($validate);
      session()->flash('message', 'Student Added :)');
      $this->resetInputFields();
      $this->emit('studentAdded');


    }

    public function delete($id) {
      if ($id) {
        Students::where('id', $id)->delete();
        session()->flash('message', 'Student Deleted :)');
        $this->emit('studentDelete');
      }
    }

    use WithPagination;

    public function render()
    {
        $search = '%'.$this->search . '%';
        $data['students'] = Students::where('name', 'LIKE', $search)
                                      ->orWhere('email', 'LIKE', $search)
                                      ->orWhere('phone', 'LIKE', $search)
                                      ->orderBy('id', 'desc')->paginate(15);
        return view('livewire.student', compact('data'));
    }
}
