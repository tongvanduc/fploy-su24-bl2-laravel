<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Example extends Model
{
    use HasFactory;

    protected $casts = [
        'user_ids' => 'array',
        'info' => 'array'
    ];

    public function getUsersAttribute() {
        return User::query()->whereIn('id', $this->user_ids)->get();
    }
}
