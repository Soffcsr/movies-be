<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class ListRepository implements IListRepository
{
    public function AddNewToWatch($movieid, $userid)
    {
        DB::table('to_watches')->insert([
           'movie_id' => $movieid,
           'user_id' => $userid
        ]);
    }
}
