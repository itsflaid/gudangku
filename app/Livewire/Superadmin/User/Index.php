<?php

namespace App\Livewire\Superadmin\User;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $data = array(
            'user'=> User::orderBy('role', 'asc')->paginate(10),

        );
        return view('livewire.superadmin.user.index', $data);
    }
}
