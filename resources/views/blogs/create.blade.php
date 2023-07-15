@extends('layouts.blog')

@section('main')
    <h1> blog > create</h1>
    <form action="{{ route('blog.store') }}" method="post" class="">
        @csrf
        <div>
            <label for='title'> 標題：</label>
            <input type="text" name='title' class="border border-pink-300">
        </div>
        <div>
            <label for='content'> 內文：</label>
            <textarea name="content" cols="30" rows="10" class="border border-pink-300"></textarea>
        </div>
    
        <div>
            <button type='submit'>建立文章</button>
        </div>
    </form>
@endsection