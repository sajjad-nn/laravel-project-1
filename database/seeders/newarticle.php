<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;

class newarticle extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker=\faker\factory::create();
        foreach(range(1,16)as $item){
            DB::table('articles')->insert([
                'title'=>$faker->text(50),
                'slug'=>$faker->slug(),
                'number'=>$faker->paragraph(rand(1,12)),
                'email'=>$faker->text(40),
                'created_at'=>now(),
                'updated_at'=>now()
    
            ]);
          };
   

        
    }
}
