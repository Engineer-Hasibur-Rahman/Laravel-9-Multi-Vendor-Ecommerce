<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vendor;

class VendorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //vendor seeder for test data
        $vendorRecords = [
            [
                'id'=>2,
                'name'=>'John',
                'address'=>'R-10, H-20, New Work, USA',
                'city'=>1,
                'state'=>1,
                'country'=>1,
                'pincode'=>'110022',
                'mobile'=>'99002589632',
                'email'=>'vendortest2@gmail.com',
                'status'=>0,
            ]
        ];
        Vendor::insert($vendorRecords);
    }
}
