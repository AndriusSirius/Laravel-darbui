<?php

namespace App\Http\Livewire;

use App\Models\Role;
use App\Models\User;
use Livewire\Component;

class ShowUsers extends Component
{
    public $showit;

    public $role;

    public $edit;

    public $Firstname, $Lastname, $phonenumber, $email, $address, $role_id;


    protected function rules()
    {
        return [
            'Firstname' => 'min:1',
            'Lastname' => 'min:1',
            'phonenumber' => 'min:1',
            'email' => 'min:1',
            'address' => 'min:1',
            'role_id' => 'min:1',
        ];
    }


    public function mount()
    {
        $this->edit = false;
        $this->delete = false;
        $this->Firstname = $this->showit->Firstname;
        $this->Lastname = $this->showit->Lastname;
        $this->phonenumber= $this->showit->phonenumber;
        $this->email = $this->showit->email;
        $this->address = $this->showit->address;
        $this->role_id = $this->showit->role_id;

        $this->role = Role::with(['user'])->get();

    }

    public function showEdit()
    {
        $this->edit = true;
    }

    public function hideEdit()
    {
        $this->edit = false;
    }

    public function saveChanges()
    {

        $this->validate();

        $this->showit->Firstname = $this->Firstname;
        $this->showit->Lastname = $this->Lastname;
        $this->showit->phonenumber = $this->phonenumber;
        $this->showit->email = $this->email;
        $this->showit->address = $this->address;
        $this->showit->role_id = $this->role_id;



        $this->showit->save();

    }

    public function render()
    {

        return view('livewire.show-users');
    }
}
