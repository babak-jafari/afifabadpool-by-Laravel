@extends('layout')

@section('page-title','blog')

@section('content')

<h1 class="text-2xl font-bold mb-4 text-center p-4">همه مقالات</h1>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 p-4">
    @foreach ($articles as $article)
        <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
            <div class="w-full h-48">
                <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}"
                     class="w-full h-full object-cover">
            </div>
            <div class="p-4">
                <h2 class="text-xl font-semibold text-gray-800">{{ $article->title }}</h2>
                <p class="mt-2 text-gray-600 text-sm leading-relaxed">
                    {{ Str::limit($article->short_description, 100) }}
                </p>
                <a href="{{ route('blog.show', $article->id) }}" class="text-blue-500 mt-2 inline-block">ادامه مطلب</a>

            </div>
        </div>
    @endforeach
</div>
</div>
<div class="flex flex-col items-center justify-center m-6 gap-2">
    {{ $articles->links() }}
</div>


@endsection