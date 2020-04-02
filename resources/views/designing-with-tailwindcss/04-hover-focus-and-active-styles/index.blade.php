<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel+VueJS+TailWindCss</title>

        <link rel="stylesheet" href="/designing-with-tailwindcss/01-setting-up-tailwind-and-postcss/css/tailwind.css">
    </head>

    <body class="bg-gray-300">
      <div class="bg-gray-100 flex">
        <div class="px-8 py-12 max-w-md mx-auto sm:max-w-xl lg:max-w-full lg:w-1/2 lg:py-24 lg:px-12">
          <div class="xl:max-w-lg xl:ml-auto">
            <img class="h-10" src="/designing-with-tailwindcss/img/logo.svg" alt="Workcation">
            <img class="mt-6 rounded-lg shadow-xl sm:mt-8 sm:h-64 sm:w-full sm:object-cover sm:object-center lg:hidden" src="/designing-with-tailwindcss/img/beach-work.jpg" alt="Woman workcationing on the beach">
            <h1 class="mt-6 text-2xl font-bold text-gray-900 leading-tight sm:mt-8 sm:text-4xl lg:text-3xl xl:text-4xl">
              You can work from anywhere.
              <br class="hidden lg:inline"><span class="text-indigo-500">Take advantage of it.</span>
            </h1>
            <p class="mt-2 text-gray-600 sm:mt-4 sm:text-xl">
              Workcation helps you find work-friendly rentals in beautiful locations so you can enjoy some nice weather even when you're not on vacation.
            </p>
            <div class="mt-4 sm:mt-6">
              <a href="#" class="inline-block px-5 py-3 rounded-lg shadow-lg bg-indigo-500 hover:bg-indigo-400 active:bg-indigo-600 focus:outline-none focus:shadow-outline text-sm text-white uppercase tracking-wider font-semibold sm:text-base">Book your escape</a>
            </div>
          </div>
        </div>
        <div class="hidden lg:block lg:w-1/2 lg:relative">
          <img class="absolute inset-0 h-full w-full object-cover object-center" src="/designing-with-tailwindcss/img/beach-work.jpg" alt="Woman workcationing on the beach">
        </div>
      </div>
    </body>

</html>
