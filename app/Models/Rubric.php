<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *Class Rubric
 * @package App
 * @mixin Builder
 */
class Rubric extends Model
{
    use HasFactory;

    public function posts()
    {
        return $this->hasMany(Post::class, 'rubric_my_id');
    }
}
