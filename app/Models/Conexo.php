<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Conexo extends Model
{
    use HasFactory;

    protected $fillable = ['board_date'];

    public function answers(): HasMany
    {
        return $this->hasMany(ConexoAnswer::class, 'game_id');
    }

    public function categories(): HasMany
    {
        return $this->hasMany(ConexoCategory::class, 'game_id');
    }

    public function userAnswers(): HasMany
    {
        return $this->hasMany(ConexoUserAnswer::class, 'game_id');
    }
}
