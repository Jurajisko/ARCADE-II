<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['text','post_id','user_id'];
    protected $guarded  = ['id'];


    /**
     *  Get the posts belong of the comment.
     */
    public function user()
    {
        //return $this->belongsTo(User::class);
        return $this->belongsTo('App\Models\User');
    }

    /**
     *  Get post this comment belongs to.
     */
    public function post()
    {
        //return $this->hasMany(Post::class);
        return $this->belongsTo('App\Models\Post');
    }
}
