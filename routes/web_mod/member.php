<?php

// Menu Kegiatan Member
Route::get('/kegiatan', function () {
    return view('front_end/member/kegiatan');
});

// Menu History Member
Route::get('/riwayat', function () {
    return view('front_end/member/riwayat');
});

