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
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}
