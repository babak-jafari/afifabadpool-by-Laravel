@extends('layout')

@section('page-title','admin')

@section('content')

<h2 class="text-2xl font-bold text-center p-2">پنل مدیریت سایت</h2>
<div class="grid md:grid-cols-3 gap-4 p-3">
  
  
      <a href="" onclick="alert('به زودی...'); return false;">
          <div class="cursor-pointer bg-white rounded-xl p-6 shadow hover:shadow-lg transition">
            <h2 class="text-lg font-bold text-blue-600 mb-2">مدیریت گالری</h2>
            <p class="text-sm text-gray-600">افزودن و حذف تصاویر ، بخش گالری مجموعه</p>
          </div>
      </a>
  
      <div onclick="alert('به زودی...')" class="cursor-pointer bg-white rounded-xl p-6 shadow hover:shadow-lg transition">
        <h2 class="text-lg font-bold text-green-600 mb-2">مدیریت مقالات</h2>
        <p class="text-sm text-gray-600">افزودن و حذف مطلب ، بخش مقالات مجموعه</p>
      </div>
  
      <div onclick="alert('به زودی...')" class="cursor-pointer bg-white rounded-xl p-6 shadow hover:shadow-lg transition">
        <h2 class="text-lg font-bold text-yellow-600 mb-2">مدیریت کاربران</h2>
        <p class="text-sm text-gray-600">مشاهده کاربران و اطلاعات تماس</p>
      </div>

      <div onclick="alert('به زودی...')" class="cursor-pointer bg-white rounded-xl p-6 shadow hover:shadow-lg transition">
        <h2 class="text-lg font-bold text-fuchsia-600 mb-2">مدیریت بلیط ها</h2>
        <p class="text-sm text-gray-600">بررسی خرید ها با فیلتر های زمانی</p>
      </div>

      <div onclick="alert('به زودی...')" class="cursor-pointer bg-white rounded-xl p-6 shadow hover:shadow-lg transition">
        <h2 class="text-lg font-bold text-orange-600 mb-2">حسابداری</h2>
        <p class="text-sm text-gray-600">مدیریت مالی و بررسی تراکنش ها</p>
      </div>

      <div onclick="alert('به زودی...')" class="cursor-pointer bg-white rounded-xl p-6 shadow hover:shadow-lg transition">
        <h2 class="text-lg font-bold text-pink-600 mb-2">تنظیمات پیشرفته</h2>
        <p class="text-sm text-gray-600">ویرایش ها و اعمال حرفه ای</p>
      </div>
  
  
    </div>
  
    <div class="grid gap-4 p-3">
      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class=" bg-red-600  text-red-200 hover:bg-red-200 hover:text-red-600 w-full p-3 rounded-lg">خروج</button>
      </form>
    </div>
  
    @endsection