<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\tag;
use Illuminate\Http\Request;

class DeleteController extends Controller
{

    public function __invoke(Tag $tag)
    {
        $tag->delete();
        return to_route('admin.tag.index');
    }
}
