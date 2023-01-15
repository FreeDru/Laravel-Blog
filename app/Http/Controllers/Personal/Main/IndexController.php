<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\PostUserLike;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function __invoke()
    {
        $data = [];        
        $data['likePosts'] = PostUserLike::where('user_id', auth()->user()->id)->count();
        $data['commentsPosts'] = Comment::where('user_id', auth()->user()->id)->count();

        return view('personal.main.index', compact('data'));
    }
}
