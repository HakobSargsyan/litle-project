<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{

	protected $table = 'subcategories';

    protected $fillable = [
        'sub_category_name', 'path', 'title','description','category_id'
    ];

    public function subcategories(){
    	return $this->belongsTo('App\Models\Category');
    }
}
