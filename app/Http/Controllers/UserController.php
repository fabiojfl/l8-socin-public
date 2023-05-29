<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    protected $user;

    public function __construtct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        return view('users.index');
    }
}
