<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;


class IndexController extends Controller
{
    public function __invoke()
    {
        //Получаем список категорий
        $users = User::all();
        // В данном шаблоне будут доступны переменные category and  category
        return view('admin.user.index', compact('users'));
    }
}
