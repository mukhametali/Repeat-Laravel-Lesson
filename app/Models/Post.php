<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

//    protected $primaryKey = 'post_id';
//    public $incrementing = false;
//    protected $keyType = 'string';
//    public $timestamps = false;

    protected $table = 'posts';
    protected $attributes = [
        'content' => 'Content 2'
    ];




}
