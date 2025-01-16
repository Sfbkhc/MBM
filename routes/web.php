<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/visi-misi', [
    HomeController::class,
    'controller_page_visi_misi'
]);

Route::get('language/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'id', 'zh'])) {
        session()->put('locale', $locale);
    }
    return redirect()->back();
})->name('language.switch');
