<?php 
namespace App\Contracts;

interface CategoryServiceInterface {
	public function getAllCategories();
	public function getAllCategoriesWithSubCategory();
	public function getSubCategoryById($id);
}