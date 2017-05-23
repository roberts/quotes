<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Takeaway extends Model
{
    /**
     * Fillable fieldsfor a takeaway.
     *
     * @var array
     */
    protected $fillable = ['user_id'];
}
