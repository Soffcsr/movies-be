<?php

namespace App\Repositories;

interface IMovieRepository
{
    function SaveMovie($movie, $genreid);
}
