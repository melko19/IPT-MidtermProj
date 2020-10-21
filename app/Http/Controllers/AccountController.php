<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;

class AccountController extends Controller
{
    public function index() {

        $acc = Account::orderBy('user_id')->get();

        return view('accounts.index', ['accounts'=>$acc]);

    }
}
