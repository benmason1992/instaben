<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo((User::class));
    }

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/zo1j6lygaYJuUDvtgSKQyrYqEeT0yIrQuG0bOFHZ.jpeg';
        return '/storage/' . $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
}
