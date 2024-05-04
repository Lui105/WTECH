<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        Log::info('Registering user', $request->all());
        $validatedData = $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'phone_number' => 'required|unique:users,phone_number',
                'password' => 'required|min:6|confirmed'
        ]);

        Log::info('Validation passed');

        try {
                $user = User::create([
                    'first_name' => $validatedData['first_name'],
                    'last_name' => $validatedData['last_name'],
                    'email' => $validatedData['email'],
                    'phone_number' => $validatedData['phone_number'],
                    'password' => Hash::make($validatedData['password']),
                    'role' => 'user'
                ]);

                Auth::login($user);
                return redirect()->intended('dashboard');
            } catch (\Exception $e) {
                Log::error('Error creating user: ' . $e->getMessage());
                return back()->withErrors(['error' => 'Unable to create user.']);
            }
//         event(new Registered($user));
//
//         Auth::login($user);
//
//         return redirect(route('dashboard', absolute: false));
    }
}
