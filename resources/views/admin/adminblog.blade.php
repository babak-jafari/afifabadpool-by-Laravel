@extends('layout')

@section('page-title','adminblog')

@section('content')



{{-- <a href="{{ route('admin.articles.create') }}">افزودن مقاله جدید</a> --}}


{{-- <h1 class="text-2xl font-bold mb-4">مدیریت مقالات</h1>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6"> --}}
{{-- @foreach($articles as $article) --}}


    {{-- <div class="p-4 border rounded shadow">
        <h2 class="text-xl font-semibold">{{ $article->title }}</h2>
            <img src="{{ asset('storage/' . $article->image) }}" class="w-full h-48 object-cover mt-2">
            <p class="mt-2 text-gray-600">{{ Str::limit($article->short_description, 100) }}</p>
            <a href="{{ route('blog.show', $article->id) }}" class="text-blue-500 mt-2 inline-block">ادامه مطلب</a>

        <a href="{{ route('admin.articles.edit', $article->id) }}">ویرایش</a>
        <form action="{{ route('admin.articles.destroy', $article->id) }}" method="POST" onsubmit="return confirm('حذف شود؟')">
            @csrf
            @method('DELETE')
            <button type="submit">حذف</button>
        </form>
    </div> --}}
{{-- @endforeach --}}
<h1 class="text-2xl font-bold p-4 text-center">مدیریت مقالات</h1>

<div class="px-5">
    <button class="bg-blue-600 text-white w-full p-2 rounded-2xl flex justify-center items-center  gap-1"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
      </svg>
      <a href="{{ route('admin.articles.create') }}">افزودن مقاله جدید</a> </button>
</div>

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
                <div class="flex gap-3">
                    <a href="{{ route('admin.articles.edit', $article->id) }}" class="text-blue-500 mt-2 inline-block">ویرایش</a>
                    <form action="{{ route('admin.articles.destroy', $article->id) }}" method="POST" onsubmit="return confirm('حذف شود؟')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-blue-500 mt-2 inline-block cursor-pointer">حذف</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
</div>
<div class="flex flex-col items-center justify-center m-6 gap-2">
    {{ $articles->links() }}
</div>



@endsection
