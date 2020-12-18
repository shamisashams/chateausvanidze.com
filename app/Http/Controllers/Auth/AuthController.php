<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Request\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Services\AuthService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;


class AuthController extends Controller
{
    protected $service;

    public function __construct(AuthService $service)
    {
        $this->service = $service;
    }
    /**
     * Show specified view.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function loginView()
    {
        return view('admin.auth.login');
    }

    /**
     * Authenticate login user.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login(LoginRequest $request)
    {
        if (!Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            $error = \Illuminate\Validation\ValidationException::withMessages([
                'auth' => [__('validation.wrong_email_or_password')],
            ]);
            throw $error;
        }
        if(Auth::user()->can('isAdmin')){
            return redirect(route('adminHome',app()->getLocale()));
        }else{
            return redirect(route('welcome',app()->getLocale()));
        }

    }
    // Facebook Sociallite
    public function facebook(){
        return Socialite::driver('facebook')->redirect();
    }
    public function facebookredirect()
    {
        $user = Socialite::driver('facebook')->stateless()->user() ?? null;
        if ($user) {
            $user = User::firstOrCreate([
                'email' => $user->email
            ], [
                'name' => $user->name,
                'email' => $user->email,
                'password' => Hash::make(Str::random(24))
            ]);
            Auth::login($user);
        }
        return redirect(route('welcome',app()->getLocale()));
    }
    // Google Sociallite
    public function google(){
        return Socialite::driver('google')->redirect();
    }
    public function googleredirect()
    {
    
        $user = Socialite::driver('google')->user();
        $user = User::firstOrCreate([
            'email' => $user->email
        ], [
            'name' => $user->name,
            'email' => $user->email,
            'password' => Hash::make(Str::random(24))
        ]);
        Auth::login($user);
        return redirect(route('welcome',app()->getLocale()));
    }

    public function register($locale, RegisterRequest $request)
    {
        $data = $request->only([
            'first_name',
            'last_name',
            'email',
            'password',
        ]);
        $this->service->store($locale, $data);
        return redirect(route('welcome',app()->getLocale()));

    }

    /**
     * Logout user.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        if(Auth::user()){
            Auth::logout();
        }
        return redirect()->route('welcome',app()->getLocale());
    }
}
