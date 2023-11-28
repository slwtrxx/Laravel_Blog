<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;


class DeleteController extends BaseController
{
    public function __invoke(Post $post)
    {
        //Удаление категории
        $post->delete();
        return redirect()->route('admin.post.index');
    }
}
