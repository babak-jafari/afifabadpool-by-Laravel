@extends('layout')

@section('page-title','adminblog')

@section('content')

<a href="{{ route('admin.articles.create') }}">افزودن مقاله جدید</a>

@foreach($articles as $article)
    <div>
        <h2>{{ $article->title }}</h2>
        <p>{{ $article->short_description }}</p>
        <a href="{{ route('admin.articles.edit', $article->id) }}">ویرایش</a>
        <form action="{{ route('admin.articles.destroy', $article->id) }}" method="POST" onsubmit="return confirm('حذف شود؟')">
            @csrf
            @method('DELETE')
            <button type="submit">حذف</button>
        </form>
    </div>
@endforeach

@endsection
