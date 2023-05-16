<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {
  public function __invoke (LoginRequest $request) {
    $input = $request -> validated();

    if (!Auth::attempt($input)) {
      return 'error';
    }

    return auth() -> user();
  }
}
