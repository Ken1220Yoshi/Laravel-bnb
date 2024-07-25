<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //

    private $user;

    public function __construct(User $user){
        $this->user = $user;
    }

    public function show(User $user){
        return view('users.show')->with('user', $user);
    }

    public function create(User $user){
        return view('users.profile')->with('user', $user);
    }
}
