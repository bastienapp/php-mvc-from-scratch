<?php

namespace App\Controller;

use App\Model\GameModel;

class GameController
{
    private GameModel $model;
    private \Twig\Environment $twig;

    public function __construct()
    {
        $this->model = new GameModel();

        $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../View');
        $this->twig = new \Twig\Environment(
            $loader,
            [
                'cache' => false,
            ]
        );
    }

    public function browse(): void
    {
        $games = $this->model->getAll();

        echo $this->twig->render('games/browse.html.twig', ['games' => $games]);
    }

    public function show(int $id): void
    {
        $game = $this->model->getById($id);

        echo $this->twig->render('games/show.html.twig', ['game' => $game]);
    }
}
