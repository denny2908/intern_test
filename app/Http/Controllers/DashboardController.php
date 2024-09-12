<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $users = user::count();

        return view('dashboard.dashboard', [
            'users' => $users,
        ]);
    }
}
