@extends('layouts.user')

@section('main')
    <div class="text-center">
		<div class="text-center">
			<h1 class="title text-3xl">user > edit</h1>
		</div>
		@if($errors->any())
			<div>
				<ul>
					@foreach ($errors->all() as $error)
						<li class="bg-red-600 text-red-100">
							{{ $error }}
						</li>
					@endforeach
				</ul>
			</div>
		@endif
		
		<form action="{{ route('user.update' , $user) }}" method="post" class="text-center">
			@csrf
			@method('patch')
			<div>
				<label for="name">姓名：</label>
				<input type="text" name="name" class="border border-y-gray-600" value="{{ $user->name }}">
			</div>
			<div>
				<label for="email">信箱：</label>
				<input type="email" name="email" value="{{ $user->email }}" class="border border-y-gray-600">
			</div>
			<div>
				<button type="submit" class="bg-pink-600 text-slate-100 px-2 py-1 rounded">送出</button>
			</div>
		</form>
	</div>
@endsection