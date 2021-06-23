<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Resources\CommentResource;

class PostCommentController extends Controller
{
    public function index(Post $post)
    {
        return CommentResource::collection(
            Comment::where('post_id', $post->id)->paginate(5)
        );
    }
}
