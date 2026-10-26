<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            [
                'id' => 1,
                'name' => 'Admin User',
                'username' => 'admin',
                'email' => 'admin@example.com',
                'role' => 'Administrator',
            ],
            [
                'id' => 2,
                'name' => 'Cashier One',
                'username' => 'cashier1',
                'email' => 'cashier1@example.com',
                'role' => 'Cashier',
            ],
            [
                'id' => 3,
                'name' => 'Cashier Two',
                'username' => 'cashier2',
                'email' => 'cashier2@example.com',
                'role' => 'Cashier',
            ],
            [
                'id' => 4,
                'name' => 'Inventory Staff',
                'username' => 'inventory1',
                'email' => 'inventory@example.com',
                'role' => 'Inventory Staff',
            ],
            [
                'id' => 5,
                'name' => 'Manager User',
                'username' => 'manager',
                'email' => 'manager@example.com',
                'role' => 'Manager',
            ],
        ];

        return view('users.index', compact('users'));
    }
}