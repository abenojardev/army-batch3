<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TransactionController extends Controller
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function view()
    {
        return dd( 
            $this->user->all()
        );
    }

    public function create()
    { 
        return dd(  
            $this->user->create([
                'name' => 'Juan Dela Cruz',
                'email' => 'juan.delacruz@gmail.com'
            ])
        ); 
    }

    public function update()
    {
        $find = $this->user->find(1);

        $find->update([
            'name' => 'John Jhon',
            'email' => 'john@gmail.com'
        ]);
    }

    public function delete()
    {
        $find = $this->user->find(1);

        $find->delete();
    }
}
