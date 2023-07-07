@extends('layouts.user')


@section('main')
	<div class="text-center">
		<h1 class="title text-3xl">user > index</h1>
		<a href="{{ route('user.create')}}">註冊</a>
	</div>

	<div>
		@foreach ($users as $user)
			<a href="{{ route('user.show' , $user)}}">{{ $user->name }}</a>

			<p>{{ $user->email}}</p>
		@endforeach
	</div>
@endsection



