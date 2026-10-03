<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AccountSeeder extends Seeder
{
    public function run(): void
    {
        $createdAt = '2026-10-03 00:00:00';

        $this->db->table('customers')->insertBatch([
            ['full_name' => 'LeBron James', 'email' => 'lebron.james@example.com', 'phone' => '0917 555 0101', 'created_at' => $createdAt],
            ['full_name' => 'Stephen Curry', 'email' => 'stephen.curry@example.com', 'phone' => '0918 555 0102', 'created_at' => $createdAt],
            ['full_name' => 'Kevin Durant', 'email' => 'kevin.durant@example.com', 'phone' => '0919 555 0103', 'created_at' => $createdAt],
            ['full_name' => 'Giannis Antetokounmpo', 'email' => 'giannis.antetokounmpo@example.com', 'phone' => '0920 555 0104', 'created_at' => $createdAt],
            ['full_name' => 'Nikola Jokic', 'email' => 'nikola.jokic@example.com', 'phone' => '0921 555 0105', 'created_at' => $createdAt],
        ]);

        $this->db->table('users')->insertBatch([
            ['username' => 'luka77', 'full_name' => 'Luka Doncic', 'created_at' => $createdAt],
            ['username' => 'tatum0', 'full_name' => 'Jayson Tatum', 'created_at' => $createdAt],
            ['username' => 'sgalex', 'full_name' => 'Shai Gilgeous-Alexander', 'created_at' => $createdAt],
            ['username' => 'embiid21', 'full_name' => 'Joel Embiid', 'created_at' => $createdAt],
            ['username' => 'wemby1', 'full_name' => 'Victor Wembanyama', 'created_at' => $createdAt],
        ]);
    }
}
