<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ConexoAnswer extends Model
{
    use HasFactory;

    protected $fillable = ['game_id', 'category_id', 'label'];
    public function game(): BelongsTo
    {
        return $this->belongsTo(Conexo::class);
    }
}
