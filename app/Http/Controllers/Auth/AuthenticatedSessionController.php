<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Artisan;
use App\Http\Requests\Auth\LoginRequest;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();


        $user = Auth::user()->id;

        User::find($user)->update([
            'login_time' => Carbon::now(),
            'logged_in' => true,
        ]);

      //  Artisan::call("schedule:run");
        if (Auth::user()->hasAnyRole('admin')) {

            $route = route('admin-dashboard');
            return redirect()->intended($route);
        } else if (Auth::user()->hasAnyRole('customer')) {
            $route = route('customer-dashboard');
            return redirect()->intended($route);
        }
        //   return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $user = Auth::user()->id;
        User::find($user)->update([
            'logout_time' => Carbon::now(),
            'logged_in' => false,
        ]);
        Auth::guard('web')->logout();



        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
