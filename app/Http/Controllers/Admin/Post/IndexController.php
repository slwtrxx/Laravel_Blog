<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;


class IndexController extends BaseController
{
    public function __invoke()
    {
        //Получаем список категорий
        $posts = Post::all();
        // В данном шаблоне будут доступны переменные category and  category
        return view('admin.post.index', compact('posts'));
    }
}
