<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     *
     * @return \Illuminate\View\View
     */
    public function showForgotForm()
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function sendResetLink(Request $request)
    {
        $request->validate([
            'email' => [
                'required',
                'email',
                function ($attribute, $value, $fail) {
                    // Check if the email exists in the User model
                    $emailExists = User::where('email', $value)->exists();

                    if (!$emailExists) {
                        $fail("The $attribute doesn't exists.");
                    }
                },
            ],
        ]);

        // dd($request->validate);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $token = \Str::random(64);
        \DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);

        $action_link = route('reset.password.form', ['token' => $token, 'email' => $request->email]);
        $user = User::where('email', $request->email)->first(); // Retrieve the User object based on the email

        if ($user) {
            $user_name = $user->name; // Retrieve the name property of the User object

            \Mail::send('auth/reset-password', ['action_link' => $action_link, 'user_name' => $user_name], function ($message) use ($request, $user_name) {
                $message->from('bertjorak@bertjorak.com', 'Bertjorak');
                $message->to($request->email, 'your name')
                    ->subject('Reset Password');
            });
        } else {
            // Handle the case when no user is found with the provided email
            // For example, you can show an error message or redirect the user
        }

        return back()->with('success', 'We have sent your password reset link!');
    }
}