<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Route untuk halaman utama
Route::get('/', function () {
    return view('index');
});

// Route untuk halaman daftar
Route::get('/daftar', function () {
    return view('daftar');
});

// Route untuk halaman masuk
Route::get('/masuk', function () {
    return view('masuk');
});

// Route untuk halaman formLapor
Route::get('/formLapor', function () {
    return view('formLapor');
});

Route::get('/verifikasiOtp', function () {
    return view('verifikasiOtp');
});

Route::get('/riwayatLapor', function () {
    return view('riwayatLapor');
});

// Route untuk previewLapor dengan query parameter
Route::get('/previewLapor', function (Request $request) {
    $jenisBencana = $request->query('jenis_bencana');
    $tanggalKejadian = $request->query('tanggal_kejadian');
    $waktuKejadian = $request->query('waktu_kejadian');
    $deskripsiKejadian = $request->query('deskripsi_kejadian');
    $petunjukAlamat = $request->query('petunjuk_alamat');
    $fileUpload = $request->query('file_upload');
    $tindakan = $request->query('tindakan', []); // Ambil tindakan yang dicentang, default array kosong

    return view('previewLapor', compact(
        'jenisBencana',
        'tanggalKejadian',
        'waktuKejadian',
        'deskripsiKejadian',
        'petunjukAlamat',
        'fileUpload',
        'tindakan'
    ));
});


Route::post('/previewLapor', function (Request $request) {
    if ($request->hasFile('file_upload')) {
        $file = $request->file('file_upload');
        $fileUrl = base64_encode(file_get_contents($file)); // Menyimpan konten file sementara

        // Kirimkan ke halaman preview dengan data file
        return view('previewLapor', [
            'fileUrl' => $fileUrl,
            'fileName' => $file->getClientOriginalName(),
            'fileType' => $file->getMimeType(),
        ]);
    }

    return back()->with('error', 'Tidak ada file yang diunggah');
})->name('previewLapor');


