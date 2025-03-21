<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use App\Mail\ResetPasswordMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;



class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function verify(Request $request){
        $messages = [
            'username.required'=>'The username field is required',
            'password.required'=>'The password field is required',
        ];

        //Validate the request
        $validator = Validator::make($request->all(),[
            'username'=>'required',
            'password'=>'required',
        ], $messages);

        /*$validated = $request->validate([
            'username'=>'required|string',
            'password'=>'required',
        ]);*/


        //Check if validation fails
        if($validator->fails()){
            return redirect('login')
                    ->withErrors($validator)
                    ->withInput();
        }

        //Login Logic
        $user = User::where('username', $request->username)->first();
        
        if($user && Hash::check($request->password, $user->password)){
            if($user->owner && $user->owner instanceof Client){
                return redirect('entrance');
            }else{
                return dd("Dear worker our platform is still in progress of construction");
            } 
        }
        return redirect('login')
                    ->withErrors(['login_error'=>'Invalid username or password'])
                    ->withInput();
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function showRegisterForm(){
        return view('auth.register');
    }

    public function register(Request $request){

    }

    public function showForgotForm(){
        return view('auth.passwordReset.forgot-password');
    }


    public function sendResetLink(Request $request){
        $messages = [
            'email.required'=>'This email field is required',
            'email.exists'=>'This email does not exist like a username',
        ];

        /*$request->validate([
            'email'=>'required|email|exists:users_rest,username',
        ]);*/

        $validator = Validator::make($request->all(),[
            'email'=>'required|email|exists:users_rest,username',
        ],$messages);

        if($validator->fails()){
            return redirect()->route('passwordForgotForm')
                    ->withErrors($validator)
                    ->withInput();
        }

        //Generate Token
        $user = User::where('username',$request->email)->first();
        
        $token = Password::createToken($user); //it creates the token, get all the columns and save it in password_Reset_Tokens table
        

        //Store token in passsword_resets table
        /*\DB::table('password_reset_tokens')->insert([
            'email'=>$request->email,
            'token'=>$token,
            'created_at'=>now(),
        ]);*/
        
        Mail::to($request->email)->send(new ResetPasswordMail($token));
        

        return back()->with('message','Password reset link sent to your email!');
    }

    public function showResetForm(Request $request){
        return view('auth.passwordReset.changePassword');
    }

    public function resetPassword(Request $request){
        $request->validate([
            'token'=>'required',
            'password'=>'required|min:8|confirmed',
        ]);

        $resetRecords = DB::table('password_reset_tokens')->get();

        $resetRecord = null;

        // Find the correct record by checking the hashed token
        foreach ($resetRecords as $record) {
            if (Hash::check($request->token, $record->token)) {
                $resetRecord = $record;
                break;
            }
        }
        
        if (!$resetRecord) {
            return back()->withErrors(['error' => 'Invalid or expired token.']);
        }

        $user = User::where('username',$resetRecord->email)->first();

        $user->update(['password'=>Hash::make($request->password)]);

        // Delete the reset token after use
        DB::table('password_reset_tokens')->where('email', $resetRecord->email)->delete();

        return redirect()->route('login')->with('status', 'Password reset successful!');
    }

    public function create2(Request $request){
        /*$validated = $request->validate([
            'username'=>'required|string',
            'password'=>'required'
        ]);*/

        $employee = Employee::create([
            'idEmployee'=>'EMP002',
            'names'=>'Andrea',
            'surnames'=>'Grr',
            'idDepartment'=>1,
            'status'=>1,
        ]);

        $user1 = new User([
            'username'=>'andreGr',
            'password'=>Hash::make('1234'),
        ]);

        $employee->user()->save($user1);


        // Create a client
        $client = Client::create([
            'idClient' => 'CLI002',
            'names' => 'Samuel Julian',
            'surnames' => 'Font',
        ]);

        // Create a user and associate it with the client
        $user = new User([
            'username' => 'samuJu',
            'password' => Hash::make('1234'),
        ]);

        $client->user()->save($user);
        dd($user);
    }


}
