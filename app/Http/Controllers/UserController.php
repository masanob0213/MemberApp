<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        //$user = Auth::user();
        $name = '' . Auth::user()->name . '';
        $tel = '' . Auth::user()->tel . '';
        $email = '' . Auth::user()->email . '';
        //$items = User::all();
        //$items = User::paginate(4);
        //$param = ['items' => $items, 'user' => $user];
        return view('index', ['name' => $name, 'tel' => $tel, 'email' => $email,]);
    }
}
