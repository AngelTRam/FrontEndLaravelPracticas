<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Contador extends Component
{
    public $data=[
        
    ];

    public function render()
    {
        $response = Http::get('http://127.0.0.1:8000/api/lugares');
        $lugares = $response->json();
        return view('livewire.contador', compact('lugares'));
    }

    public function guardar()
    {
        $response = Http::withHeaders(['Accept'=>'application/json'])
        ->post('http://127.0.0.1:8000/api/lugares',$this->data);
        if($response->successful()){
            dd('Si se hizo compare');
        }else{
            dd($this->data);
        }
    }
    /* public $aviso;
    public $valor = 0;
    public $nombre;
    public function render()
    {
        $response = Http::get('http://127.0.0.1:8000/api/lugares');
        $lugares = $response->json();
        return view('livewire.contador',compact('lugares'));
    }

    public function add()
    {
        $this->valor++;
        $this->aviso = "";
    }

    public function substract()
    {
        if ($this->valor <= 0) {
            $this->aviso = "No se pueden tener numeros negativos";
        } else {
            $this->valor--;
            $this->aviso = "";
        }
    } */
}
