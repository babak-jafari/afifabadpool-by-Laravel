@extends('layout')

@section('page-title','register')

@section('content')

<div class="p-10 flex flex-col items-center justify-center  w-full">
    <h2 class="text-2xl font-semibold mb-4 text-center text-gray-800">ثبت‌نام</h2>
    <form id="signup-form" class="p-10 flex flex-col items-center justify-center   w-full" action="{{ route('register') }}" method="POST">
        @csrf
        @if (session('success'))
        <div id='toast' >
            {{ session('success') }}
        </div>
        @elseif (session('error'))
        <div id="toast">
            {{ session('error') }}
        </div>
        @endif 
        
    <input name="phone" type="text" placeholder="شماره موبایل" class="w-full lg:w-1/2 caret-text-gray-600 focus:outline-none border-0 bg-gray-200 placeholder:text-gray-600   p-2 rounded-4xl mb-3" />
    <input name="password" type="password" placeholder="رمز عبور" class="w-full lg:w-1/2 caret-text-gray-600 focus:outline-none border-0 bg-gray-200 placeholder:text-gray-600   p-2 rounded-4xl mb-3" />
    <input name="password_confirmation" type="password" placeholder="تکرار رمز عبور" class="w-full lg:w-1/2 caret-text-gray-600 focus:outline-none border-0 bg-gray-200 placeholder:text-gray-600   p-2 rounded-4xl mb-3" />
    
    <button type="submit" class="w-full lg:w-1/2 bg-[#0675ff] text-white  p-2 rounded-4xl">ثبت‌نام</button>
    </form>
</div>

@endsection