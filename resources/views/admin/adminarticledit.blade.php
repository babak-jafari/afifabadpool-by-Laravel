@extends('layout')

@section('page-title','adminupdate')

@section('content')




<div class="p-10 flex flex-col items-center justify-center w-full">
    <h2 class="text-2xl font-semibold mb-4 text-center text-gray-800">ویرایش مطالب</h2>
    <form action="{{ route('admin.articles.update', $article->id) }}" method="POST" enctype="multipart/form-data" class="flex flex-col justify-center items-center w-full">
        @method('put')
        @if (session('success'))
        <div id='toast' >
            {{ session('success') }}
        </div>
    @elseif (session('error'))
        <div id="toast">
            {{ session('error') }}
        </div>
    @endif 
    @csrf
        <input  type="text" name="title" placeholder="عنوان" value="{{ $article->title }}" class="w-full lg:w-1/2 caret-text-gray-600 focus:outline-none border-0 bg-gray-200 placeholder:text-gray-600   p-2 rounded-4xl mb-3" />
        <input  type="text" name="short_description" placeholder="توضیح کوتاه" value="{{ $article->short_description }}" class="w-full lg:w-1/2 caret-text-gray-600 focus:outline-none border-0 bg-gray-200 placeholder:text-gray-600    p-2 rounded-4xl mb-3" />
        <textarea  name="full_description" placeholder="متن کامل"  class="w-full lg:w-1/2 caret-text-gray-600 focus:outline-none border-0 bg-gray-200 placeholder:text-gray-600    p-2 rounded-4xl mb-3" >{{ $article->full_description }}</textarea>
        @if($article->image)
        <img src="{{ asset('storage/'.$article->image) }}" width="100"><br>
        @endif
        <input type="file" name="image" class="w-screen  lg:w-1/2 p-3 rounded-3xl bg-white border border-gray-300 hover:border-blue-500 transition-colors cursor-pointer text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-400"><br>
        <button type="submit" class="w-full lg:w-1/2 bg-[#0675ff] text-white  p-2 rounded-4xl ">ویرایش</button>

    </form> 
    
</div>
@endsection
