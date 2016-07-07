<?php

use Illuminate\Database\Seeder;
use app\Modles\SubCategory;

class SubCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('subcategories')->insert(
			[
				['sub_category_name' => 'հայլուր','category_id'=>28,'path'=>'','title'=>'Գովազդ','created_at'=> \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=>\Carbon\Carbon::now()->toDateTimeString()],
				['sub_category_name' => 'սպորտ լուր','path'=>'','category_id'=>28,'title'=>'Դեղատներ','created_at'=> \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=>\Carbon\Carbon::now()->toDateTimeString()],
				['sub_category_name' => 'CNN','path'=>'','category_id'=>28,'title'=>'Դեղատներ','created_at'=> \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=>\Carbon\Carbon::now()->toDateTimeString()], 
				['sub_category_name' => 'Երգեր','path'=>'','category_id'=>28,'title'=>'Դեղատներ','created_at'=> \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=>\Carbon\Carbon::now()->toDateTimeString()], 
				['sub_category_name' => 'ֆուտբոլ','path'=>'','category_id'=>28,'title'=>'Դեղատներ','created_at'=> \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=>\Carbon\Carbon::now()->toDateTimeString()],            
			]
		);
    }
}