<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *Class Post
 * @package App
 * @mixin Builder
 */
class Post extends Model
{
    use HasFactory;

//    protected $primaryKey = 'post_id';
//    public $incrementing = false;
//    protected $keyType = 'string';
//    public $timestamps = false;

    protected $fillable = ['title','content'];
    protected $table = 'posts';
    /*protected $attributes = [
        'content' => 'Content 2'
    ];*/

    public function rubric()
    {
        return $this->belongsTo(Rubric::class, 'rubric_my_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }



}
