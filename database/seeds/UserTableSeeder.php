<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'Root',
            'email' => 'root@nakshipalli.com',
            'password' => bcrypt('rootadmin'),
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Vendor',
            
            'email' => 'vendor@twinstech.com',
            'password' => bcrypt('rootauthor'),
        ]);
    

       
    }
}
