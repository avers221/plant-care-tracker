<?php

namespace App\Auth\Controllers;

use App\Core\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class EmailVerificationPromptController extends Controller
{
    /**
     * Show the email verification prompt page.
     */
    public function __invoke(Request $request): RedirectResponse|Response
    {
        return $request->user()->hasVerifiedEmail()
                    ? redirect()->intended(route('profile.index', absolute: false))
                    : Inertia::render('auth/VerifyEmail', ['status' => $request->session()->get('status')]);
    }
}
