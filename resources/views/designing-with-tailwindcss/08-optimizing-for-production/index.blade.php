<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel+VueJS+TailWindCss</title>

        <link rel="stylesheet" href="/designing-with-tailwindcss/01-setting-up-tailwind-and-postcss/css/tailwind.css">
    </head>

    <body class="bg-gray-100">
        <div class="px-8 py-12">
          <img class="h-10" src="/designing-with-tailwindcss/img/logo.svg" alt="Workcation">
          <img class="mt-6 rounded-lg shadow-xl" src="/designing-with-tailwindcss/img/beach-work.jpg" alt="Woman workcationing on the beach">
          <h1 class="mt-6 text-2xl font-bold text-gray-900 leading-tight">
            You can work from anywhere.
            <span class="text-indigo-500">Take advantage of it.</span>
          </h1>
          <p class="mt-2 text-gray-600">
            Workcation helps you find work-friendly rentals in beautiful locations so you can enjoy some nice weather even when you're not on vacation.
          </p>
          <div class="mt-4">
            <a href="#" class="inline-block px-5 py-3 rounded-lg shadow-lg bg-indigo-500 hover:bg-indigo-400 text-sm text-white uppercase tracking-wider font-semibold">Book your escape</a>
          </div>
        </div>
      </body>

</html>
