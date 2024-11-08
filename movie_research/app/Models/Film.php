<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'film_name',
    ];

    protected $table = 'films';

    public function theater()
    {
        return $this->belongsToMany(Theater::class, 'showings', 'film_id', 'theater_id')->withPivot('revenue');
    }
}
