<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;

class articletable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          $faker=\faker\factory::create();
        foreach(range(1,16)as $item){
            DB::table('userids')->insert([
                'title2'=>$faker->text(50),
                'slug2'=>$faker->slug(),
                'number2'=>$faker->paragraph(rand(1,12)),
                'created_at'=>now(),
                'updated_at'=>now()
    
            ]);
          };
    }
}
