<?php

namespace App\Repositories;

use App\Models\Genre;
use Illuminate\Support\Facades\DB;

class GenreRepository implements IGenreRepository
{
    public function SaveGenre($genre){
        if(DB::table('genres')->where('code', $genre['code'])->exists()){
            return DB::table('genres')->where('code', $genre['code'])->value('id');
        }

        $gen = new Genre();
        $gen->code = $genre['code'];
        $gen->description = $genre['description'];
        $gen->save();

        return $gen->id;
    }
}
