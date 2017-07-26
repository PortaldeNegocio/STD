<?php

namespace STD\Http\Controllers;

use STD\Exceptions\AlreadySyncedException;
use STD\Exceptions\ConnectionNotAcceptedException;
use STD\Exceptions\CredentialsDoNotMatchException;
use STD\Exceptions\EmailAlreadyInSystemException;
use STD\Exceptions\EmailNotProvidedException;
use STD\Exceptions\NoActiveAccountException;
use STD\Exceptions\TransactionFailedException;
use STD\Exceptions\UnauthorizedException;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('pages.home');

    }

}
