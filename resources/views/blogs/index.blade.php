@extends('layouts.blog')

@section('main')
    <h1> blog > index</h1>
    <a href="{{ route('blog.create')}}"> 新增文章</a>
@endsection