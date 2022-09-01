<?php

namespace App\Repositories\CRUD\Common;

use Illuminate\Database\Eloquent\Model;

interface CRUDRepositoryInterface
{
    public function getPosts() : ?object;
    public function getPostById(int $id) : ?object;
}
