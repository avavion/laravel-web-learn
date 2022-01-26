<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
    public function index()
    {
        $subscriptions = Subscription::all();

        $users = User::all();
        $roles = Role::all();

        return view('pages.home', [
            'subscriptions' => $subscriptions,
            'users' => $users,
            'roles' => $roles
        ]);
    }

    public function createUser(Request $request)
    {


        $user = User::query()->create([
            'first_name' => 'Алан',
            'last_name' => 'Богов',
            'password' => Hash::make('avavion'),
            'email' => 'avavionmvm@gmail.com',
            'role_id' => 1
        ]);
    }
}
