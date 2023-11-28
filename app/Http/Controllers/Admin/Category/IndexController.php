<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;


class IndexController extends Controller
{
    public function __invoke()
    {
        //Получаем список категорий
        $categories = Category::all();
        // В данном шаблоне будут доступны переменные category and  category
        return view('admin.category.index', compact('categories'));
    }
}
