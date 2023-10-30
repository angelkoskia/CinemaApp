<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
class UserLogin extends Controller
{
    public function showRegisterPage(){
        return view('frontend.src.register');
    }
    public function showLoginPage(){
        return view('frontend.src.login');
    }
    public function register(Request $request)
    {
        $incomingFields = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', Rule::unique('users', 'email')],
            'password' => 'required'
        ]);

        $incomingFields['password'] = bcrypt($incomingFields['password']);
        $user = User::create($incomingFields);

        // Send the email verification notification to the user
        $user->sendEmailVerificationNotification();

        auth()->login($user);
        return redirect('/');
    }
    public function showVerificationNotice(Request $request)
    {
        return $request->user()->hasVerifiedEmail()
            ? redirect()->route('home')
            : view('auth.verify-email');
    }

    public function sendVerificationEmail(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect('/');
        }

        $request->user()->sendEmailVerificationNotification();

        return back()->with('status', 'verification-link-sent');
    }

    public function verifyEmail(EmailVerificationRequest $request)
    {
        $request->fulfill();

        return redirect('/')->with('status', 'email-verified');
    }

    public function login(Request $request){
           $incomingFields= $request->validate([
                'email'=>'required',
                'password'=>'required'
            ]);

           if(auth()->attempt(['email'=>$incomingFields['email'], 'password'=>$incomingFields['password']]))
               {
                   $request->session()->regenerate();
               }
           return redirect('/');
    }

    public function logout(){
        auth()->logout();
        return redirect('/');
    }
}
