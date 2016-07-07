<?php

namespace App\Http\Controllers;

use App\Contracts\CategoryServiceInterface;

class CategoriesController extends Controller
{
    public function __construct(CategoryServiceInterface $category)
    {
        $this->data = $category->getAllCategoriesWithSubCategory();
    }
    public function subcategory($id, CategoryServiceInterface $category)
    {
        $subCat = $category->getSubCategoryById($id);

        return view('subcategories.subcategory', ['data' => $this->data, 'subCat' => $subCat]);
    }
}
