@extends('layouts.user')

@section('main')
    <div class="text-center">
        <h1>user >  show 使用者資料</h1>
        <div>
            <h2>{{ $user->name }}</h2>
            <p>{{ $user->email }}</p>
        </div>
        <div class='flex justify-center mt-4'>
            <a href="{{ route('user.edit' , $user) }}" class='px-2 py-1 bg-cyan-800 rounded text-zinc-100 mr-2'>編輯</a>
            <a href="{{ route('user.index') }}" class='mr-2 px-2 py-1  bg-cyan-800 rounded text-zinc-100'>回首頁</a>
            <a href="{{ route('loginout')}}" lass="px-2 py-1 bg-red-600 text-zinc-100 rounded">登出</a>

            {{-- <form action="{{ route('user.destroy' , $user) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="px-2 py-1 bg-red-600 text-zinc-100 rounded">刪除</button>
            </form> --}}
        </div>
    </div>
@endsection