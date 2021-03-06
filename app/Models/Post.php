<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','title','text','slug'];
    
    /**
     * Get the route key for the model
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     *  Get the author of the blog post.
     */
    public function user()
    {
        //return $this->belongsTo(User::class);
        return $this->belongsTo('App\Models\User');
    }

    /**
     *  Get the comments of this post.
     */
    public function comments()
    {
        return $this->hasMany('App\Models\Comment')->latest();
    }


    //protected $table = 'posts';
    //protected $hidden = ['text', 'updated_at'];


    
}
