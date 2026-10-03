<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            ['username' => 'luka77', 'full_name' => 'Luka Doncic', 'role' => 'Administrator'],
            ['username' => 'tatum0', 'full_name' => 'Jayson Tatum', 'role' => 'Cashier'],
            ['username' => 'sgalex', 'full_name' => 'Shai Gilgeous-Alexander', 'role' => 'Cashier'],
            ['username' => 'embiid21', 'full_name' => 'Joel Embiid', 'role' => 'Inventory Staff'],
            ['username' => 'wemby1', 'full_name' => 'Victor Wembanyama', 'role' => 'Supervisor'],
        ];

        return view('users/index', [
            'title' => 'User Accounts',
            'users' => $users,
        ]);
    }
}
