<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ConexoCategory extends Model
{
    use HasFactory;

    protected $fillable = ['game_id', 'group_id', 'label'];
    
    public function game(): BelongsTo {
        return $this->belongsTo(Conexo::class);
    }
}
