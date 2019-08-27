<?php

// Menu Jadwal
Route::get('/jadwal', function () {
    return view('front_end/admin/jadwal');
});

// Menu siswa
Route::get('/siswa', function () {
    return view('front_end/admin/siswa');
});

// Menu absensi
Route::get('/absensi', function () {
    return view('front_end/admin/absensi');
});