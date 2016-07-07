<?php

namespace App\Http\Controllers;

use App\Contracts\CategoryServiceInterface;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CategoryServiceInterface $category)
    {
        $data = $category->getAllCategoriesWithSubCategory();

        return view('home.index', ['data' => $data]);
    }
}
