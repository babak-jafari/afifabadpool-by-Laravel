@extends('layout')

@section('page-title','blog')

@section('content')

{{-- <h1 class="text-3xl font-bold mb-4">{{ $article->title }}</h1>
<img src="{{ asset('storage/' . $article->image) }}" class="w-full h-64 object-cover rounded mb-4">
<p class="text-gray-700">{{ $article->full_description }}</p>
<a href="{{ route('blog.index') }}" class="inline-block mt-4 text-blue-600">بازگشت به مقالات</a> --}}

{{-- <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-md p-6 mt-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">{{ $article->title }}</h1>
    
    <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}"
         class="w-full h-72 object-cover rounded-xl mb-6">
    
    <p class="text-gray-700 leading-relaxed text-[15px]">{{ $article->full_description }}</p>
    
    <a href="{{ route('blog.index') }}"
       class="inline-block mt-6 text-blue-600 hover:underline text-sm font-medium">
        ← بازگشت به مقالات
    </a>
</div> --}}

<div class="flex justify-center items-center">
    <div class="max-w-3xl m-5 border border-gray-200 rounded-xl bg-gray-50 p-6 ">
        <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}"
             class="w-full h-80 object-cover rounded-md mb-6 shadow-sm">
        
        <h1 class="text-4xl font-extrabold text-gray-900 leading-snug mb-4">
            {{ $article->title }}
        </h1>
    
        <p class="text-gray-800 text-base leading-loose tracking-wide">
            {{ $article->full_description }}
        </p>
    
        <div class="mt-8">
            <a href="{{ route('blog.index') }}"
               class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium transition-colors duration-200">
                ← بازگشت به مقالات
            </a>
        </div>
    </div>
</div>





@endsection