<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<div class="bg-white pb-6 sm:pb-8 lg:pb-12">
  <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">

    <div class="container w-full max-w-7xl">
      <div x-data="{ open: false }" class="
    flex flex-col
    max-w-screen-xl
    p-5
    mx-auto
    md:items-center md:justify-between md:flex-row md:px-6
    lg:px-8
  ">
        <div class="flex flex-row items-center justify-between lg:justify-start">
          <a href="/" class="
        text-2xl
        font-bold
        tracking-tighter
        text-blue-600
        transition
        duration-500
        ease-in-out
        transform
        tracking-relaxed
        lg:pr-8
      "> 掲示板 </a>
          <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8">
              <path x-show="!open" fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                clip-rule="evenodd"></path>
              <path x-show="open" fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd" style="display: none"></path>
            </svg>
          </button>
        </div>
        <nav :class="{'flex': open, 'hidden': !open}"
          class="flex-col items-center flex-grow hidden pb-4 border-blue-600 md:pb-0 md:flex md:justify-end md:flex-row lg:border-l-2 lg:pl-2">


          <div @click.away="open = false" class="relative" x-data="{ open: false }">
            <button @click="open = !open" class="
          flex flex-row
          items-center
          w-full
          px-4
          py-2
          mt-2
          text-sm text-left text-gray-500
          md:w-auto md:inline md:mt-0
          hover:text-blue-600
          focus:outline-none focus:shadow-outline
        ">

              <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform rotate-0 md:-mt-1">
                <path fill-rule="evenodd"
                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                  clip-rule="evenodd"></path>
              </svg>
            </button>

            <div class="inline-flex items-center gap-2 list-none lg:ml-auto">
              <a href="{{ route('login') }}" class="              
          items-center
          block
          px-4
          py-2.5
          text-base
          font-medium
          text-center text-blue-600
          transition
          duration-500
          ease-in-out
          transform
          border-2 border-white
          shadow-md
          rounded-xl
          focus:outline-none
          focus:ring-2
          focus:ring-offset-2
          focus:ring-gray-500
        "> Log in </a>
              <a href="{{ route('register') }}" class="
          items-center
          block
          px-4
          py-3
          text-base
          font-medium
          text-center text-white
          transition
          duration-500
          ease-in-out
          transform
          bg-blue-600
          rounded-xl
          hover:bg-blue-700
          focus:outline-none
          focus:ring-2
          focus:ring-offset-2
          focus:ring-blue-500
        ">Register</a>
            </div>
        </nav>
      </div>
    </div>


    <section class="flex flex-col items-center">
      <div class="max-w-xl flex flex-col items-center text-center pt-8 lg:pt-32 pb-16 lg:pb-48">
        <h1 class="text-black-800 text-4xl sm:text-5xl md:text-6xl font-bold mb-8 md:mb-12">掲示板アプリを作成しました</h1>

        <div class="w-full flex flex-col sm:flex-row sm:justify-center gap-2.5">
          <a href="{{ route('threads') }}"
            class="inline-block bg-indigo-500 hover:bg-indigo-600 active:bg-indigo-700 focus-visible:ring ring-indigo-300 text-white text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">Start
            now</a>

        </div>
      </div>


    </section>
  </div>
</div>

</html>