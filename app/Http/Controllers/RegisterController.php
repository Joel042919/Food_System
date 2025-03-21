<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Client;
use App\Models\User;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.register');
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

    /** 
     * Function: authProviderRedirect
     * Description: This function will redirect to the Provider
     * @param NA
     * @return void
    */
    
    public function authProviderRedirect($provider){
        session()->save();

        //Debug with Log and session
        //The was in the url domain 127.0.0.1 vs localhost
        //So i change the APP_URL = http://127.0.0.1:8000
        // And google callback to same domain 127.0.0.1:800
        /*Log::info('📌 Session Before Redirect:', [
            'session_id' => session()->getId(),
            'session_data' => session()->all()
        ]);*/


        if($provider){
            return Socialite::driver($provider)->redirect();
        }
        abort(404);
        

        //this is insecure because we can be attack by csrf
        //csrf => the website create and store a session cookie in your browser
        //the victim open a link o pishing email and the attacker 
        //gets and uses that credentials for send request to server.
        //The server accepts the request
        /*return Socialite::driver('google')->stateless()->redirect();*/

        
    }

    /**
     * Function: googleAuthentication
     * Description: This function will authenticate the user through the Google Account
     * @param NA
     * @return void
     */

    public function socialAuthentication($provider){
        /*$socialUser = Socialite::driver($provider)->user();
        dd($socialUser);*/

        
        try{
            if($provider){
                $socialUser = Socialite::driver($provider)->user();
    
                //Check if user already exists
                $user = User::where('auth_provider_id', $socialUser->id)->first();
        
                if($user){
                    Auth::login($user);
                    return redirect('/entrance');
                }else{
                    $client = Client::create([
                        'idClient'=>str()->random(20),
                        'names'=>$socialUser->user['given_name'],
                        'surnames'=>$socialUser->user['family_name'],
                        'picture'=>$socialUser->user['picture'],
                    ]);
        
                    //Create a new user associated with the client
                    $user = User::create([
                        'username'=>$socialUser->email,
                        'password'=>Hash::make(str()->random(32)),
                        'owner_id'=>$client->idClient,
                        'owner_type'=>Client::class,
                        'auth_provider'=>$provider,
                        'auth_provider_id'=>$socialUser->id,
                    ]); 
        
                    // Log in the new user
                    Auth::login($user);
                    return redirect('/entrance');
                }
            }
            abort(404);
            
        }catch(Exception $e){
            dd($e);
        }
        


        //Debug with Log and session
        //The was in the url domain 127.0.0.1 vs localhost
        //So i change the APP_URL = http://127.0.0.1:8000
        // And google callback to same domain 127.0.0.1:800

       /*Log::info('📌 Session After Redirect:', [
            'session_id' => session()->getId(),
            'session_data' => session()->all()
        ]);

        try {
            $socialUser = Socialite::driver('google')->user();
            Log::info('✅ Google User Data:', ['user' => $socialUser]);

            return response()->json($socialUser);
        } catch (\Exception $e) {
            Log::error('❌ Google Authentication Failed:', ['error' => $e->getMessage()]);
            return response()->json(['error' => 'Google authentication failed'], 500);
        }*/


        //this is insecure because we can be attack by csrf
        //csrf => the website create and store a session cookie in your browser
        //the victim open a link o pishing email and the attacker 
        //gets and uses that credentials for send request to server.
        //The server accepts the request
        /*$googleUser = Socialite::driver('google')->stateless()->user();*/
        // dd($googleUser);
    }
}
