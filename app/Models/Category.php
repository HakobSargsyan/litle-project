<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'category_name', 'path', 'title', 'description',
    ];

    public function subcategories()
    {
        return $this->hasMany('App\Models\SubCategory');
    }
}
