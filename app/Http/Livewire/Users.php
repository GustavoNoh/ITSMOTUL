<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;

    public $mensaje="este mensaje es de un componente";
    //public $users, $detallesUser;
    public $detallesUser;

    public function mount()
    {
        //$this->users=User::all();
        $this->mensaje = 'este mensaje es del mount';
    }

    public function render()
    {
        //return view('livewire.users');
        return view('livewire.users', [
            'users' => User::paginate(10),
        ]);
    }

    public function show($id)
    {
        $this->mensaje="pulsaste ver detalles de $id";
        $this->detallesUser=User::find($id);
    }

    public function update($id)
    {
        $this->mensaje="pulsaste update de $id";
        
    }
}