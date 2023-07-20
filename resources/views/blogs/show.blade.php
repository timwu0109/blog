@extends('layouts.blog')


@section('main')
    <div>
        <h1>{{ $blog->title }}</h1>
        <p>{{ $blog->content }}</p>

        <a href="{{ route('blog.index') }}">回首頁</a>
    </div>
@endsection