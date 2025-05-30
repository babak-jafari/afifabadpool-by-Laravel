<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>@yield('page-title')</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col min-h-screen bg-gray-100">

  <!-- Header -->
@include('layouts.header')

  <!-- Main Content -->
 @yield('content')

  <!-- Footer -->
  @include('layouts.footer')


</body>
</html>
