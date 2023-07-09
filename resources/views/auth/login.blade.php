@extends('layouts.auth')

@section('main')
    <div class="text-center">
        <h1 class="text-3xl"> 會員登入頁面 </h1>
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div>
                <label for="email">帳號 :</label>
                <input type="email" name="email" class="border border-y-gray-600">
            </div>
            <div>
                <label for="password">密碼 :</label>
                <input type="password" name="password" class="border border-y-gray-600">
            </div>
            <div>
                <button type="submit" class="bg-pink-600 text-slate-100 px-2 py-1 rounded">登入</button>
            </div>
        </form>
    </div>
@endsection