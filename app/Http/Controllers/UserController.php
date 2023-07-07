<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        
        return view('users.index'  , ['users' => $users]);
    }

    public function create() {
        return view('users.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:10',
        ]);


        $data['password'] = Hash::make($data['password']);

        User::create($data);
        
        return redirect()->route('user.index')->with('notice' , '註冊成功');
    }
    public function show($id) {
        $user = User::find($id);

        return view('users.show' , ['user' => $user]);
    }

    public function edit() {
        return view('users.edit');
    }
}