<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('roles')->insert([
            ['name' => 'admin', 'display_name' => 'System Management'],
            ['name' => 'guest', 'display_name' => 'Customer'],
            ['name' => 'content', 'display_name' => 'Edit Content'],
        ]);
    }
}