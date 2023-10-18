<?php

use App\Models\page;
use App\Models\User;
use App\Models\admin;
use App\Models\Barang;
use App\Models\Pesanan;
use App\Models\Category;
use App\Models\rumahsakit;
use App\Models\appointment;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\pageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\roleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\gejalaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\konsultasiController;
use App\Http\Controllers\rumahsakitController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\pagePenyebabController;

use App\Http\Controllers\artikelDokterController;
use App\Http\Controllers\DashboardPostController;
use App\Models\Post; //tambahkan/ import model post yang akan digunakan

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

Route::get('/', function () {
    return view('index');
});

// Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
// Route::post('/login', [LoginController::class, 'authenticate']);
// Route::post('/logout', [LoginController::class, 'logout']);

// Route::get('/register', [RegisterController::class, 'index']);
// Route::post('/register', [RegisterController::class, 'store']);


Route::get('/dashboard', function () {
    return view('user.layout.layout');
});

Route::get('/apa-itu-tbc', function () {
    return view('apa-itu-tbc', [
        'pages' => page::all()
    ]);
})->middleware('verified');

Route::get('/rs', function () {
    return view('rumah-sakit', [
        'rumahsakits' => rumahsakit::get()
    ]);
});

Route::get('/quiz', function () {
    return view('quiz');
});

Route::get('/obat-obatan', function () {
    return view('profile', [
        'barang' => Barang::all()
    ]);
});

Route::get('/artikel', [PostController::class, 'index']);


Route::get('post/{post:slug}', [PostController::class, 'show']);


Route::get('categories/{category:slug}', function (Category $category) {
    return view('artikel', [
        'title' => $category->name,
        'posts' => $category->posts->load('category'),
        'category' => $category->name,


    ]);
});

// checkout
Route::resource('pesanan', orderController::class);
Route::get('/pesanan/update-status/{id}/{status}', 'orderController@updateStatus')->name('pesanan.updateStatus');



// admin 
// Route::get('/admin-login', [AdminLoginController::class, 'index']);
// Route::post('/admin-login', [AdminLoginController::class, 'authenticate']);


Route::get('/admin-dashboard', function () {
    return view('admin.dashboard', [
        'title' => 'Dashboard'
    ]);
})->middleware('auth');

Route::get('/admin-login', function () {
    return view('admin.login', []);
});





// Route::get('/admin-artikel', function () {
//     return view('admin.artikel');
// });


Route::get('/admin-user', function () {
    return view('admin.user', [
        'title' => 'User',
        'users' => User::all()


    ]);
});


Route::get('/auth/redirect', [LoginController::class, 'redirectToProvider']);
Route::get('/auth/callback', [LoginController::class, 'handleProviderCallback']);


Route::get('/admin-artikel/CheckSlug', [DashboardPostController::class, 'CheckSlug']);

// Route::resource('admin-artikel', DashboardPostController::class);
Route::resource('admin-artikel', DashboardPostController::class)->parameters([
    'admin-artikel' => 'post',
]);

Route::get('page', [pageController::class, 'index'])->name('page.index');
Route::post('page', [pageController::class, 'update'])->name('page.update');

Route::get('page1', [pagePenyebabController::class, 'index'])->name('page1.index');
Route::post('page1', [pagePenyebabController::class, 'update'])->name('page1.update');

Route::resource('rumah-sakit', rumahsakitController::class);

Route::get('/storage-link', function () {
    Artisan::call('storage:link');
    return 'Storage linked successfully!';
});





Route::post('upload', [pageController::class, 'upload'])->name('ckeditor.upload');


// Role
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/role', [roleController::class, 'index'])->middleware('cekRole');
    Route::resource('/artikel', artikelDokterController::class);
    Route::resource('/konsultasi', konsultasiController::class);
});


// Route::get('/konsultasi', function () {
//     return view('konsultasi');
// });

Route::get('/detail-konsultasi', function () {
    return view('detail-konsultasi');
});

// Route::get('/landingpage', function () {
//     return view('detail-konsultasi');
// });


Route::get('index', function () {
    return view('index');
});

Route::resource('barang', BarangController::class);

Route::get('/pesan/{id}', [PesanController::class, 'index']);
Route::post('pesan/{id}', [PesanController::class, 'pesan']);
Route::get('/checkout', [PesanController::class, 'checkout']);
Route::delete('checkout/{id}', [PesanController::class, 'delete']);

Route::post('/Pembayaran', [PesanController::class, 'Pembayaran']);

Route::get('/konfirmasi-check-out', [PesanController::class, 'konfirmasi']);





Route::resource('profile', UserController::class);

Route::resource('konsultasi-langsung', DoctorController::class);
Route::resource('appointment', AppointmentController::class);

Route::get('ashma', function () {
    return view('penyakit3d.ashma');
});


Route::get('obstruktif', function () {
    return view('penyakit3d.2');
});


Route::get('bronkitis', function () {
    return view('penyakit3d.3');
});


Route::get('radang', function () {
    return view('penyakit3d.4');
});


Route::get('tuberkulosis', function () {
    return view('penyakit3d.5');
});

Route::get('covid', function () {
    return view('penyakit3d.6');
});


Route::get('antriandokter', function () {
    return view('antriandokter', [
        'appointment' => appointment::latest()->first(),
    ]);
});



Route::get('riwayatOrder', function () {
    $user = auth()->user(); // Mendapatkan pengguna yang sedang login
    $riwayats = Pesanan::where('user_id', $user->id)->with('pesanan_detail.barang')
        ->latest()->paginate(10);

    return view('riwayatOrder', [
        'riwayats' => $riwayats,
    ]);
});
