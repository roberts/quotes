<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recommendation extends Model
{
    /**
     * Fillable fieldsfor a recommendation.
     *
     * @var array
     */
    protected $fillable = ['user_id'];
}
