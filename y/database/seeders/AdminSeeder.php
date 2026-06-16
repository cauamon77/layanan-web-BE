<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Seed data admin ke tabel tbl_admin.
     */
    public function run(): void
    {
        DB::table('tbl_admin')->updateOrInsert(
            ['email' => 'admin@galunggung.id'],
            [
                'nama_admin' => 'Admin Galunggung',
                'email' => 'admin@galunggung.id',
                'kata_sandi' => Hash::make('admin123'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
