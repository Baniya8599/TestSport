<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

/**
 * Class LoginController
 * @package App\Http\Controllers
 */
class LoginController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function index()
    {
        if (auth()->user()) {
            return redirect('/sports');
        }
        return view('sports/login');
    }


    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public
    function login()
    {
        request()->validate([
            'name' => ['required', 'min:3'],
            'password' => ['required', 'min:3']
        ]);
        if (auth()->attempt(request(['name', 'password']))) {
            return redirect('/sports');
        }
        session()->flash('auth', 'user not found');
        return redirect('/sports/login');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout()
    {
        if (auth()->user()) {
            auth()->logout();
            session()->flash('auth', 'user is logged out');
        }
        return redirect('/sports/login');
    }
}
