<?php

namespace App\Http\Controllers;

use App\Models\Groups;
use App\Models\Users;
use App\User;
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
        $this->middleware('auth', ['except' => ['show']]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('home');
    }

    public function show()
    {
        $groups = Groups::all();
        return view('home.home', compact("groups"));
    }
    public function groups(Groups $id)
    {
        $group_id = $id->id;
        $users = User::where('group_id',$group_id)->get();
        return view('home.users')
            ->with('users',$users)
            ->with('group',$id);
    }
    public function users(Users $id)
    {

    }
}