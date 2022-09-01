<?php

namespace App\Http\Controllers;

use App\Repositories\CRUD\AuthRepository;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    private $authRepository;

    public function __construct(AuthRepository $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    public function register(Request $request){
        return $this->authRepository->register($request);
    }

}
