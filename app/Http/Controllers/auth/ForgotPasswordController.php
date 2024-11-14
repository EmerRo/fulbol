<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;
use App\Mail\ResetPasswordMail;

class ForgotPasswordController extends Controller
{
    public function showForgotForm()
    {
        return view('seccion.forgot-password');
    }

    public function sendResetLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        $code = strtoupper(Str::random(6));
        $email = $request->email;

        // Guardar el código en cache por 15 minutos
        Cache::put('password_reset_' . $email, $code, now()->addMinutes(15));

        // Enviar el email
        Mail::to($email)->send(new ResetPasswordMail($code));

        return redirect()->route('password.reset', ['email' => $email])
            ->with('status', 'Te hemos enviado un código de verificación por correo electrónico.');
    }

    public function showResetForm(Request $request)
    {
        return view('seccion.reset-password', ['email' => $request->email]);
    }

    public function reset(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'code' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $storedCode = Cache::get('password_reset_' . $request->email);

        if (!$storedCode || $storedCode !== $request->code) {
            return back()->withErrors(['code' => 'El código de verificación es inválido o ha expirado.']);
        }

        $user = User::where('email', $request->email)->first();
        $user->password = bcrypt($request->password);
        $user->save();

        Cache::forget('password_reset_' . $request->email);

        return redirect()->route('login')
                ->with('status', '¡Tu contraseña ha sido actualizada correctamente!');

    }
}
