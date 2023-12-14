<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'icon' => 'fas fa-fire',
                'id' => 1,
                'menu_name_bn' => 'ড্যাশবোর্ড',
                'menu_name_en' => 'Dashboard',
                'order_by' => 1,
                'parent_id' => NULL,
                'route_name' => 'admin.dashboard ',
                'type' => 2,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}