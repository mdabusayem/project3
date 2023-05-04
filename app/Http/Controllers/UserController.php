<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\User\UserRepositoryInterface;

class UserController extends Controller
{
    protected $user;

    public function __construct(UserRepositoryInterface $userRepository)
    {

        $this->user = $userRepository;
    }

    public function index()
    {
        
        $users = $this->user->all();

        return view('user.index', compact('users'));
    }
}