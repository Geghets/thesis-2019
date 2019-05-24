<?php

namespace App\Http\Controllers;

use App\Models\Groups;
use Illuminate\Http\Request;

class GroupsController extends Controller
{
    public function show()
    {
        $groups = Groups::all();
        return view('.home', compact('groups'));
    }
}