<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'weight',
        'pet_category',
        'status',
        'photo',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
