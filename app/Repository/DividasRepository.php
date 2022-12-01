<?php
namespace App\Repository;

use App\Models\Dividas;

class DividasRepository
{
    public function all()
    {
        return Dividas::all();
    }   

}