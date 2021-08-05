<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TransactionController extends Controller
{
    protected $user;

    public function __contruct(User $user)
    {
        $this->user = $user;
    }

    public function view()
    {
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
