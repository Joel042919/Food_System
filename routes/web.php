<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EntranceController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MeseroController;
use App\Http\Controllers\CajeroController;

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


//mesero
Route::prefix('mesero')->group(function () {
    Route::get('/', [MeseroController::class, 'index'])->name('meseroIndex');
    Route::post('/order', [MeseroController::class, 'makeOrder']);
    Route::get('/filter-by-category', [MeseroController::class, 'filterByCategory']);
});
/*Route::get('/indexMesero',[MeseroController::class,'index'])->name('meseroIndex');
Route::post('/order',[MeseroController::class,'makeOrder']);
    //Filter by category
Route::get('/filterByCategory',[MeseroController::class,'filterByCategory']);*/

//Cajero
Route::get('cajero/index',[CajeroController::class,'index'])->name('cajeroIndex');
Route::get('cajero/factura/{idPedido}',[CajeroController::class,'facturar'])->name('verFactura');
Route::post('cajero/pagar',[CajeroController::class,'pagarPedido'])->name('pagarPedido');
Route::get('cajero/orderHistory',[CajeroController::class,'orderHistory'])->name('orderHistory');
Route::get('cajero/getOrderHistory',[CajeroController::class,'getHistory']);