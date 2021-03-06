<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * GitHubの認証ページヘユーザーをリダイレクト
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
        // dd(Socialite::driver('github')->redirect());
    }

    /**
     * GitHubからユーザー情報を取得
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        // $user = Socialite::driver('github')->user();
        try {
            $user = Socialite::driver('github')->user();
        } catch (\Exception $e) {
            return redirect('/login');
        }
        $authUser = $user->name;
        $authUser = \App\User::firstOrCreate(['email'=> $user->getEmail(),
        'name'=>$user->getNickName()]);
        auth()->login($authUser);
        return redirect()->to('/');
    }

     /**
     * Googleの認証ページヘユーザーをリダイレクト
     *
     * @return \Illuminate\Http\Response
     */
    public function googleRedirectToProvider()
    {
        return Socialite::driver('google')->redirect();
        // dd(Socialite::driver('github')->redirect());
    }

    /**
     * GitHubからユーザー情報を取得
     *
     * @return \Illuminate\Http\Response
     */
    public function googleHandleProviderCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect('/login');
        }
        $authUser = $user->name;
        $authUser = \App\User::firstOrCreate(['email'=> $user->getEmail(),
        'name'=>$user->getName()]);
        auth()->login($authUser);
        return redirect()->to('/');
    }

    public function testLogin(Request $request)
    {
        // dd($request);
        // $user = User::where('email',$request->email)->get();
        $user = \App\User::firstOrCreate(['email'=> $request->email,'name'=>$request->name]);
        auth()->login($user);
        return ('200');
    }

    public function redirectPath()
    {
        return '/';
    }


}
