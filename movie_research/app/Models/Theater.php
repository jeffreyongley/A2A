<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Theater extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'theater_name'
    ];

    public function theater()
    {
        return $this->belongsToMany(Film::class, 'showings', 'theater_id', 'film_id')->withPivot('revenue');
    }
}
