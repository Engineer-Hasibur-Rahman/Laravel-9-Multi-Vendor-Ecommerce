<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VendorBusinessDetails;
class VendorBusineesDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vendorBusinessRecords = [
            [
                'id'=>1,
                'vendor_id'=>3,                
                'shop_code'=>'#5656',                
                'status'=>0,
            ]
        ];
        VendorBusinessDetails::insert($vendorBusinessRecords);
    }
}
