<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Dashboard extends Component
{
    public function render()
    {
    	$users = User::all();
        return view('livewire.dashboard', ['users' => $users]);
    }
}
