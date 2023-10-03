<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TinTucController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[HomeController::class, 'index'])->name('trangchu');


//admin
Route::get('/admin',[AdminController::class, 'index'])->name('admin');
Route::get('/admin/dichvu',[AdminController::class, 'dichvu'])->name('admindichvu');
Route::get('/admin/tintuc', [AdminController::class, 'tintuc'])->name('danh-sach-tin-tuc');
Route::get('/admin/sukien', [AdminController::class, 'sukien'])->name('danh-sach-tin-tuc');

Route::get('/admin/tabledv/edit/{id}', [AdminController::class, 'edit'])->name('admin.tabledv.edit');
Route::get('/admin/tablebg/edit/{id}', [AdminController::class, 'editbg'])->name('admin.tablebg.edit');
Route::post('/admin/tablebg/edit/{id}', [AdminController::class, 'editbg_'])->name('admin.tablebg.edit');
Route::get('/admin/tabletintuc/edit/{id}', [AdminController::class, 'edittintuc'])->name('admin.tabletintuc.edit');
Route::post('/admin/tabletintuc/edit/{id}', [AdminController::class, 'edittintuc_'])->name('admin.tabletintuc.edit');

Route::get('/admin/tablesukien/edit/{id}', [AdminController::class, 'editsukien'])->name('admin.tablesukien.edit');
Route::post('/admin/tablesukien/edit/{id}', [AdminController::class, 'editsukien_'])->name('admin.tablesukien.edit');



Route::get('/admin/tablehg/edit/{id}', [AdminController::class, 'edithg'])->name('admin.tablehg.edit');
Route::post('/admin/tablehg/edit/{id}', [AdminController::class, 'edithg_'])->name('admin.tablehg.edit');

Route::get('/admin/tablechinhsach/edit/{id}', [AdminController::class, 'editchinhsach'])->name('admin.tablechinhsach.edit');
Route::post('/admin/tablechinhsach/edit/{id}', [AdminController::class, 'editcs_'])->name('admin.tablechinhsach.edit');


Route::get('/admin/tabledv/add', [AdminController::class, 'adddv'])->name('admin.tabledv.add');

Route::post('/admin/tabledv/add', [AdminController::class, 'adddv_'])->name('admin.tabledv.add');
Route::get('/admin/tablebg/add', [AdminController::class, 'addbg'])->name('admin.tablebg.add');
Route::post('/admin/tablebg/add', [AdminController::class, 'addbg_'])->name('admin.tablebg.add');
Route::get('/admin/tabletintuc/add', [AdminController::class, 'addtintuc'])->name('admin.tabletintuc.add');
Route::post('/admin/tabletintuc/add', [AdminController::class, 'addtintuc_'])->name('admin.tabletintuc1.add');


Route::get('/admin/tablebg/delete/{id}', [AdminController::class, 'delbg'])->name('admin.tablebg.delete');
Route::get('/admin/tabledv/delete/{id}', [AdminController::class, 'deldv'])->name('admin.tabledv.delete');
Route::get('/admin/tabletintuc/delete/{id}', [AdminController::class, 'deltintuc'])->name('admin.tabletintuc.delete');
Route::get('/admin/tablehg/delete/{id}', [AdminController::class, 'delhg'])->name('admin.tablehg.delete');



Route::post('/admin/tabledv/edit/{id}', [AdminController::class, 'edit_'])->name('admin.tabledv.edit');
Route::get('/admin/banggia',[AdminController::class, 'banggia'])->name('adminbanggia');
Route::get('/admin/huongdan',[AdminController::class, 'huongdan'])->name('adminhuongdan');
Route::get('/admin/chinhsach',[AdminController::class, 'chinhsach'])->name('adminchinhsach');


//chitiet
Route::get('/tin/{id}',[HomeController::class, 'chitiet'])->name('chitiet');
Route::get('/chitiettin/{id}',[TinTucController::class, 'chitiet'])->name('chitiet');
Route::get('/chitietsk/{id}',[TinTucController::class, 'chitietsk'])->name('chitiet');

Route::get('/banggia/{id}',[HomeController::class, 'chitietbg'])->name('chitietbg');
Route::get('/huongdan/{id}',[HomeController::class, 'chitiethg'])->name('chitiethg');
Route::get('/chinhsach/{id}',[HomeController::class, 'chitietcs'])->name('chitietcs');

//login

Route::get('/dangnhap',[UserController::class, 'dangnhap'])->name('dangnhap');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/dangky', [UserController::class, 'dangky'])->name('dangky');
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::get('/tracuoc', [HomeController::class, 'tracuoc'])->name('tracuoc');
Route::get('/tintuc', [TinTucController::class, 'tintuc'])->name('tintuc');
Route::get('/sukien', [HomeController::class, 'sukien'])->name('tintuc');
Route::get('/tuyendung', [HomeController::class, 'tuyendung'])->name('tintuc');

Route::get('/dashboard',[ProfileController::class, 'index']);
Route::get('/taodonhang',[ProfileController::class, 'taodonhang']);
Route::get('/taodonkygui',[ProfileController::class, 'taodonkygui']);
Route::post('/chuyentien',[ProfileController::class, 'chuyentien'])->name('add.nganhang');


Route::post('/addorder', [HomeController::class, 'addorder'])->name('order.add');
Route::post('/addkygui', [HomeController::class, 'addkygui'])->name('kygui.add');



route::get('/profile/{id}', [HomeController::class, 'profile'])->name('profile')->middleware('auth');
Route::post('/profile/edit/{id}', [HomeController::class, 'edit_'])->name('profile.edit')->middleware('auth');
Route::get('/dangxuat', [HomeController::class, 'logout'])->name('logout');


Route::get('/chodatcoc', [HomeController::class, 'chodatcoc'])->name('chodatcoc');
Route::get('/dongydathang', [HomeController::class, 'dongydathang'])->name('chodatcoc');


Route::get('dathang/{id}', [HomeController::class, 'dongydathang'])->name('dathang');
Route::get('/dadathang', [HomeController::class, 'dadathang'])->name('chodatcoc');
Route::get('/dadathang1', [HomeController::class, 'dadathang1'])->name('chodatcoc');


Route::get('/kienhang/{id}', [HomeController::class, 'editkh'])->name('kienhang.edit');

Route::get('/tatcadonhang', [HomeController::class, 'tatcadonhang']);


Route::get('/tatcadonkh', [HomeController::class, 'tatcakh']);
Route::get('/dangxulykh', [HomeController::class, 'dangxulykh']);
Route::get('/dahoanthanhkh', [HomeController::class, 'dahoanthanhkh']);

Route::get('/ruttien', [ProfileController::class, 'ruttien']);


Route::post('/searchkh', [HomeController::class, 'searchkh']);


Route::post('/luu-thong-tin-tai-khoan', [ProfileController::class, 'luuthongtinchuyenkhoan'])->name('luu-thong-tin-tai-khoan');;


Route::get('/lichsugiaodich', [ProfileController::class, 'lichsu']);


Route::get('/tatcakhieunai', [ProfileController::class, 'khieunai']);

Route::get('/nhacungcap', [ProfileController::class, 'ncc']);

Route::get('/addncc', [ProfileController::class, 'addncc']);


Route::post('/add-ncc', [ProfileController::class, 'addncc_'])->name('ncc.add');
