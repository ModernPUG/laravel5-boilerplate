<?php

namespace App\Http\Controllers;

use Vinkla\Alert\Facades\Alert;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('web');
        $this->middleware('guest');
    }

    public function index()
    {
        Alert::danger('Laravel 5 보일러플레이트');

        return view('welcome');
    }
}
