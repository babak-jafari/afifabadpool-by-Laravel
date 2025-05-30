@extends('layout')

@section('page-title','main')

@section('content')

<div class="flex"> 
    <div class="flex bg-[#1e96ff] flex-col w-full items-center md:w-1/2 gap-6 justify-center py-6  px-2 ">
        <h1 class="text-wave inline-block bg-gradient-to-l from-[#0675ff] to-[#0e295d] bg-clip-text text-transparent font-bold text-2xl lg:text-3xl">مجموعه تفریحی ورزشی عفیف آباد</h1>
        <span class="leading-7 mx-2 text-gray-700">استخر عفیف‌آباد یک مجموعه‌ی آبی نوساز، تمیز و بسیار مجهز واقع در باغ عفیف‌آباد است. این مجموعه شامل استخر، سونا، جکوزی، حمام نمک، ماساژ و حمام ترکی می‌باشد. فضایی آرام و بهداشتی برای یک تجربه‌ی کامل از آرامش و سلامت فراهم شده است.</span>
        <div>
          <!-- <form id="newsletter-form">
            <input id="phone-number" name="number" class="placeholder:text-gray-300 caret-white focus:outline-none text-gray-700 text-lg font-thin placeholder:font-thin placeholder:text-lg border-b border-white" type="text" placeholder="09XXXXX6789">
            <button type="submit" class="hover:bg-[#48b9ff] duration-200 justify-center items-center bg-white text-gray-600 p-3 w-25 rounded-xl">عضویت</button>
            <div id="result"></div>
          </form> -->
          <form action="{{ route('newsletter.subscribe') }}" method="POST">
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
            <input id="phone-number" name="phone" class="placeholder:text-gray-300 caret-white focus:outline-none text-gray-700 text-lg font-thin placeholder:font-thin placeholder:text-lg border-b border-white" type="text" placeholder="09XXXXX6789">
            <button type="submit" class="hover:bg-[#48b9ff] duration-200 justify-center items-center bg-white text-gray-600 p-3 w-25 rounded-xl">عضویت</button>
   

          </form>
    


        </div>
        <form action="{{ route ('dashboard')}}" method="get">    
            <button class="flex  w-70 gap-1 justify-center items-center bg-[#0675ff] text-white p-3 rounded-xl hover:bg-[#48b9ff] duration-200"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 0 1 0 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 0 1 0-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375Z" />
            </svg>خرید بلیت</button>
        </form>
    </div>

    <div class="w-1/2 hidden md:block">
        <img class="w-full" src="/img/ChatGPT Image Apr 6, 2025 at 08_38_49 PM.png" alt="" >
    </div>
