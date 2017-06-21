<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Volunteers extends Model
{
    use SoftDeletes;

    /**
     * Mass-assign fields for the database.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'extra_information'];
}
