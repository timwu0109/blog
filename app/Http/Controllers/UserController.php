<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('create','store'); 
    }

    public function create() 
    {
        return view('users.create');
    }

    public function store(Request $request) 
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', Rule::unique('users')],
            'password' => 'required|min:10',
        ]);

        $data['password'] = Hash::make($data['password']);

        User::create($data);
        
        return redirect()->route('login')->with('notice' , '註冊成功');
    }
    public function show($id) 
    {
        $user = auth()->user();
    
        return view('users.show' , ['user' => $user]);
    }

    public function edit($id) 
    {
        $user = User::find($id);

        return view('users.edit' , [ 'user' => $user]);
    }

    public function update(Request $request , $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        User::find($id)->update($data);

        return redirect()->route('user.show' , $id)->with('notice' , '修改成功');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('user.index')->with('notice' , '刪除成功'); 
    }
}