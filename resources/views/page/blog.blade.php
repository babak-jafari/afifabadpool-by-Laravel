@extends('layout')

@section('page-title','blog')

@section('content')

<h1 class="text-2xl font-bold mb-4">همه مقالات</h1>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    @foreach($articles as $article)
        <div class="p-4 border rounded shadow">
            <h2 class="text-xl font-semibold">{{ $article->title }}</h2>
            <img src="{{ asset('storage/' . $article->image) }}" class="w-full h-48 object-cover mt-2">
            <p class="mt-2 text-gray-600">{{ Str::limit($article->short_description, 100) }}</p>
            <a href="{{ route('blog.show', $article->id) }}" class="text-blue-500 mt-2 inline-block">ادامه مطلب</a>
        </div>
    @endforeach
</div>
<div class="mt-6">
    {{ $articles->links() }}
</div>

@endsection