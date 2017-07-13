<?php

namespace App;

use Laravel\Spark\User as SparkUser;

class User extends SparkUser
{
    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'username';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'first_name',
        'last_name',
        'display_name',
        'email',
    ];

    /**
     * Get a string path for the user.
     *
     * @return string
     */
    public function path()
    {
        return "/@{$this->username}";
    }

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'authy_id',
        'country_code',
        'phone',
        'card_brand',
        'card_last_four',
        'card_country',
        'billing_address',
        'billing_address_line_2',
        'billing_city',
        'billing_zip',
        'billing_country',
        'extra_billing_information',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'trial_ends_at' => 'datetime',
        'uses_two_factor_auth' => 'boolean',
    ];

    /**
     * A user may have many quotes.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quotes()
    {
        return $this->hasMany(Quote::class, 'created_by');
    }

    /**
     * A user may have many approved quotes.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function approvedquotes()
    {
        return $this->hasMany(Quote::class, 'approved_by');
    }

    /**
     * A user may have many updated quotes.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function updatedquotes()
    {
        return $this->hasMany(Quote::class, 'updated_by');
    }

    /**
     * A user may have many quote submissions.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quotesubmissions()
    {
        return $this->hasMany(QuoteSubmission::class, 'created_by');
    }

    
}