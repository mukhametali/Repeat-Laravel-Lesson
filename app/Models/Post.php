<?php

namespace App\Models;

use Carbon\Carbon;
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

    protected $fillable = ['title','content','rubric_id'];
    protected $table = 'posts';


    public function rubric()
    {
        return $this->belongsTo(Rubric::class, 'rubric_my_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function getPostDate()
    {
        return Carbon::parse($this->created_at)->diffForHumans();
    }


}
