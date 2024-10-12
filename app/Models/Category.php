<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'event_categories'; // Ganti jika tabel Anda memiliki nama lain

    protected $fillable = [
        'name',
        'active',
    ];

    // Relationship with Event
    public function events()
    {
        return $this->hasMany(Event::class, 'category_events_id');
    }
}
