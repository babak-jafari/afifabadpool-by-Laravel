@extends('layout')

@section('page-title','login')

@section('content')

<div class="p-10 flex flex-col items-center justify-center w-full">
    <h2 class="text-2xl font-semibold mb-4 text-center text-gray-800">ورود به حساب</h2>
    <form id="login-form" class="p-10 flex flex-col items-center justify-center   w-full" action="{{ route('login') }}" method="POST">
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
        <input  name="phone" type="text" placeholder="شماره موبایل" class="w-full lg:w-1/2 caret-text-gray-600 focus:outline-none border-0 bg-gray-200 placeholder:text-gray-600   p-2 rounded-4xl mb-3" />
        <input  name="password" type="password" placeholder="رمز عبور" class="w-full lg:w-1/2 caret-text-gray-600 focus:outline-none border-0 bg-gray-200 placeholder:text-gray-600    p-2 rounded-4xl mb-3" />
        <button type="submit" class="w-full lg:w-1/2 bg-[#0675ff] text-white  p-2 rounded-4xl ">ورود</button>

    </form> 
    <div class=" flex items-center justify-center p-2">
        <a href="{{ route('register.form') }}" id="signup-btn" class="text-gray-600 hover:text-gray-400">عضویت</a>
        <h5>/</h5>
        <a href="{{ route('register.form') }}" class="text-gray-600 hover:text-gray-400">فراموشی رمز عبور</a>
    </div>
</div>
@endsection