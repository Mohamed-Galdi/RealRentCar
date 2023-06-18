<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class usersController extends Controller
{
    public function destroy(User $user){
        $user = User::find($user->id);
        $user->delete();
        return redirect()->route('users');
    }

    public function create(){
        return view('admin.addAdmin');
    }
}
