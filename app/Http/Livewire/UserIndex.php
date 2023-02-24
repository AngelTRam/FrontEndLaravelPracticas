<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class UserIndex extends Component
{
    public function render()
    {   
        $response = Http::get('http://127.0.0.1:8000/api/usuarios');
        $usuarios = $response->json();
        return view('livewire.user-index',compact('usuarios'));
    }

}
