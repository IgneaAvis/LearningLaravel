<?php

namespace App\Repositories\CRUD;

use App\Models\Post;
use App\Repositories\CRUD\Common\CRUDRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class PostRepository implements CRUDRepositoryInterface
{
    public function getPosts(): ?object
    {
        return Post::all();
    }

    public function getPostById(int $id): ?object
    {
        return Post::whereId($id)->get();
    }
}
