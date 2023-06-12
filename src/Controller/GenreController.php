<?php

namespace App\Controller;

use App\Model\Genre;
use Core\Controller;

class GenreController extends Controller
{
    public function index()
    {
        $genre = new Genre();

        //var_dump($genre);

        $this->renderView('genres', [
            'title' => 'Genres',
            'data' => $genre->findAll()

        ]);
    }
}