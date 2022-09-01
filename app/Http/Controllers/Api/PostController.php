<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;

//use App\Repositories\CRUD\Common\CRUDRepositoryInterface;
use App\Http\Resources\PostResource;
use App\Repositories\CRUD\PostRepository;
use Illuminate\Http\Request;

class PostController extends BaseController
{
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function index()
    {
        return PostResource::collection($this->postRepository->getPosts());
    }

    public function getById($id)
    {
        return PostResource::collection($this->postRepository->getPostById($id));
    }
}
