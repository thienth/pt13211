<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cates = [
        	['name' => 'Thể thao'],
        	['name' => 'Chính trị'],
        	['name' => 'Giáo dục'],
        	['name' => 'Văn hoá'],
        	['name' => 'Xã hội'],
        ];

        DB::table('categories')->insert($cates);
    }
}