</div>
<!-- services -->
<div class="flex flex-col items-center">
<h2 class="font-bold text-2xl text-gray-700 p-4">امکانات مجموعه</h2>
<div class="grid grid-cols-3 md:grid-cols-3 gap-6 p-6 lg:px-20 xl:px-40  ">

    <!-- اتاق ماساژ -->
    <div class="md:bg-white md:shadow-lg p-4 md:rounded-xl transition-transform duration-300 md:hover:scale-105">
      <img class="block mx-auto w-25 " src="/img/massage.png" alt="">
      <h3 class="text-lg md:font-semibold mt-4 text-center">اتاق ماساژ</h3>
      <p class="hidden md:block mt-2 text-gray-700 text-justify">ماساژ در محیطی آرام با روغن‌های مخصوص و پرسنل مجرب انجام می‌شود و باعث کاهش استرس و خستگی بدن می‌گردد.</p>
    </div>
  
    <!-- اتاق نمک -->
    <div class="md:bg-white md:shadow-lg p-4 md:rounded-xl transition-transform duration-300 md:hover:scale-105">
      <img class="block mx-auto w-25 " src="/img/saltroom.png" alt="">
      <h3 class="text-lg md:font-semibold mt-4 text-center">اتاق نمک</h3>
      <p class="hidden md:block mt-2 text-gray-700 text-justify">اتاق نمک با طراحی خاص و خواص درمانی به بهبود تنفس و آرامش ذهن کمک می‌کند.</p>
    </div>
  
    <!-- استخر کودک -->
    <div class="md:bg-white md:shadow-lg p-4 md:rounded-xl transition-transform duration-300 md:hover:scale-105">
      <img class="block mx-auto w-25 " src="/img/kidspool.png" alt="">
      <h3 class="text-lg md:font-semibold mt-4 text-center">استخر کودک</h3>
      <p class="hidden md:block mt-2 text-gray-700 text-justify">استخر کودک با عمق مناسب و نظارت کامل، محیطی امن و سرگرم‌کننده برای کودکان فراهم کرده است.</p>
    </div>
  
    <!-- حمام ترکی -->
    <div class="md:bg-white md:shadow-lg p-4 md:rounded-xl transition-transform duration-300 md:hover:scale-105">
      <img class="block mx-auto w-25 " src="/img/bath.png" alt="">
      <h3 class="text-lg md:font-semibold mt-4 text-center">حمام ترکی</h3>
      <p class="hidden md:block mt-2 text-gray-700 text-justify">حمام ترکی با فضای گرم و سنتی خود، برای پاک‌سازی بدن و ایجاد آرامش کامل مناسب است.</p>
    </div>
  
    <!-- فروشگاه -->
    <div class="md:bg-white md:shadow-lg p-4 md:rounded-xl transition-transform duration-300 md:hover:scale-105">
      <img class="block mx-auto md w-25 " src="/img/shop.png" alt="">
      <h3 class="text-lg md:font-semibold mt-4 text-center">فروشگاه</h3>
      <p class="hidden md:block mt-2 text-gray-700 text-justify">فروشگاه مجموعه انواع محصولات بهداشتی، ورزشی و خوراکی را با کیفیت عالی عرضه می‌کند.</p>
    </div>
  
    <!-- کافی‌شاپ -->
    <div class="md:bg-white md:shadow-lg p-4 md:rounded-xl transition-transform duration-300 md:hover:scale-105">
      <img class="block mx-auto w-25 " src="/img/coffeshop.png" alt="">
      <h3 class="text-lg md:font-semibold mt-4 text-center">کافی‌شاپ</h3>
      <p class="hidden md:block mt-2 text-gray-700 text-justify">کافی‌شاپ مجموعه با دمنوش‌های سنتی و نوشیدنی‌های گرم، فضایی دل‌نشین برای استراحت فراهم کرده است.</p>
    </div>
  
  </div>
  
  
</div>
<!-- teaser -->
<div class="flex flex-col items-center gap-4 p-6">
<h2 class="font-bold text-3xl text-gray-700">استخر عفیف‌آباد</h2>
<span class="text-gray-700">مجموعه عفیف‌آباد، تلفیقی از آرامش، سلامت و خدمات حرفه‌ای در محیطی مدرن و دل‌نشین است.</span>
<button id="sessionsbutton" class=" hover:bg-[#48b9ff] duration-200 flex gap-1 justify-center items-center bg-[#0675ff] text-white p-3 rounded-xl">مشاهده سانس ها</button>
<video class="w-full" src="" controls ></video>
</div>

<!--  -->

<div id="sessionsform" class="fixed inset-0 items-center justify-center z-50 hidden">
<div class="bg-amber-400  p-6 rounded-lg w-full max-w-md relative flex flex-col gap-2 items-center">
<button id="closesessions" class="absolute top-2 right-2 text-gray-800 hover:text-black">
  ✖
</button>
<h1>گزینه مورد نظر را انتخاب کنید</h1>
<button class=" hover:bg-[#48b9ff] duration-200 flex gap-1 justify-center items-center bg-[#0675ff] text-white p-3 rounded-xl">سانس های آموزشی</button>

<button class=" hover:bg-[#48b9ff] duration-200 flex gap-1 justify-center items-center bg-[#0675ff] text-white p-3 rounded-xl">سانس های عمومی</button>
</div>
</div>  

@endsection
