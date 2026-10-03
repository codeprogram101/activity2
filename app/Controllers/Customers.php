<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = [
            ['full_name' => 'LeBron James', 'email' => 'lebron.james@example.com', 'phone' => '0917 555 0101'],
            ['full_name' => 'Stephen Curry', 'email' => 'stephen.curry@example.com', 'phone' => '0918 555 0102'],
            ['full_name' => 'Kevin Durant', 'email' => 'kevin.durant@example.com', 'phone' => '0919 555 0103'],
            ['full_name' => 'Giannis Antetokounmpo', 'email' => 'giannis.antetokounmpo@example.com', 'phone' => '0920 555 0104'],
            ['full_name' => 'Nikola Jokic', 'email' => 'nikola.jokic@example.com', 'phone' => '0921 555 0105'],
        ];

        return view('customers/index', [
            'title' => 'Customer Accounts',
            'customers' => $customers,
        ]);
    }
}
