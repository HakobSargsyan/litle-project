<?php 

namespace App\Services;

use App\Contracts\CategoryServiceInterface;
use App\Models\Category;
use App\Models\SubCategory;

class CategoryService implements CategoryServiceInterface{

	public function __construct(Category $category,SubCategory $subcategory){
		$this->category = $category;
		$this->subcategory = $subcategory;
	}
	public function getAllCategories(){
		return Category::get();
	}

	public function getAllCategoriesWithSubCategory(){
		return $this->category->with('subcategories')->get();
	}

	public function getSubCategoryById($id){
		return $this->subcategory->where('id', $id)->first();
	}
}