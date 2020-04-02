<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/tailwindcss", function () {
    return view('designing-with-tailwindcss.home');
});

Route::get("/tailwindcss/01-setting-up-tailwind-and-postcss", function () {
    return view('designing-with-tailwindcss.01-getting-up-and-running.index');
});

Route::get("/tailwindcss/02-the-utility-first-workflow", function () {
    return view('designing-with-tailwindcss.02-the-utility-first-workflow.index');
});

Route::get("/tailwindcss/03-responsive-design", function () {
    return view('designing-with-tailwindcss.03-responsive-design.index');
});

Route::get("/tailwindcss/04-hover-focus-and-active-styles", function () {
    return view('designing-with-tailwindcss.04-hover-focus-and-active-styles.index');
});

Route::get("/tailwindcss/05-composing-utilities-with-apply", function () {
    return view('designing-with-tailwindcss.05-composing-utilities-with-apply.index');
});

Route::get("/tailwindcss/06-extracting-reusable-components", function () {
    return view('designing-with-tailwindcss.06-extracting-reusable-components.index');
});

Route::get("/tailwindcss/07-customizing-your-design-system", function () {
    return view('designing-with-tailwindcss.07-customizing-your-design-system.index');
});

Route::get("/tailwindcss/08-optimizing-for-production", function () {
    return view('designing-with-tailwindcss.08-optimizing-for-production.index');
});