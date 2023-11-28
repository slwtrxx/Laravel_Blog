<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'posts';
    protected $guarded = false;

/*Отношение "belongsToMany" позволяет установить связь "многие ко многим" между двумя таблицами в базе данных.
В этом типе отношений каждая запись в одной таблице может быть связана с несколькими записями в другой таблице, и наоборот.
Для реализации этой связи в Laravel необходимо создать промежуточную таблицу, которая будет содержать в себе ключи обеих таблиц.*/
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tags', 'post_id', 'tag_id');
    }
}
