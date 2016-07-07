<?php

use Illuminate\Database\Seeder;
use app\Modles\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('categories')->insert(
			[
				['category_name' => 'Գովազդ','path'=>'','title'=>'Գովազդ','created_at'=> \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=>\Carbon\Carbon::now()->toDateTimeString()],
				['category_name' => 'Դեղատներ','path'=>'','title'=>'Դեղատներ','created_at'=> \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=>\Carbon\Carbon::now()->toDateTimeString()],
				['category_name' => 'Առողջապահություն','path'=>'','title'=>'Առողջապահություն','created_at'=> \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=>\Carbon\Carbon::now()->toDateTimeString()],
				['category_name' => 'Շինարարություն և շինանյութեր','path'=>'','title'=>'Շինարարություն','created_at'=> \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=>\Carbon\Carbon::now()->toDateTimeString()],
				['category_name' => 'Ավտոպահեստամասեր և ավտոտեխսպասարկում','path'=>'','title'=>'Ավտոպահեստամասեր','created_at'=> \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=>\Carbon\Carbon::now()->toDateTimeString()],
				['category_name' => 'Մանկակակն հագուստ, խաղալիքներ','path'=>'','title'=>'Մանկակակն հագուստ','created_at'=> \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=>\Carbon\Carbon::now()->toDateTimeString()],
				['category_name' => 'Մաքրության ծառաություններ','path'=>'','title'=>'Մաքրության','created_at'=> \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=>\Carbon\Carbon::now()->toDateTimeString()],
				['category_name' => 'Հագուստ ու զարթեղեն','path'=>'','title'=>'Հագուստ','created_at'=> \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=>\Carbon\Carbon::now()->toDateTimeString()],
				['category_name' => 'Սարքավորումներ վարձակալութուն','path'=>'','title'=>'Սարքավորումներ','created_at'=> \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=>\Carbon\Carbon::now()->toDateTimeString()],
				['category_name' => 'Միջոցառումների կազմակերպում','path'=>'','title'=>'Միջոցառումներ','created_at'=> \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=>\Carbon\Carbon::now()->toDateTimeString()],
				['category_name' => 'Ֆինանսական ծառայություններ','path'=>'','title'=>'Ֆինանսական','created_at'=> \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=>\Carbon\Carbon::now()->toDateTimeString()],
				['category_name' => 'Սնունդ եւ խմիչքներ','path'=>'','title'=>'Սնունդ','created_at'=> \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=>\Carbon\Carbon::now()->toDateTimeString()],
				['category_name' => 'Ապրանքներ տան համար','path'=>'','title'=>'Ապրանքներ','created_at'=> \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=>\Carbon\Carbon::now()->toDateTimeString()],
				['category_name' => 'Նվերներ և Գրքեր','path'=>'','title'=>'Նվերներ','created_at'=> \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=>\Carbon\Carbon::now()->toDateTimeString()],
				['category_name' => 'Վարսավիրանոցներ և գեղեծկության սրահներ','path'=>'','title'=>'Վարսավիրանոցներ','created_at'=> \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=>\Carbon\Carbon::now()->toDateTimeString()],
				['category_name' => 'Հյուրանոցներ ','path'=>'','title'=>'Հյուրանոցներ','created_at'=> \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=>\Carbon\Carbon::now()->toDateTimeString()],
				['category_name' => 'Կենցաղային ծառայություններ','path'=>'','title'=>'Կենցաղային','created_at'=> \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=>\Carbon\Carbon::now()->toDateTimeString()],
				['category_name' => 'Տեղեկատվական տեխնոլոգիաներ','path'=>'','title'=>'Տեղեկատվական','created_at'=> \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=>\Carbon\Carbon::now()->toDateTimeString()],
				['category_name' => 'Լանշաֆտային դիզայն','path'=>'','title'=>'Լանշաֆտային','created_at'=> \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=>\Carbon\Carbon::now()->toDateTimeString()],
				['category_name' => 'Իրավաբանական ծառայություններ','path'=>'','title'=>'Իրավաբանական','created_at'=> \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=>\Carbon\Carbon::now()->toDateTimeString()],
				['category_name' => 'ԶԼՄ-ները','path'=>'','title'=>'ԶԼՄ','created_at'=> \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=>\Carbon\Carbon::now()->toDateTimeString()],
				['category_name' => 'Երաժշտություն','path'=>'','title'=>'Երաժշտություն','created_at'=> \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=>\Carbon\Carbon::now()->toDateTimeString()],
				['category_name' => 'Կենդանիների  բուժում','path'=>'','title'=>'Կենդանիներ','created_at'=> \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=>\Carbon\Carbon::now()->toDateTimeString()],
				['category_name' => 'Անշարժ գույք վաճառք  և վարձակալություն','path'=>'','title'=>'Անշարժ','created_at'=> \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=>\Carbon\Carbon::now()->toDateTimeString()],
				['category_name' => 'Հանգիստ','path'=>'','title'=>'Հանգիստ','created_at'=> \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=>\Carbon\Carbon::now()->toDateTimeString()],
				['category_name' => 'Ռեստորան և սրճարաններ','path'=>'','title'=>'Ռեստորան','created_at'=> \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=>\Carbon\Carbon::now()->toDateTimeString()],
				['category_name' => 'Ուսումնական հաստատություններ և դպրոցներ','path'=>'','title'=>'Ուսումնական','created_at'=> \Carbon\Carbon::now()->toDateTimeString(),'updated_at'=>\Carbon\Carbon::now()->toDateTimeString()],                              
			]
		);
    }
}