<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User as Users;

class User extends Component
{
    use WithPagination;
    public function render()
    {
        $data['users'] = Users::paginate(10);
        return view('livewire.user', compact('data'));
    }
}
