@extends('layout')

@section('page-title','buy tiket')

@section('content')



<div class=" m-3  p-6 space-y-6">
    <h2 class="text-2xl font-bold text-center text-gray-800">رزرو خدمات</h2>

    <!-- انتخاب تاریخ با دکمه -->
    <div>
      <label class="block text-sm font-medium text-gray-700 mb-2">تاریخ مورد نظر:</label>
      <div id="date-buttons" class="flex justify-between gap-3">
        <!-- دکمه‌ها با JS اضافه می‌شن -->
      </div>
    </div>

    <!-- انتخاب خدمات -->
    <label class="block text-sm font-medium text-gray-700 mb-2">انتخاب خدمات:</label>

    <div class=" ">
      <div class="grid grid-cols-3 gap-3">
        <label class="flex items-center space-x-2">
          <input type="checkbox" name="services" value="massage" class="accent-blue-500">
          <span>ماساژ</span>
        </label>
        <label class="flex items-center space-x-2">
          <input type="checkbox" name="services" value="pool" class="accent-blue-500">
          <span>استخر</span>
        </label>
        <label class="flex items-center space-x-2">
          <input type="checkbox" name="services" value="sauna" class="accent-blue-500">
          <span>سونا و جکوزی</span>
        </label>
        <label class="flex items-center space-x-2">
          <input type="checkbox" name="services" value="jacuzzi" class="accent-blue-500">
          <span>اتاق نمک</span>
        </label>
        <label class="flex items-center space-x-2">
            <input type="checkbox" name="services" value="jacuzzi" class="accent-blue-500">
            <span>حمام ترکی</span>
        </label>
        <label class="flex items-center space-x-2">
            <input type="checkbox" name="services" value="jacuzzi" class="accent-blue-500">
            <span>حمام مغربی</span>
        </label>
      </div>
    </div>

    <!-- دکمه ثبت -->
    <button class="w-full bg-blue-600 text-white p-3 rounded-xl hover:bg-blue-700 transition">
      ثبت رزرو
    </button>
  </div>

  <script>
     const dateButtonsContainer = document.getElementById('date-buttons');
  const daysOfWeek = ["یک‌شنبه", "دوشنبه", "سه‌شنبه", "چهارشنبه", "پنج‌شنبه", "جمعه", "شنبه"];
  const months = ["فروردین", "اردیبهشت", "خرداد", "تیر", "مرداد", "شهریور", "مهر", "آبان", "آذر", "دی", "بهمن", "اسفند"];

  // افزودن دکمه‌های تاریخ
  document.addEventListener('DOMContentLoaded', function () {
    const dateButtonsContainer = document.getElementById('date-buttons');
    if (!dateButtonsContainer) return;
  
    const daysOfWeek = ["یک‌شنبه", "دوشنبه", "سه‌شنبه", "چهارشنبه", "پنج‌شنبه", "جمعه", "شنبه"];
    const months = ["فروردین", "اردیبهشت", "خرداد", "تیر", "مرداد", "شهریور", "مهر", "آبان", "آذر", "دی", "بهمن", "اسفند"];
  
    for (let i = 0; i < 3; i++) {
      const date = new Date();
      date.setDate(date.getDate() + i);
  
      const weekday = daysOfWeek[date.getDay()];
      const day = date.getDate();
      const month = months[date.getMonth()];
  
      const button = document.createElement('button');
      button.type = "button";
      button.className = "flex-1 p-3 border rounded-xl text-center text-gray-700 hover:bg-blue-100 transition";
      button.innerHTML = `
        <div class="font-semibold">${weekday}</div>
        <div class="text-lg font-bold">${day}</div>
        <div class="text-sm text-gray-500">${month}</div>
      `;
      button.dataset.date = date.toISOString().split('T')[0];
  
      button.addEventListener("click", () => {
        document.querySelectorAll("#date-buttons button").forEach(btn => {
          btn.classList.remove("bg-blue-600", "text-white");
        });
        button.classList.add("bg-blue-600", "text-white");
        console.log("تاریخ انتخاب‌شده:", button.dataset.date);
      });
  
      dateButtonsContainer.appendChild(button);
    }
  });
  </script>

  
    
@endsection