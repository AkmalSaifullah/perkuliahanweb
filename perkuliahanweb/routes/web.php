<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MidController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SecurityController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\CostomerController;
use App\Http\Controllers\PenjualController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\BukuController;

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
    return view('welcome');
});

Route::get("/hello", function () {
echo "hello.word";
});

Route::get('/allo', function () {
    echo "allo" ;
});

Route::get("/biodata", function () {
    return view("biodata");
})->name("biodata");

Route::get("/game", function () {
    return view("game");
})->name("game");

Route::get("/film", function () {
    return view("film");
})->name("film");

Route::get("/robotic", function () {
    return view("robotic");
})->name("robotic");

Route::get("/pokemon", function () {
    return view("pokemon");
})->name("pokemon");

Route::get("/hii/{nama}/{gender", function ($nama) {
    echo "hii $nama";
})->name("hii");

Route::get("/hii/{nama}", function ($nama) {
    return view("hii")
    ->with("nama", $nama) 
    ->with("mk", "Web Lanjut")
    ->with("waktu", date("H:m:s"));
})->name("hii");

Route::get("/sfh/{nama}",[MidController::class,"sfh"])->name("sfh");

Route::get("/tampil-semua-user", [UserController::class,"tampil"])->name("user_all");
Route::get("/input-user", [UserController::class,"formInput"])->name("user_input");
Route::post("/simpan-user", [UserController::class,"simpan"])->name("user_simpan");

Route::get("/edit-user/{id}", [UserController::class,"formEdit"])->name("user_edit");
Route::put("/update-user/{id}", [UserController::class,"update"])->name("user_update");

Route::delete("/hapus-user/{id}", [UserController::class,"hapus"])->name("user_hapus");
Route::get("/show-user/{id}",[UserController::class,"show"])->name("user_show");


// Route::post("/user-update", [UserController::class, "update"])->name("user_update")->middleware('auth');
Route::get("/login", [SecurityController::class, "formLogin"])->name("login");
Route::post("/proses-login", [SecurityController::class, "prosesLogin"])->name("proses_login");
Route::get("/logout", [SecurityController::class, "logout"])->name("logout");

Route::middleware("auth")->group(function() {
    Route::get("/tampil-semua-user", 
   [UserController::class, "tampil"])->name("user_all");
   });

   Route::get("kategori/buat", [KategoriController::class, 'buat'])->name("buat_kategori");
    Route::post("kategori/simpan", [KategoriController::class, 'simpan'])->name("simpan_kategori");
    Route::get("kategori/tampil/{id}", [KategoriController::class, 'tampil'])->name("tampil_kategori");
    Route::get("kategori/semua", [KategoriController::class, 'semua'])->name("semua_kategori");
    Route::get("kategori/ubah/{id}", [KategoriController::class, 'ubah'])->name("ubah_kategori");
    Route::put("kategori/update/{id}", [KategoriController::class, 'update'])->name("update_kategori");
    Route::delete("kategori/hapus/{id}", [KategoriController::class, 'hapus'])->name("hapus_kategori");

    Route::get("costomer/buat", [CostomerController::class, 'buat'])->name("buat_costomer");
    Route::post("costomer/simpan", [CostomerController::class, 'simpan'])->name("simpan_costomer");
    Route::get("costomer/tampil/{id}", [CostomerController::class, 'tampil'])->name("tampil_costomer");
    Route::get("costomer/semua", [CostomerController::class, 'semua'])->name("semua_costomer");
    Route::get("costomer/ubah/{id}", [CostomerController::class, 'ubah'])->name("ubah_costomer");
    Route::put("costomer/update/{id}", [CostomerController::class, 'update'])->name("update_costomer");
    Route::delete("costomer/hapus/{id}", [CostomerController::class, 'hapus'])->name("hapus_costomer");

    Route::get("order/buat", [OrderController::class, 'buat'])->name("buat_orderr");
    Route::post("order/simpan", [OrderController::class, 'simpan'])->name("simpan_order");
    Route::get("order/tampil/{id}", [OrderController::class, 'tampil'])->name("tampil_order");
    Route::get("order/semua", [OrderController::class, 'semua'])->name("semua_order");
    Route::get("order/ubah/{id}", [OrderController::class, 'ubah'])->name("ubah_order");
    Route::put("order/update/{id}", [OrderController::class, 'update'])->name("update_order");
    Route::delete("order/hapus/{id}", [OrderController::class, 'hapus'])->name("hapus_order");

    Route::get("penjual/buat", [PenjualController::class, 'buat'])->name("buat_penjual");
    Route::post("penjual/simpan", [PenjualController::class, 'simpan'])->name("simpan_penjual");
    Route::get("penjual/tampil/{id}", [PenjualController::class, 'tampil'])->name("tampil_penjual");
    Route::get("penjual/semua", [PenjualController::class, 'semua'])->name("semua_penjual");
    Route::get("penjual/ubah/{id}", [PenjualController::class, 'ubah'])->name("ubah_penjual");
    Route::put("penjual/update/{id}", [PenjualController::class, 'update'])->name("update_penjual");
    Route::delete("penjual/hapus/{id}", [PenjualController::class, 'hapus'])->name("hapus_penjual");

    Route::get("buku/buat", [BukuController::class, 'buat'])->name("buat_buku");
    Route::post("buku/simpan", [BukuController::class, 'simpan'])->name("simpan_buku");
    Route::get("buku/tampil/{id}", [BukuController::class, 'tampil'])->name("tampil_buku");
    Route::get("buku/semua", [BukuController::class, 'semua'])->name("semua_buku");
    Route::get("buku/ubah/{id}", [BukuController::class, 'ubah'])->name("ubah_buku");
    Route::put("buku/update/{id}", [BukuController::class, 'update'])->name("update_buku");
    Route::delete("buku/hapus/{id}", [BukuController::class, 'hapus'])->name("hapus_buku");