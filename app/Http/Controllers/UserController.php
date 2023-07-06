<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        return view('users.index');
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
}
