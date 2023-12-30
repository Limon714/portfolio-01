<?php

namespace App\Livewire\Admin;

use App\Models\Home;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $data = Home::get();
        return view('livewire.admin.dashboard',[
            'data'=>$data
           ]);
    }

  
}
