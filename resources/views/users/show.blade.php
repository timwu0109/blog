@extends('layouts.user')

@section('main')
	<h1>user >  show 使用者資料</h1>

	<div>
		<h2>{{ $user->name }}</h2>
		<p>{{ $user->email}}</p>
	</div>

	<div>	
		<a href="{{ route('user.edit' , $user)}}">編輯</a>
		<a href="{{ route('blog.index')}}">回首頁</a>
	</div>

@endsection