<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Models\MovieGenre;
use App\Repositories\IGenreRepository;
use App\Repositories\IListRepository;
use App\Repositories\IMovieRepository;

class MovieController extends Controller
{
    private $_genreRepository = null;
    private $_movieRepository = null;
    private $_listRepository = null;

    public function __construct(IGenreRepository $genreRepository, IMovieRepository $movieRepository, IListRepository $listRepository)
    {
        $this->_genreRepository = $genreRepository;
        $this->_movieRepository = $movieRepository;
        $this->_listRepository = $listRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMovieRequest $request)
    {
        $genreid = $this->_genreRepository->SaveGenre($request->genre);
        $movie = $this->_movieRepository->SaveMovie($request, $genreid);
        return $this->_listRepository->AddNewToWatch($movie->id, 1);
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMovieRequest $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
