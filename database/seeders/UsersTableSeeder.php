<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'email' => 'admin@gmail.com',
                'email_verified_at' => NULL,
                'id' => 1,
                'image' => '854904119.jpg',
                'name' => 'Admin user',
                'password' => '$2y$10$nB6oDZ1/NfGCxZllu./TNeBJNQsgTqYaJd8Dd6WzYp2O6Cpf3eISu',
                'phone' => NULL,
                'remember_token' => NULL,
                'role' => 'admin',
                'status' => 'active',
                'updated_at' => '2023-12-13 05:07:52',
                'username' => 'adminUser',
            ),
            1 => 
            array (
                'created_at' => NULL,
                'email' => 'vendor@gmail.com',
                'email_verified_at' => NULL,
                'id' => 2,
                'image' => '1695783498.jpg',
                'name' => 'vendor user',
                'password' => '$2y$10$9e2Rz8KxHBVjTZLRtlbTvOhS//ZABtkAvHAXAm5tT9TGTJsveKyj.',
                'phone' => NULL,
                'remember_token' => NULL,
                'role' => 'vendor',
                'status' => 'active',
                'updated_at' => '2023-12-13 06:45:09',
                'username' => 'vendorUser',
            ),
            2 => 
            array (
                'created_at' => NULL,
                'email' => 'user@gmail.com',
                'email_verified_at' => NULL,
                'id' => 3,
                'image' => '118190466.jpeg',
                'name' => 'user',
                'password' => '$2y$10$T9ALptRNeOJQfg6sKCVULOhPJv/fxLFb9H0knVBivrM4XZfwQVEsq',
                'phone' => NULL,
                'remember_token' => NULL,
                'role' => 'user',
                'status' => 'active',
                'updated_at' => '2023-12-13 06:13:12',
                'username' => 'user',
            ),
            3 => 
            array (
                'created_at' => '2023-11-21 07:00:01',
                'email' => 'test@gmail.com',
                'email_verified_at' => NULL,
                'id' => 4,
                'image' => NULL,
                'name' => 'test',
                'password' => '$2y$10$mrgFHBi7ExJNu8r.6WyBB.tn6N1M7zGi2J8nBYPtp2OwDvV9FkJJi',
                'phone' => NULL,
                'remember_token' => 'nitjFmrMbP3XF1zYyWlTyF4f9BdSrTj41fdr8Iw98TpOgTbyTwgm8ijkNHxo',
                'role' => 'user',
                'status' => 'active',
                'updated_at' => '2023-11-23 11:38:33',
                'username' => NULL,
            ),
        ));
        
        
    }
}