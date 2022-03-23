<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BasicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('basics')->insert([
            'name' => 'Phone Caseus',
            'contact_no'=> '',
            'phone'=> '',
            'logo'=> '',
            'website'=> 'wwww.example.com',
            'delivery_cost1'=> '50',
            'delivery_cost2'=> '60',
            'inside_details' => 'demo',
            'outside_details' =>'demo',
            'header_code'=>'Phone Caseus',
            'footer_code'=>'copyrightⒸPhone Caseus',
            
        ]);
        
    
    }
}
