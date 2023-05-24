<?php

namespace App\Test\Videostore;

use App\Videostore\Genre;
use PHPUnit\Framework\TestCase;

class GenreTest extends TestCase
{
    public function testGetNameReturnsLowerCseNames()
    {
        $genre = new Genre('Triler');

        $this->assertSame('triler', $genre->getname());
    }

    public function testGetNameIfUppercaseIsREquestReturnesUppercaseName()
    {
        $genre = new Genre('Triler');
        $this->assertSame('TRILER', $genre->getname(true));
    }
}