<?php

namespace App\Controller;

use App\Model\GameModel;

class GameController
{
    private GameModel $model;

    public function __construct()
    {
        $this->model = new GameModel();
    }

    public function browse(): void
    {
        $games = $this->model->getAll();

        require_once __DIR__ . '/../View/games/browse.php';
    }

    public function show(int $id): void
    {
        $game = $this->model->getById($id);

        require_once __DIR__ . '/../View/games/show.php';
    }
}
