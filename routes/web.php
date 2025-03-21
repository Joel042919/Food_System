<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EntranceController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('ladingPage');
});



//Auth entication
Route::get('/login', [AuthController::class,'index'])->name('login');
Route::post('/login/verify',[AuthController::class,'verify']);
Route::post('/logout',[AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

//Forget process
Route::get('/forgot-password',[AuthController::class, 'showForgotForm'])->name('passwordForgotForm');
Route::post('/forgot-password', [AuthController::class, 'sendResetLink'])->name('password.email');

Route::get('/reset-password/{token}', [AuthController::class, 'showResetForm']);
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.update');


//Register
Route::get('/register',[RegisterController::class,'index'])->name('register.index'); 
    //google
Route::get('/auth/redirect/{provider}',[RegisterController::class,'authProviderRedirect']);
Route::get('/auth/{provider}/callback',[RegisterController::class,'socialAuthentication']);


//Entrance
Route::get('/entrance',[EntranceController::class,'index']);



