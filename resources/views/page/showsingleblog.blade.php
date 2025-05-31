@extends('layout')

@section('page-title','blog')

@section('content')

<h1 class="text-3xl font-bold mb-4">{{ $article->title }}</h1>
<img src="{{ asset('storage/' . $article->image) }}" class="w-full h-64 object-cover rounded mb-4">
<p class="text-gray-700">{{ $article->full_description }}</p>
<a href="{{ route('blog.index') }}" class="inline-block mt-4 text-blue-600">بازگشت به مقالات</a>



@endsection