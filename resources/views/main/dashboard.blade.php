@extends('layout')

@section('page-title','dashboard')

@section('content')



<div class="grid md:grid-cols-3 gap-4 p-3">
  @if (session('success'))
        <div id='toast' >
            {{ session('success') }}
        </div>
        @elseif (session('error'))
        <div id="toast">
            {{ session('error') }}
        </div>
        @endif 

    <a href="{{route('buyticket')}}">
        <div class="cursor-pointer bg-white rounded-xl p-6 shadow hover:shadow-lg transition">
          <h2 class="text-lg font-bold text-blue-600 mb-2">خرید بلیط</h2>
          <p class="text-sm text-gray-600">خرید بلیط برای امروز تا ۳ روز آینده</p>
        </div>
    </a>

    <div onclick="location.href='my-tickets.php'" class="cursor-pointer bg-white rounded-xl p-6 shadow hover:shadow-lg transition">
      <h2 class="text-lg font-bold text-green-600 mb-2">بلیط‌های من</h2>
      <p class="text-sm text-gray-600">مشاهده بلیط‌های فعال، مصرف شده و منقضی</p>
    </div>

    <div onclick="alert('به زودی...')" class="cursor-pointer bg-white rounded-xl p-6 shadow hover:shadow-lg transition">
      <h2 class="text-lg font-bold text-yellow-600 mb-2">تنظیمات</h2>
      <p class="text-sm text-gray-600">ویرایش مشخصات، رمز عبور و ...</p>
    </div>


  </div>

  <div class="grid gap-4 p-3">
    <form action="{{ route('logout') }}" method="POST">
      @csrf
      <button type="submit" class=" bg-red-600  text-red-200 hover:bg-red-200 hover:text-red-600 w-full p-3 rounded-lg">خروج</button>
    </form>
  </div>

  @endsection