<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //

    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function show(User $user)
    {
        return view('users.show')->with('user', $user);
    }

    public function create(User $user)
    {
        return view('users.profile')->with('user', $user);
    }

    public function update(Request $request, User $user)
    {
        if ($request->name || $request->email || $request->avatar) {
            $user->name = $request->name;
            $user->email = $request->email;
            // if ($request->hasFile($request->avatar)) {
            //     $user->avatar ='data:image/'.$request->avatar->extension().';base64,' . base64_encode(file_get_contents($request->avatar));
            // }
        } else {
            $user->text = $request->intro;
        }


        $user->save();

        return redirect()->back();
    }
}
