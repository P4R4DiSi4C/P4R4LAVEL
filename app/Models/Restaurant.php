<?php

namespace App\Models;

use App\Models\User;
use App\Models\Dishes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'desc', 'user_id'];

    public function dishes()
    {
        return $this->hasMany(Dishes::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
