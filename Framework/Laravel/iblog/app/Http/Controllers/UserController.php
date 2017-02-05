<?php

namespace App\Http\Controllers;

use App\User;

use App\Repositories\UserRepository;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Http\Requests;

class UserController extends Controller
{
    //
    protected $users;

    public function __construct(UserRepository $users)
    {
      $this->users = $users;
    }

    public function show($id)
    {      
      $user = $this -> users -> find($id);
      return view('user.profile',['user' => $user]);
    }
}
