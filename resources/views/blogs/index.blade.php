@extends('layouts.blog')

@section('main')
    <h1> blog > index</h1>
    <a href="{{ route('blog.create')}}"> 新增文章</a>

    @foreach ($blogs as $blog)
        <div class='bg-red-300 mt-6'>
            <a href="{{ route('blog.show' , $blog )}}" class='border border-bottom border-stone-700'>{{ $blog->title }}</a>
            <p>{{ $blog->content }}</p>
            <span>作者：{{ $blog->user->name }} 文章建立時間：{{ $blog->created_at }}</span>
        </div>
    @endforeach
@endsection