<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    /**
     * Fillable fieldsfor a vote.
     *
     * @var array
     */
    protected $fillable = ['user_id'];
}
