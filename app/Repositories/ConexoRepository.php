<?php

namespace App\Repositories;

use App\Repositories\Interfaces\ConexoRepositoryInterface;

use App\Models\Conexo;
use App\Models\ConexoGroup;

class ConexoRepository implements ConexoRepositoryInterface
{
    public function getColors()
    {
        return ConexoGroup::all()->mapWithKeyS(function ($color) {
            return [$color['color'] => $color['id']];
        });
    }

    public function createGame($boardDate)
    {
        return Conexo::create(['board_date' => $boardDate]);
    }

    public function createGameCategory($game, $category)
    {
        return $game->categories()->create($category);
    }

    public function createGameAnswers($game, $answer)
    {
        return $game->answers()->create($answer);
    }
}
