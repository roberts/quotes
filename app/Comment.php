<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * Fillable fieldsfor a comment.
     *
     * @var array
     */
    protected $fillable = ['user_id'];
}
