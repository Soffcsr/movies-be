<?php

namespace App\Repositories;

use App\Models\Movie;
use Illuminate\Support\Facades\DB;

class MovieRepository implements IMovieRepository
{
    public function SaveMovie($movie, $genreid){
        if(DB::table('movies')->where('code', $movie->code)->exists()){
            return Movie::where('code', $movie->code)->first();
        }

        $newmovie = new Movie();
        $newmovie->code = $movie->code;
        $newmovie->image = $movie->image;
        $newmovie->title = $movie->title;
        $newmovie->overview = $movie->overview;
        $newmovie->save();

        DB::table('movie_genre')->insert([
            'movie_id' => $newmovie->id,
            'genre_id' => $genreid
        ]);

        return $newmovie->id;
    }
}
