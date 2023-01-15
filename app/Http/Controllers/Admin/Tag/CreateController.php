<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class CreateController extends Controller
{

    public function __invoke()
    {        
        return view('admin.tag.create');
    }
}
