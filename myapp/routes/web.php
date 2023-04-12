<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return view('home',['title' => 'Home']);
})->name('home');


// Route::get('/test',function(){
//     return view('test');
// });
// // Route::get('register', 'RegisterController@create');
// Route::get('/login',function(){
//     return view('login');
// });
// Route::post('/login',function(){
//     return view('login');
// });
// Route::post('/home',function(){
//     return view('home');
// });
// Route::get('/123',function(){
//     return view('users01.index');
// });
// Route::post('/register', [App\Http\Controllers\RegisterController::class, 'register'])->name('register');
// Route::post('dangki','RegisterController@store');
// Route::post('register', 'RegisterController@store');
// Route::post('/process-form', function (Illuminate\Http\Request $request) {
//     $redirect_url = $request->input('redirect_url');

//     return redirect()->to($redirect_url);
// })->name('process-form');   
Route::resource("/student", App\Http\Controllers\StudentController::class);
// Route::resource("/user", App\Http\Controllers\UserController::class);
//tạo cổng route url là /user khi vào nó sẽ chọc thẳng vào controller và chạy đến hàm tương ứng để xử lý
// Route::resource("/register", App\Http\Controllers\RegisterController::class);
// Route::resource("/users01",App\Http\Controllers\Users01Controller::class);

//[UserController::class,'register']: đây là một mảng chứa tên của controller và phương thức xử lý request
// tương ứng với route này. Trong trường hợp này, controller được sử dụng là UserController, và phương thức xử lý request là register.
//->name('register'): đây là tên đặt cho route. Tên này có thể được sử dụng trong cả view
// và các đoạn mã khác trong Laravel để truy cập route này một cách dễ dàng.
Route::get('register',[UserController::class,'register'])->name('register');
Route::post('register',[UserController::class,'register_action'])->name('register.action');
//url:register,register_action:là hàm đc trỏ khi vào trong controller,register.action:đường dẫn khi muốn dùng code
Route::get('login',[UserController::class,'login'])->name('login');
Route::post('login',[UserController::class,'login_action'])->name('login.action');
Route::get('password',[UserController::class,'password'])->name('password');
Route::post('password',[UserController::class,'password_action'])->name('password.action');
Route::get('logout',[UserController::class,'logout'])->name('logout');
