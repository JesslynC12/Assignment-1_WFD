<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizer extends Model
{
    use HasFactory;

    protected $table = 'organizers'; // Ganti jika tabel Anda memiliki nama lain

    protected $fillable = [
        'name',
        'description',
        'facebook_link',
        'x_link',
        'website_link',
        'active',
    ];

    // Relationship with Event
    public function events()
    {
        return $this->hasMany(Event::class, 'organizer_events_id');
    }
}
