<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contactform extends Component
{
    public $name;
    public $email;
    public $number;
    public $message;

    protected $rules =[
        'name' => 'required|string|min:3|max:255',
        'email' => 'required|email|min:3|max:255',
        'number' => 'required|string|min:3|max:255',
        'message' => 'required|string|min:3|max:1000'

    ];

   

   


}
