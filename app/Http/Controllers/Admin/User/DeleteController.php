<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;

class DeleteController extends Controller
{

    public function __invoke(User $user)
    {
        $user->delete();
        return to_route('admin.user.index');
    }
}
