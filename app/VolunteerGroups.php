<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VolunteerGroups
 *
 * @package App
 */
class VolunteerGroups extends Model
{
    /**
     * Mass-assign fields for the database table.
     *
     * @var array
     */
    protected $fillable = ['name', 'short_description', 'long_description'];

    /**
     * Get the members for a group through the relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function volunteers()
    {
        return $this->belongsToMany(Volunteers::class)->withTimestamps();
    }
}
