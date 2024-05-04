<?php

namespace App\Repositories\Interfaces;

interface ConexoRepositoryInterface
{
    public function getColors();
    public function createGame($boardDate);
    public function createGameCategory($game, $category);
    public function createGameAnswers($game, $answer);
}
