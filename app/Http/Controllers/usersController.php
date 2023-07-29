<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class usersController extends Controller
{
    public function show(User $user){
        $user = User::find($user->id);
        return view('admin.clientDetails', compact('user'));
    }

    public function create(){
        return view('admin.addAdmin');
    }
}
