<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // admin seeder data add 
    $admin_records =[          
            'id' =>3,
            'vendor_id' => 2,
            'name' => 'Test vendor',
            'type' => 'vendor',
            'mobile' => '01784677515',
            'email' => 'v3@gmail.com2',
            'password' => Hash::make('12345678'),
            'image' => '',
            'status' => '1',
        ];
            Admin::insert($admin_records);
    }
}
