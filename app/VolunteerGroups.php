<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VolunteerGroups extends Model
{
    /**
     * Mass-assign fields for the database table.
     *
     * @var array
     */
    protected $fillable = ['name', 'short_description', 'long_description'];
}
