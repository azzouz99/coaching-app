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
            $messages = [
            'name.required' => __('Le nom est requis.'),
            'email.required' => __('L\'adresse email est requise.'),
            'email.email' => __('Veuillez entrer une adresse email valide.'),
            'email.unique' => __('Cette adresse email est déjà utilisée.'),
            'password.required' => __('Le mot de passe est requis.'),
            'diploma.required' => __('Le diplôme est requis.'),
            'password.confirmed' => __('Les mots de passe ne correspondent pas.'),
            'password.min' => __('Le mot de passe doit contenir au moins :min caractères.'),
        ];
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'diploma' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ], $messages);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'diploma' => $request->diploma,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
