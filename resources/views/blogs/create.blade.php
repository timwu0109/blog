@extends('layouts.blog')

@section('main')
    <h1> blog > create</h1>
    <form action="{{ route('blog.store') }}" method="post">
        @csrf
        <div>
            <label for=""></label>
            <input type="text" name=>
        </div>
    
    
    </form>
@endsection