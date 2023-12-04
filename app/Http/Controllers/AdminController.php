<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
  public function login()
  {
    if (Auth::check()) {
      return to_route('admin');
    } else {
      return view('admin/login');
    }
  }
  public function auth(LoginFormRequest $request)
  {
    if (Auth::attempt($request->validated())) {
      return to_route('admin');
    } else {
      return redirect()->back()->withErrors([
        'login' => 'Paizão, você não tem acesso'
      ]);
    }
  }
  public function index()
  {
    return view('admin/index');
  }
}
