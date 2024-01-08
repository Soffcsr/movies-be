<?php

namespace App\Repositories;

interface IListRepository
{
    function AddNewToWatch($movieid, $userid);
}
