@extends('layout')

@section('page-title','dashboard')

@section('content')

<div class="grid md:grid-cols-3 gap-4">

    <div onclick="location.href='ticket-form.php'" class="cursor-pointer bg-white rounded-xl p-6 shadow hover:shadow-lg transition">
      <h2 class="text-lg font-bold text-blue-600 mb-2">خرید بلیط</h2>
      <p class="text-sm text-gray-600">خرید بلیط برای امروز تا ۳ روز آینده</p>
    </div>

    <div onclick="location.href='my-tickets.php'" class="cursor-pointer bg-white rounded-xl p-6 shadow hover:shadow-lg transition">
      <h2 class="text-lg font-bold text-green-600 mb-2">بلیط‌های من</h2>
      <p class="text-sm text-gray-600">مشاهده بلیط‌های فعال، مصرف شده و منقضی</p>
    </div>

    <div onclick="alert('به زودی...')" class="cursor-pointer bg-white rounded-xl p-6 shadow hover:shadow-lg transition">
      <h2 class="text-lg font-bold text-yellow-600 mb-2">تنظیمات</h2>
      <p class="text-sm text-gray-600">ویرایش مشخصات، رمز عبور و ...</p>
    </div>

  </div>

  @endsection