<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Messages;

class Contact extends Component
{

    public $username;
    public $email;
    public $phone;
    public $msg;

    public function updated($fields) {
      $this->validateOnly($fields, [
        'username' => 'required',
        'email' => 'required|email',
        'phone' => 'required|max:30',
        'msg' => 'required|min:20'
      ]);
    }

    public function store() {
      $this->validate([
        'username' => 'required',
        'email' => 'required|email',
        'phone' => 'required|max:30',
        'msg' => 'required|min:20'
      ]);

      $message = Messages::insert([
        'username' => $this->username,
        'email' => $this->email,
        'phone' => $this->phone,
        'msg' => $this->msg
      ]);

      if ($message)
        {
            return back()->with('success','Message was Sent :)');
        }
        return back()->with('error','Something went Wrong :( !!!');

      // dd($this->username,$this->email,$this->phone,$this->msg);
    }

    public function render()
    {
        $data['messages'] = Messages::all();
        return view('livewire.contact', compact('data'));
    }
}
